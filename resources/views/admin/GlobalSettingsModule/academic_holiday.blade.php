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
                                Manage Academic Holiday
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
                                <a href="{{ route('add_academic_holiday') }}" class="btn btn-primary"><i
                                        class="fa-solid fa-plus"></i></a>
                                <div id="searchLoader" style="text-align: center; display:none">
                                    <img src="{{ asset('assets/img/dual_ball_loader.gif') }}" alt=""
                                        width="80">
                                </div>
                                <p class="text-right">Showing 1-1 of 1 item</p>

                                @if (!empty($holidaysData))

                                    <div class="table-responsive">
                                        <!---- session table  ----->
                                        <table class="table table-bordered mt-3 text-center">
                                            <thead class="table-bordered">
                                                <tr>
                                                    <th scope="col">Srl</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>

                                            <form action="{{ route('academic_holiday_search') }}" method="POST"
                                                id="tableSearchForm">
                                                @csrf
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>
                                                        <select name="type" id="type">
                                                            <option value="all">All</option>
                                                            <option value="Activities">Activities</option>
                                                            <option value="Holidays">Holidays</option>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" name="title" id="title"></td>
                                                    <td>
                                                        <select name="status" id="status">
                                                            <option value="all">All</option>
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>
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

                                                @foreach ($holidaysData as $holiday)
                                                    <tr>
                                                        <td>{{ $serial }}</td>
                                                        <td>
                                                            @if ($holiday['type'] === 'Activities')
                                                                {{ 'Activities' }}
                                                            @elseif ($holiday['type'] === 'Holidays')
                                                                {{ 'Holidays' }}
                                                            @endif
                                                        </td>
                                                        <td>{{ $holiday['title'] }}</td>
                                                        <td>
                                                            @if ($holiday['status'] == 'Active')
                                                                <p style="color: rgb(0, 214, 114)">
                                                                    {{ 'Active' }}
                                                                </p>
                                                            @else
                                                                <p style="color: red">{{ 'Inactive' }}</p>
                                                            @endif
                                                        </td>
                                                        <td style="display: flex; align-items:center; border:0">
                                                            <a
                                                                href="{{ route('view_academic_holiday') }}?id={{ $holiday['id'] }}"><i
                                                                    class="fa-solid fa-eye"></i></a>&nbsp
                                                            &nbsp
                                                            <a
                                                                href="{{ route('edit_academic_holiday') }}?id={{ $holiday['id'] }}"><i
                                                                    class="fa-solid fa-pencil"></i></a>&nbsp
                                                            &nbsp
                                                            <a onclick="showDeleteModal('Holiday', {{ $holiday['id'] }})"
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
                                        <p id="no_result_msg" style="display: none">No Holiday Found</p>
                                        <!---- /session table ----->
                                    </div>
                                @else
                                    <p>No Holiday found</p>
                                @endif

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
                    <form action="{{ route('delete_academic_holiday') }}" method="POST">
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
                    url: '{{ route('academic_holiday_search') }}',
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
                            $.each(response, function(index, holiday) {
                                var row = '<tr>' +
                                    '<td>' + serial + '</td>' +
                                    '<td>' + (holiday.type === 'Activities' ?
                                        'Activities' : 'Holidays') + '</td>' +
                                    '<td>' + holiday.title + '</td>' +
                                    '<td>' + (holiday.status == 'Active' ?
                                        '<p style="color: rgb(0, 214, 114)">Active</p>' :
                                        '<p style="color: red">Inactive</p>') +
                                    '</td>' +
                                    '<td style="display: flex; align-items:center; border:0">' +
                                    '<a href="{{ route('view_academic_holiday') }}?id=' +
                                    holiday.id +
                                    '"><i class="fa-solid fa-eye"></i></a>&nbsp&nbsp&nbsp' +
                                    '<a href="{{ route('edit_academic_holiday') }}?id=' +
                                    holiday.id +
                                    '"><i class="fa-solid fa-pencil"></i></a>&nbsp&nbsp&nbsp' +
                                    '<a onclick="showDeleteModal(\'Holiday\',' + holiday
                                    .id +
                                    ')" style="background-color: transparent; color:#6b15b6"><i class="fa-solid fa-trash"></i></a>' +
                                    '</td>' +
                                    '</tr>';

                                $('#tableContents').append(row);

                                serial++;
                            });
                        } 

                        console.log(response);

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