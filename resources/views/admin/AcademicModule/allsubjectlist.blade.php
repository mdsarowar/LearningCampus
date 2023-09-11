<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->


<head>
    @include('layouts.inc.head')
</head>
<!-- End Head -->

<body>

    <!----- preloader ----->
    @include('layouts.inc.preloader')
    <!----- /preloader ----->




    <!-- Header (Topbar) -->
    <header class="u-header">
        @include('layouts.inc.header')
    </header>
    <!-- End Header (Topbar) -->
    <main class="u-main" role="main">
        <!-- Sidebar -->
        <aside id="sidebar" class="u-sidebar">
            @include('layouts.inc.sidebar')
        </aside>
        <!-- End Sidebar -->

        <div class="u-content">
            <div class="u-body">

                <section class="es-form-area">
                    <div class="card">
                        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                            <h2 class="text-white mb-0">
                                All Subject
                            </h2>
                        </header>

                        {{-- form submission message start --}}
                        @if (session('error'))
                            <div class="alert alert-danger col-8 m-auto text-center">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success col-8 m-auto text-center">
                                {{ session('success') }}
                            </div>
                        @endif
                        {{-- form submission message end --}}

                        <div class="card-body" id="institue">
                            <div class="es-form es-add-form">
                                <a href="{{ route('add_subject') }}" class="btn btn-primary"><i
                                        class="fa-solid fa-plus"></i></a>
                                <div id="searchLoader" style="text-align: center; display:none">
                                    <img src="{{ asset('assets/img/dual_ball_loader.gif') }}" alt=""
                                        width="80">
                                </div>
                                <p class="text-right">Showing 1-1 of 1 item</p>

                                @if (!empty($subjectInfo))
                                    <div class="table-responsive">
                                        <!---- session table  ----->
                                        <table class="table table-bordered mt-3 text-center shift_table">
                                            <thead class="table-bordered">
                                                <tr>
                                                    <th scope="col">Sl</th>
                                                    <th scope="col">Class Name</th>
                                                    <th scope="col">Subject Code</th>
                                                    <th scope="col">Subject Name</th>
                                                    <th scope="col">Full Marks</th>
                                                    <th scope="col">Group Name</th>
                                                    <th scope="col">Subject Type</th>
                                                    <th scope="col">Result Type</th>
                                                    <th scope="col">Count Optional (When GPA > 2)</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>

                                            <form action="{{ route('all_subject_search') }}" method="POST"
                                                id="tableSearchForm">
                                                @csrf
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>
                                                        <select name="class_name" id="">
                                                            <option value="all">All</option>
                                                            <optgroup label="Bangla Medium" class="bold_text">
                                                                @foreach ($classList as $class)
                                                                    @if ($class['class_type'] === 'Bangla')
                                                                        <option
                                                                            value="{{ $class['class_type'] . '_' . $class['class_name'] }}">
                                                                            {{ $class['class_name'] . ' (' . $class['class_type'] . ')' }}
                                                                        </option>
                                                                    @endif
                                                                @endforeach
                                                            </optgroup>
                                                            <optgroup label="English Medium" class="bold_text">
                                                                @foreach ($classList as $class)
                                                                    @if ($class['class_type'] === 'English')
                                                                        <option
                                                                            value="{{ $class['class_type'] . '_' . $class['class_name'] }}">
                                                                            {{ $class['class_name'] . ' (' . $class['class_type'] . ')' }}
                                                                        </option>
                                                                    @endif
                                                                @endforeach
                                                            </optgroup>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" name="subject_code" placeholder="112233"
                                                            style="text-align: center"></td>
                                                    <td><input type="text" name="subject_name" placeholder="English"
                                                            style="text-align: center"></td>
                                                    <td><input type="text" name="full_marks" placeholder="100"
                                                            style="text-align: center"></td>
                                                    <td>
                                                        <select name="group_name" id="">
                                                            <option value="all">All</option>
                                                            @foreach ($groupList as $group)
                                                                <option value="{{ $group['group_name'] }}">
                                                                    {{ $group['group_name'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="subject_type" id="">
                                                            <option value="all">All</option>
                                                            <option value="Compulsory">Compulsory</option>
                                                            <option value="Optional">Optional</option>
                                                            <option value="Continuous_Assesment">Continuous Assesment
                                                            </option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="result_type" id="">
                                                            <option value="all">All</option>
                                                            <option value="Percentage_Terms">Percentage(Terms)</option>
                                                            <option value="Avarage_Terms">Avarage(Terms)</option>
                                                            <option value="Avarage_Subject">Avarage(Subject)</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="is_optional" id="">
                                                            <option value="all">All</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="status" id="">
                                                            <option value="all">All</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
                                                    </td>
                                                    <td style="color:#6b15b6" id="SearchBtn"><i
                                                            class="fa-solid fa-search"></i></td>
                                                </tr>
                                            </form>

                                            <tbody id="tableContents">

                                                {{-- table data --}}
                                                @php
                                                    $serial = 1;
                                                @endphp

                                                @foreach ($subjectInfo as $subject)
                                                    <tr>
                                                        <td>{{ $serial }}</td>
                                                        <td>{{ $subject['class_name'] }}</td>
                                                        <td>{{ $subject['subject_code'] }}</td>
                                                        <td>{{ $subject['subject_name'] }}</td>
                                                        <td>{{ $subject['full_marks'] }}</td>
                                                        <td>{{ $subject['group_name'] }}</td>
                                                        <td>
                                                            @if ($subject['subject_Type'] === 'Continuouse_Assesment')
                                                                {{ 'Continuouse Assesment' }}
                                                            @else
                                                                {{ $subject['subject_Type'] }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($subject['result_type'] == 'Percentage_Terms')
                                                                {{ 'Percentage (Terms)' }}
                                                            @elseif ($subject['result_type'] == 'Average_Terms')
                                                                {{ 'Average (Terms)' }}
                                                            @elseif ($subject['result_type'] == 'Average_Subjects')
                                                                {{ 'Average (Subjects)' }}
                                                            @else
                                                                {{ '-' }}
                                                            @endif
                                                        </td>
                                                        <td>{{ $subject['is_optional'] }}</td>
                                                        <td>
                                                            @if ($subject['status'] == 1)
                                                                <p style="color: rgb(0, 214, 114)">
                                                                    {{ 'Active' }}
                                                                </p>
                                                            @else
                                                                <p style="color: red">{{ 'Inactive' }}</p>
                                                            @endif
                                                        </td>
                                                        <td style="display: flex; align-items:center; border:0">
                                                            <a
                                                                href="{{ route('view_subject') }}?subject_id={{ $subject['subject_id'] }}"><i
                                                                    class="fa-solid fa-eye"></i></a>&nbsp
                                                            &nbsp
                                                            <a
                                                                href="{{ route('edit_subject') }}?subject_id={{ $subject['subject_id'] }}"><i
                                                                    class="fa-solid fa-pencil"></i></a>&nbsp
                                                            &nbsp
                                                            <a onclick="showDeleteModal('Subject', {{ $subject['subject_id'] }})" style="background-color: transparent; color:#6b15b6"
><i
                                                                    class="fa-solid fa-trash"></i></a>&nbsp
                                                            &nbsp
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $serial++;
                                                    @endphp
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <p id="no_result_msg" style="display: none">No Subject Found</p>
                                        <!---- /session table ----->
                                    </div>
                                @else
                                    <p>No Subject found</p>
                                @endif


                            </div>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </main>

    <!-- Global Vendor -->

    @include('layouts.inc.footer')

    {{-- confirm popup start --}}
    <div class="modal fade" id="confirmModalBox" tabindex="-1" aria-labelledby="ConfirmModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ConfirmModalLabel">Confirm Deletion...</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this <span id="label"></span>? This action
                    cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ route('delete_subject') }}" method="POST">
                        @csrf
                        <input type="hidden" name="label_id" value="">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showDeleteModal(label, id) {
            var modal = new bootstrap.Modal(document.getElementById("confirmModalBox"));
            var labelElement = document.getElementById("label");
            var formInput = document.querySelector("#confirmModalBox [name='label_id']");

            labelElement.textContent = label;
            formInput.value = id;
            modal.show();
        }
    </script>
    {{-- confirm popup start --}}


    {{-- using ajax to handle account head search form request --}}
    <script>
        $(document).ready(function() {
            $('#SearchBtn').click(function() {
                var formData = $('#tableSearchForm').serialize();

                $('#searchLoader').show();
                $.ajax({
                    url: '{{ route('all_subject_search') }}',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#searchLoader').hide();

                        if (response.length === 0) {
                            $('#tableContents').empty();
                            $('#no_result_msg').show();
                        } else {
                            var serial = 1;
                            $('#tableContents').empty();
                            $('#no_result_msg').hide();
                            $.each(response, function(index, subject) {
                                var row = '<tr>' +
                                    '<td>' + serial + '</td>' +
                                    '<td>' + subject.class_name + '</td>' +
                                    '<td>' + subject.subject_code + '</td>' +
                                    '<td>' + subject.subject_name + '</td>' +
                                    '<td>' + subject.full_marks + '</td>' +
                                    '<td>' + subject.group_name + '</td>' +
                                    '<td>' +
                                    (subject.subject_Type === 'Continuous_Assesment' ?
                                        'Continuous Assessment' : subject.subject_Type
                                    ) +
                                    '</td>' +
                                    '<td>' +
                                    (subject.result_type === 'Percentage_Terms' ?
                                        'Percentage (Terms)' :
                                        (subject.result_type === 'Average_Terms' ?
                                            'Average (Terms)' :
                                            (subject.result_type ===
                                                'Average_Subjects' ?
                                                'Average (Subjects)' : '-'))) +
                                    '</td>' +
                                    '<td>' + (subject.is_optional ? 'Yes' : 'No') +
                                    '</td>' +
                                    '<td>' +
                                    (subject.status == 1 ?
                                        '<p style="color: rgb(0, 214, 114)">Active</p>' :
                                        '<p style="color: red">Inactive</p>') +
                                    '</td>' +
                                    '<td style="display: flex; align-items:center; border:0">' +
                                    '<a href="{{ route('view_subject') }}?subject_id=' + subject.subject_id +
                                    '"><i class="fa-solid fa-eye"></i></a>&nbsp&nbsp' +
                                    '<a href="{{ route('edit_subject') }}?subject_id=' + subject.subject_id +
                                    '"><i class="fa-solid fa-pencil"></i></a>&nbsp&nbsp' +
                                    '<a onclick="showDeleteModal(\'Subject\',' + subject .subject_id + ')" style="background-color: transparent; color:#6b15b6"><i class="fa-solid fa-trash"></i></a>' +
                                    '</td>' +
                                    '</tr>';

                                $('#tableContents').append(row);

                                serial++;
                            });
                        }

                        // console.log(response);

                    },
                    error: function(response) {
                        console.log(response.responseText);
                    }
                });
            });
        });
    </script>

</body>

</html>
