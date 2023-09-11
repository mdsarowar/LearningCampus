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
                                Manage User
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
                                <a href="{{ route('add.users') }}" class="btn btn-primary"><i
                                        class="fa-solid fa-plus"></i></a>

                                <p class="text-right">Showing 1-1 of 1 item</p>


                                <!---- slide show table  ----->
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-3 text-center branch_table">
                                        <thead class="table-bordered">
                                            <tr>
                                                <th scope="col">Sl</th>
                                                <th scope="col">Branch</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">User Type</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Last Login</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>

                                        {{-- <form action="">
                                            <tr>
                                                <th scope="row"></th>
                                                <td>
                                                    <select name="branch_id" id="">
                                                        <option value="">Select Branch</option>
                                                        @foreach ($branchList as $branch)
                                                            <option value="{{ $branch['id'] }}">
                                                                {{ $branch['branch_name'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td></td>
                                                <td>
                                                    <select name="user_type" id="">
                                                        <option value="">Select Role</option>
                                                        @foreach ($rolesList as $role)
                                                            @if ($role['name'] !== 'super_admin')
                                                                <option value="{{ $role['id'] }}">{{ $role['name'] }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td> <input type="text" name="email" id=""
                                                        style="width: 100%"> </td>
                                                <td></td>
                                                <td style="color:#6b15b6" id="SearchBtn"><i
                                                        class="fa-solid fa-search"></i></td>
                                            </tr>
                                        </form> --}}

                                        <tbody>

                                            @php
                                                $serial = 1;
                                            @endphp
                                            @foreach ($usersList as $user)
                                                @if ($user['role'] != 'super_admin')
                                                    <tr>
                                                        <th scope="row">{{ $serial }}</th>
                                                        <td>{{ $user['branch_name'] }}</td>
                                                        <td>{{ $user['name'] }}</td>
                                                        <td>{{ $user['role'] }}</td>
                                                        <td>{{ $user['email'] }}</td>
                                                        <td></td>
                                                        <td
                                                            style="display: flex; align-items:center; justify-content:center; border:0">
                                                            <a
                                                                href="{{ route('view.users') }}?user_id={{ $user['id'] }}"><i
                                                                    class="fa-solid fa-eye"></i></a>&nbsp&nbsp
                                                            &nbsp
                                                            <a
                                                                href="{{ route('edit.users') }}?user_id={{ $user['id'] }}"><i
                                                                    class="fa-solid fa-pencil"></i></a>&nbsp&nbsp
                                                            &nbsp
                                                            <a onclick="showDeleteModal('{{ $user['name'] }}', {{ $user['id'] }})"
                                                                style="background-color: transparent; color:#6b15b6"><i
                                                                    class="fa-solid fa-trash"></i></a>&nbsp&nbsp
                                                            &nbsp
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $serial++;
                                                    @endphp
                                                @endif
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!---- /slide show table ----->

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
                    Are you sure you want to delete "<span id="label"></span>" ? This action
                    cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ route('delete.users') }}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="">
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
            var formInput = document.querySelector("#confirmModalBox [name='user_id']");

            labelElement.textContent = label;
            formInput.value = id;
            modal.show();
        }
    </script>
    {{-- confirm popup start --}}
</body>

</html>
