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
                                All Classes
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
                                <a href="{{ route('add_class') }}" class="btn btn-primary"><i
                                        class="fa-solid fa-plus"></i></a>
                                <div id="searchLoader" style="text-align: center; display:none">
                                    <img src="{{ asset('assets/img/dual_ball_loader.gif') }}" alt=""
                                        width="80">
                                </div>
                                <p class="text-right">Showing 1-1 of 1 item</p>

                                @if (!empty($classInfo))
                                    <div class="table_responsive" style="overflow-x: auto">
                                        <!---- session table  ----->
                                        <table class="table table-bordered mt-3 text-center shift_table">
                                            <thead class="table-bordered">
                                                <tr>
                                                    <th scope="col">Sl</th>
                                                    <th scope="col">Medium Name</th>
                                                    <th scope="col">Class Name</th>
                                                    <th scope="col">Rank</th>
                                                    <th scope="col">Class Code</th>
                                                    <th scope="col">Has Group/4th Subject</th>
                                                    <th scope="col" width="35px">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>

                                            <form action="{{ route('all_class_search') }}" method="POST"
                                                id="tableSearchForm">
                                                @csrf
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>
                                                        <select name="class_type" id="">
                                                            <option value="all">All</option>
                                                            <option value="Bangla">Bangla Medium</option>
                                                            <option value="English">English Medium</option>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" name="class_name" placeholder="eg: One"
                                                            id="" style="text-align: center"></td>
                                                    <td><input type="text" name="class_rank" placeholder="eg: 1"
                                                            id="" style="text-align: center"></td>
                                                    <td><input type="text" name="class_code" placeholder="eg: B08"
                                                            id="" style="text-align: center"></td>
                                                    <td>
                                                        <select name="hasExtraSubject" id="">
                                                            <option value="all">All</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="status" id="">
                                                            <option value="all">All &nbsp;&nbsp;&nbsp;</option>
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

                                                @foreach ($classInfo as $class)
                                                    <tr>
                                                        <td>{{ $serial }}</td>
                                                        <td>{{ $class['class_type'] }} Medium</td>
                                                        <td>{{ $class['class_name'] }}</td>
                                                        <td>{{ $class['class_rank'] }}</td>
                                                        <td>{{ $class['class_code'] }}</td>
                                                        <td>{{ $class['hasExtraSubject'] }}</td>
                                                        <td>
                                                            @if ($class['status'] == 1)
                                                                <p style="color: rgb(0, 214, 114)">{{ 'Active' }}
                                                                </p>
                                                            @else
                                                                <p style="color: red">{{ 'Inactive' }}</p>
                                                            @endif
                                                        </td>
                                                        <td style="display: flex; align-items:center; border:0">
                                                            <a
                                                                href="{{ route('view_class') }}?class_id={{ $class['class_id'] }}"><i
                                                                    class="fa-solid fa-eye"></i></a>&nbsp
                                                            &nbsp
                                                            <a
                                                                href="{{ route('edit_class') }}?class_id={{ $class['class_id'] }}"><i
                                                                    class="fa-solid fa-pencil"></i></a>&nbsp
                                                            &nbsp
                                                            <a onclick="showDeleteModal('Class', {{ $class['class_id'] }})"
                                                                style="background-color: transparent; color:#6b15b6"><i
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
                                        <p id="no_result_msg" style="display: none">No Class Found</p>
                                        <!---- /session table ----->
                                    </div>
                                @else
                                    <p>No medium found</p>
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
    <div class="modal fade" id="confirmModalBox" tabindex="-1" aria-labelledby="ConfirmModalLabel" aria-hidden="true">
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
                    <form action="{{ route('delete_class') }}" method="POST">
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
                    url: '{{ route('all_class_search') }}',
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
                            $.each(response, function(index, classInfo) {
                                var row = '<tr>' +
                                    '<td>' + (index + 1) + '</td>' +
                                    '<td>' + classInfo.class_type + ' Medium</td>' +
                                    '<td>' + classInfo.class_name + '</td>' +
                                    '<td>' + classInfo.class_rank + '</td>' +
                                    '<td>' + classInfo.class_code + '</td>' +
                                    '<td>' + (classInfo.hasExtraSubject ? 'Yes' :
                                        'No') + '</td>' +
                                    '<td>' +
                                    (classInfo.status == 1 ?
                                        '<p style="color: rgb(0, 214, 114)">Active</p>' :
                                        '<p style="color: red">Inactive</p>') +
                                    '</td>' +
                                    '<td style="display: flex; align-items:center; border:0">' +
                                    '<a href="{{ route('view_class') }}?class_id=' +
                                    classInfo.class_id +
                                    '"><i class="fa-solid fa-eye"></i></a>&nbsp&nbsp' +
                                    '<a href="{{ route('edit_class') }}?class_id=' +
                                    classInfo.class_id +
                                    '"><i class="fa-solid fa-pencil"></i></a>&nbsp&nbsp' +
                                    '<a onclick="showDeleteModal(\'Medium\',' + classInfo
                                    .class_id +
                                    ')" style="background-color: transparent; color:#6b15b6"><i class="fa-solid fa-trash"></i></a>' +
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
