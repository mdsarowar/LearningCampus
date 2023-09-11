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
                                User View
                            </h2>
                        </header>

                        <div class="session_view_link ml-3 mt-4 mb-5">
                            <a href="{{ route('add.users') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-plus"></i></a>
                            <a href="{{ route('edit.users') }}?user_id={{ $userData[0]['id'] }}"
                                class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                        </div>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">

                                <!---- Branch View table  ----->
                                <table class="table table-bordered table-striped mt-3 branch_view_table">
                                    <tbody>
                                        <tr>
                                            <th>User Type</th>
                                            <td>
                                                {{ ucfirst($userData[0]['role']) }}
                                            </td>

                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <td>{{ $userData[0]['name'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $userData[0]['email'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Last Login</th>
                                            <td></td>
                                        </tr>
                                        {{-- <tr>
                                            <th>Photo</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>Active</td>
                                        </tr> --}}

                                    </tbody>
                                </table>

                                <!---- /Branch View table ----->


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
