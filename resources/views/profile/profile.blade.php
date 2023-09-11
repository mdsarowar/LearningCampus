<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Profile</title>
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
                            @php
                                $roleText = Auth::user()->role == 'user' ? 'Student' : Str::ucfirst(Auth::user()->role);
                            @endphp
                            <h2 class="text-white mb-0">Profile Information - {{ $roleText }}</h2>
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

                        {{-- <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                            @csrf
                        </form> --}}

                        <div class="text-center mt-3">
                            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                        </div>

                        {{-- Profile Update --}}
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            @method('patch')

                            <div class="branch_edit class_edit">
                                <div class="row">
                                    <div class="col-md-10 mb-3">
                                        <label for="">Name</label>
                                        <x-text-input id="name" name="name" type="text"
                                            class="mt-1 block w-full" :value="old('name', $user->name)" required readonly />
                                    </div>

                                    @auth
                                        @if (Auth::user()->role != 'user')
                                            <div class="col-md-10 mb-3">
                                                <label for="">Email</label>
                                                <x-text-input id="email" name="email" type="email"
                                                    class="mt-1 block w-full" :value="old('email', Auth::user()->email)" required
                                                    autocomplete="username" />
                                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                            </div>
                                        @else
                                            <div class="col-md-10 mb-3">
                                                <label for="">Student ID</label>
                                                <input type="number" class="mt-1 block w-full"
                                                    value="{{ Auth::user()->student_id }}" readonly />
                                            </div>
                                        @endif
                                    @endauth

                                    @auth
                                        @if (Auth::user()->role != 'user')
                                            <div class="col-md-10 mt-4 mb-3 m-auto">
                                                <p>
                                                    <button type="submit"
                                                        class="btn bg-gradient border-0 text-white">Update</button>
                                                </p>
                                            </div>
                                        @endif
                                    @endauth

                                </div>
                            </div>
                        </form>

                        {{-- Password Update --}}
                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="branch_edit class_edit">
                                <div class="row">

                                    <div class="col-md-10 mb-3">
                                        <label for="">Current Password</label>
                                        <x-text-input id="current_password" name="current_password" type="password"
                                            class="mt-1 block w-full" autocomplete="current-password" />

                                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                    </div>
                                    
                                    <div class="col-md-10 mb-3">
                                        <label for="">New Password</label>
                                        <x-text-input id="password" name="password" type="password"
                                            class="mt-1 block w-full" autocomplete="new-password" />

                                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Confirm Password</label>
                                        <x-text-input id="password_confirmation" name="password_confirmation"
                                            type="password" class="mt-1 block w-full" autocomplete="new-password" />

                                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                    </div>

                                    <div class="col-md-10 mt-4 mb-3 m-auto">
                                        <p>
                                            <button type="submit"
                                                class="btn bg-gradient border-0 text-white">Update</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>

                        {{-- Delete Account --}}
                        @auth
                            @if (Auth::user()->role != 'user')
                                <div>
                                    <button onclick="showDeleteModal()"
                                        style="margin-left: 90px;margin: 20px auto;margin-left: 80%;padding: 8px 25px;border-radius: 6px;background: #ef0f0f;color: white;font-weight: bold;">Delete
                                        Account</button>
                                </div>
                            @endif
                        @endauth


                    </div>
                </section>

            </div>
        </div>
    </main>

    <!-- Global Vendor -->

    @include('layouts.inc.footer')

    @auth
        @if (Auth::user()->role != 'student')
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
                            Are you sure you want to delete this account? This action
                            cannot be undone.
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('profile.destroy') }}" method="POST" style="width: 100%">
                                @csrf
                                @method('delete')

                                <div>
                                    <div class="mt-2" style="width: 100%">
                                        <label for="password">Enter Current Password:</label><br>
                                        <x-text-input id="password" name="password" type="password"
                                            class="mt-1 block w-3/4" placeholder="Password"
                                            style="width:100%; background: #ebebeb;border: 0.5px solid #e1e1e1;border-radius: 4px; outline: 0; padding: 7px 10px;" />
                                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                                    </div>
                                    <div class="mt-2" style="text-align: right">
                                        <a class="btn btn-secondary" data-bs-dismiss="modal"
                                            style="color: white; font-weight:bold">Cancel</a>
                                        <button type="submit" class="btn"
                                            style="background: #ef0f0f;color: white;font-weight: bold;">Delete</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function showDeleteModal() {
                    var modal = new bootstrap.Modal(document.getElementById("confirmModalBox"));
                    modal.show();
                }
            </script>
            {{-- confirm popup start --}}
        @endif
    @endauth

</body>

</html>
