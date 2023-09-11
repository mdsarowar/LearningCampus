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
                                All Session
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

                        <div class="card-body table-responsive" id="institue">
                            <div class="es-form es-add-form">
                                <a href="{{ route('add_session') }}" class="btn btn-primary"><i
                                        class="fa-solid fa-plus"></i></a>
                                <div id="searchLoader" style="text-align: center; display:none">
                                    <img src="{{ asset('assets/img/dual_ball_loader.gif') }}" alt=""
                                        width="80">
                                </div>
                                <p class="text-right">Showing 1-1 of 1 item</p>

                                @if (!empty($sessionInfo))
                                    <!---- session table  ----->
                                    <div style="overflow-x: auto">
                                        <table class="table table-bordered mt-3 text-center">
                                            <thead class="table-bordered">
                                                <tr>
                                                    <th scope="col">Sl</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Short Code</th>
                                                    <th scope="col">Current Session?</th>
                                                    <th scope="col">Fiscal Year?</th>
                                                    <th scope="col">Result Type?</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col" width="150px">Action</th>
                                                </tr>
                                            </thead>

                                            <form action="{{ route('all_session_search') }}" method="POST"
                                                id="tableSearchForm">
                                                @csrf
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td><input type="text" name="session_name" placeholder="2023"
                                                            id="" maxlength="4" style="width: 90px">
                                                    </td>
                                                    <td><input type="text" name="session_code" placeholder="23"
                                                            id="" maxlength="2" style="width: 65px"></td>
                                                    <td>
                                                        <select name="is_current_session" id="">
                                                            <option value="all">All</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="is_fiscal_year" id="">
                                                            <option value="all">All</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="result_type" id="">
                                                            <option value="all">All</option>
                                                            <option value="Percantage_Terms">Percantage(Terms)
                                                            </option>
                                                            <option value="Avarage_Terms">Avarage(Terms)</option>
                                                            <option value="Average_Subjects">Avarage(Subjects)
                                                            </option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="status" id="">
                                                            <option value="all">All &nbsp;&nbsp;</option>
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

                                                @foreach ($sessionInfo as $session)
                                                    <tr>
                                                        <td>{{ $serial }}</td>
                                                        <td>{{ $session['session_name'] }}</td>
                                                        <td>{{ $session['session_code'] }}</td>
                                                        <td>{{ $session['is_current_session'] }}</td>
                                                        <td>{{ $session['is_fiscal_year'] }}</td>
                                                        <td>
                                                            @if ($session['result_type'] == 'Percentage_Terms')
                                                                {{ 'Percentage (Terms)' }}
                                                            @elseif ($session['result_type'] == 'Average_Terms')
                                                                {{ 'Average (Terms)' }}
                                                            @elseif ($session['result_type'] == 'Average_Subjects')
                                                                {{ 'Average (Subjects)' }}
                                                            @else
                                                                {{ 'N/A' }}
                                                            @endif
                                                        </td>

                                                        <td>
                                                            @if ($session['status'] == 1)
                                                                <p style="color: rgb(0, 214, 114)">{{ 'Active' }}
                                                                </p>
                                                            @else
                                                                <p style="color: red">{{ 'Inactive' }}</p>
                                                            @endif
                                                        </td>

                                                        <td style="display: flex; align-items:center">
                                                            <a
                                                                href="{{ route('view_session') }}?session_id={{ $session['session_id'] }}"><i
                                                                    class="fa-solid fa-eye"></i></a>&nbsp
                                                            &nbsp&nbsp
                                                            <a
                                                                href="{{ route('edit_session') }}?session_id={{ $session['session_id'] }}"><i
                                                                    class="fa-solid fa-pencil"></i></a>&nbsp
                                                            &nbsp&nbsp
                                                            <a onclick="showDeleteModal('Session', {{ $session['session_id'] }})"
                                                                style="background-color: transparent; color:#6b15b6"><i
                                                                    class="fa-solid fa-trash"></i></a>&nbsp
                                                            &nbsp&nbsp
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $serial++;
                                                    @endphp
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <p id="no_result_msg" style="display: none">No Session Found</p>
                                    </div>
                                    <!---- session table  ----->
                                @else
                                    <p>No session found</p>
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
                    <form action="{{ route('delete_session') }}" method="POST">
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
                    url: '{{ route('all_session_search') }}',
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
                            $.each(response, function(index, session) {
                                var row = '<tr>' +
                                    '<td>' + serial + '</td>' +
                                    '<td>' + session.session_name + '</td>' +
                                    '<td>' + session.session_code + '</td>' +
                                    '<td>' + session.is_current_session + '</td>' +
                                    '<td>' + session.is_fiscal_year + '</td>' +
                                    '<td>' +
                                    (session.result_type === 'Percentage_Terms' ?
                                        'Percentage (Terms)' :
                                        (session.result_type === 'Average_Terms' ?
                                            'Average (Terms)' :
                                            (session.result_type ===
                                                'Average_Subjects' ?
                                                'Average (Subjects)' : 'N/A'))) +
                                    '</td>' +
                                    '<td>' +
                                    (session.status == 1 ?
                                        '<p style="color: rgb(0, 214, 114)">Active</p>' :
                                        '<p style="color: red">Inactive</p>') +
                                    '</td>' +
                                    '<td style="display: flex; align-items:center">' +
                                    '<a href="{{ route('view_session') }}?session_id=' +
                                    session.session_id +
                                    '"><i class="fa-solid fa-eye"></i></a>&nbsp&nbsp&nbsp' +
                                    '<a href="{{ route('edit_session') }}?session_id=' +
                                    session.session_id +
                                    '"><i class="fa-solid fa-pencil"></i></a>&nbsp&nbsp&nbsp' +
                                    '<a onclick="showDeleteModal(\'Session\',' + session
                                    .session_id +
                                    ')" style="background-color: transparent; color:#6b15b6"><i class="fa-solid fa-trash"></i></a>&nbsp&nbsp&nbsp' +
                                    '</td>' +
                                    '</tr>';

                                $('#tableContents').append(row);
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

    <script>
        ClassicEditor
            .create(document.querySelector('#content'), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });

        ClassicEditor
            .create(document.querySelector('#contents'), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>
</body>

</html>
