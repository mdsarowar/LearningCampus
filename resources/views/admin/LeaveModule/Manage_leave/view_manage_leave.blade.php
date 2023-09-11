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
                                Leave View
                            </h2>
                        </header>

                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Leave Module</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('manage.leave') }}">Manage Leaves</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Leave View</a></li>
                        </ul>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">
                                <div class="session_view_link mt-2 mb-5">
                                    <a href="{{ route('leave.entry') }}" class="btn btn-primary"><i
                                            class="fa-solid fa-plus"></i></a>

                                </div>
                                <!---- Session View table  ----->
                                <table class="table table-bordered table-striped mt-3 branch_view_table">
                                    <tbody>
                                        <tr>
                                            <th>Employee Type</th>
                                            <td>{{ $manage->rel_to_employeetype->type }}</td>
                                        </tr>
                                        <tr>
                                            <th>Employee</th>
                                            <td>{{ $manage->rel_to_employeetype->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Leave Type</th>
                                            <td>{{ $manage->rel_to_leave_type->title }}</td>
                                        </tr>
                                        <tr>
                                            <th>From Date</th>
                                            <td>{{ $manage->from_date }}</td>
                                        </tr>
                                        <tr>
                                            <th>End Date</th>
                                            <td>{{ $manage->end_date }}</td>
                                        </tr>
                                        <tr>
                                            <th>Total Days</th>
                                            <td>{{ $manage->total_days }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>
                                                @if($manage->status==1) 
                                                    <button class="btn btn-success">Active</button>
                                                @else
                                                    <button class="btn btn-danger">Inactive</button>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Created By</th>
                                            <td>Learning Campus</td>
                                        </tr>
                            
                                    </tbody>
                                </table>

                                <!---- /session View table ----->
                            </form>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </main>

    @include('layouts.inc.footer')
</body>

</html>
