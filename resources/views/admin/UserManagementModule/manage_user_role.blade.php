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
                            <h2 class="text-white mb-0">Manage User Role</h2>
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

                        <div class="session_view_link ml-3 mt-4">
                            <a href="{{ route('create.role') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-plus"></i></a>
                        </div>

                        {{-- <form action="" method="POST">
                            @csrf
                            <div class="branch_edit">
                                <div class="row">

                                    <div class="col-md-10 mb-3 row" style="margin-left: 5%">
                                        <div class="col-md-6">
                                            <label for="">Role <span>*</span></label>
                                            <select name="user_type" id="userType" required>
                                                <option value="">Select User Type</option>
                                                @foreach ($rolesList as $role)
                                                    @if ($role['name'] !== 'super_admin')
                                                        <option value="{{ $role['name'] }}">{{ $role['name'] }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">User <span>*</span></label>
                                            <select name="user_id" id="userDropdown" required>
                                                <option value="">Select User</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Name <span>*</span></label>
                                        <input type="text" name="user_name" id="" required>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Medium Code <span>*</span></label>
                                        <input type="text" placeholder="eg: BN or EN" name="medium_code"
                                            id="" required>
                                    </div>

                                    <div class="col-md-10 mt-4 mb-3">
                                        <p>
                                            <button type="submit"
                                                class="btn bg-gradient border-0 text-white">Update</button>
                                            <a class="btn  cancel_btn border-0 text-white">Cancel</a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </form> --}}
                        <div class="card-body" id="institue">
                            <div class="es-form es-add-form">

                                <!----  table  ----->
                                @if (!empty($rolesList))
                                    <div class="table-responsive">
                                        <table class="table table-bordered mt-3 text-center branch_table">
                                            <thead class="table-bordered">
                                                <tr>
                                                    <th scope="col" style="width: 80px">Sl</th>
                                                    <th scope="col" style="width: 120px">Role ID</th>
                                                    <th scope="col">Role Name</th>
                                                    <th scope="col" style="width: 120px">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @php
                                                    $serial = 1;
                                                @endphp

                                                @foreach ($rolesList as $role)
                                                    @if ($role['name'] !== 'super_admin')
                                                        <tr>
                                                            <td>{{ $serial }}</td>
                                                            <td>{{ $role['id'] }}</td>
                                                            <td>{{ $role['name'] }}</td>
                                                            <td>
                                                                <a
                                                                    href="{{ route('update.role') }}?id={{ $role['id'] }}"><i
                                                                        class="fa-solid fa-pencil"></i></a>&nbsp
                                                                &nbsp&nbsp
                                                                <a onclick="showDeleteModal('{{ $role['name'] }}', {{ $role['id'] }})"
                                                                    style="background-color: transparent; color:#6b15b6"><i
                                                                        class="fa-solid fa-trash"></i></a>&nbsp
                                                                &nbsp&nbsp
                                                            </td>
                                                        </tr>
                                                        @php
                                                            $serial++;
                                                        @endphp
                                                    @endif
                                                @endforeach

                                                @if ($serial === 0)
                                                    <tr>
                                                        <td colspan="4">No Role Found</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <p>No Role Found</p>
                                @endif
                                <!---- / table ----->

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
                    Are you sure you want to delete "<span id="label"></span>" role? This action
                    cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ route('delete.role') }}" method="POST">
                        @csrf
                        <input type="hidden" name="role_id" value="">
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
            var formInput = document.querySelector("#confirmModalBox [name='role_id']");

            labelElement.textContent = label;
            formInput.value = id;
            modal.show();
        }
    </script>
    {{-- confirm popup start --}}

</body>

</html>
