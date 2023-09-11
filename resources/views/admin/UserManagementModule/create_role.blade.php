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
                            <h2 class="text-white mb-0">Create New Role</h2>
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


                        <div class="card-body">
                            <form action="{{ route('create.role.submit') }}" method="POST" class="es-form es-add-form">
                                @csrf
                                <div class="row" style="margin-top: 30px">

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="role_name">Role Name <span>*</span> </label>
                                        <input type="text" name="role_name" id="role_name">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label>Permissions <span>*</span> </label>
                                        <br>
                                        <div class="row">
                                            <div class="col-11 m-auto">
                                                <div>
                                                    <input type="checkbox" id="all_role"
                                                        style="width: 20px; height: 20px; margin: 0; vertical-align: middle;">
                                                    <label for="all_role" style="display: inline-block">All</label>
                                                </div>
                                                <br>
                                                <hr>

                                                @foreach ($permission_group as $group)
                                                    <div>
                                                        <div>
                                                            @php
                                                                $formattedGroupName = ucwords(str_replace('_', ' ', $group->group_name));
                                                            @endphp
                                                            <input type="checkbox"
                                                                id="all_group_{{ $group->group_name }}"
                                                                class="group-checkbox"
                                                                style="width: 20px; height: 20px; margin: 0; vertical-align: middle;">
                                                            <label for="all_group_{{ $group->group_name }}"
                                                                style="display: inline-block">{{ $formattedGroupName }}</label>
                                                        </div>
                                                        <div>
                                                            <div class="col-10 m-auto">
                                                                @foreach ($permissions as $permission)
                                                                    @if ($permission->group_name === $group->group_name)
                                                                        @php
                                                                            $formattedPermissionName = ucwords(str_replace('_', ' ', $permission->name));
                                                                        @endphp
                                                                        <input type="checkbox"
                                                                            id="permission_{{ $permission->id }}"
                                                                            name="permissions[]"
                                                                            value="{{ $permission->id }}"
                                                                            data-group="{{ $group->group_name }}"
                                                                            style="width: 20px; height: 20px; margin: 0; vertical-align: middle;">
                                                                        <label for="permission_{{ $permission->id }}"
                                                                            style="display: inline-block">{{ $formattedPermissionName }}</label>
                                                                        <br>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <p>
                                    <button type="submit" class="btn bg-gradient border-0 text-white">Add</button>
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

    <script>
        $(document).ready(function() {
            $('#all_role').click(function() {
                if ($(this).prop('checked')) {
                    $('input[type="checkbox"]').prop('checked', true);
                } else {
                    $('input[type="checkbox"]').prop('checked', false);
                }
            });

            // Attach an event listener to the group name checkboxes
            $('[id^="all_group_"]').change(function() {
                var groupName = $(this).attr('id').replace('all_group_', '');
                $('[data-group="' + groupName + '"]').prop('checked', $(this).prop('checked'));
            });
        });
    </script>


</body>

</html>
