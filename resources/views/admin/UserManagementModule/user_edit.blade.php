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
                            <h2 class="text-white mb-0">Update User</h2>
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

                        <div class="session_view_link ml-3 mt-4 mb-5">
                            <a href="{{ route('add.users') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-plus"></i></a>
                            <a href="{{ route('view.users') }}?user_id={{ $userData[0]['id'] }}"
                                class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('edit.users.submit') }}" method="POST" class="es-form es-add-form">
                                @csrf
                                <input type="hidden" name="current_user_id" value="{{ $userData[0]['id'] }}">
                                <input type="hidden" name="current_branch_id" value="{{ $userData[0]['branch_id'] }}">
                                <input type="hidden" name="current_branch_name"
                                    value="{{ $userData[0]['branch_name'] }}">
                                <input type="hidden" name="current_email" value="{{ $userData[0]['email'] }}">
                                <input type="hidden" name="current_name" value="{{ $userData[0]['name'] }}">
                                <input type="hidden" name="current_phoneNumber"
                                    value="{{ $userData[0]['phoneNumber'] }}">
                                <input type="hidden" name="current_role" value="{{ $userData[0]['role'] }}">
                                <input type="hidden" name="current_password" value="{{ $userData[0]['password'] }}">

                                <div class="row">

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="">Branch <span>*</span></label>
                                        <select id="" name="branch_id" class="es-add-select">
                                            <option value="">Select Branch</option>
                                            @foreach ($branchDetails as $branch)
                                                <option value="{{ $branch['id'] }}"
                                                    {{ $userData[0]['branch_id'] == $branch['id'] ? 'selected' : '' }}>
                                                    {{ $branch['branch_name'] }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="">User Type <span>*</span></label>
                                        <select id="" name="user_type" class="es-add-select">
                                            <option value="">Select User Type</option>
                                            @foreach ($rolesList as $role)
                                                @if ($role['name'] !== 'super_admin')
                                                    <option value="{{ $role['name'] }}"
                                                        {{ $userData[0]['role'] == $role['name'] ? 'selected' : '' }}>
                                                        {{ $role['name'] }}
                                                    </option>
                                                @endif
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="">Name <span>*</span> </label>
                                        <input type="text" name="name" id=""
                                            value="{{ $userData[0]['name'] }}">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="">Email</label>
                                        <input type="email" name="email" id=""
                                            value="{{ $userData[0]['email'] }}">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="">Phone Number</label>
                                        <input type="number" name="phoneNumber" id=""
                                            value="{{ $userData[0]['phoneNumber'] }}">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="">Password <span>*</span></label>
                                        <input type="password" name="password" id="">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="">Repeat Password <span>*</span></label>
                                        <input type="password" name="confirm_password" id="">
                                    </div>
                                </div>

                                <p>
                                    <button type="submit" class="btn bg-gradient border-0 text-white">Update</button>
                                    <a class="btn cancel_btn border-0 text-white p-2">Cancel</a>
                                </p>

                            </form>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </main>

    <!-- Global Vendor -->

    @include('layouts.inc.footer')
</body>

</html>
