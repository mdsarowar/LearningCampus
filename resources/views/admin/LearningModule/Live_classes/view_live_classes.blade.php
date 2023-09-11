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
                                Live Class Details
                            </h2>
                        </header>

                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Learning Module</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('manage.live.classes') }}">LIve Classes</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Live Class Details</a></li>
                        </ul>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">
                                <div class="session_view_link mt-2 mb-5">
                                    <a href="{{ route('add.live.classes') }}" class="btn btn-primary"><i
                                            class="fa-solid fa-plus"></i></a>
                                    <!-- <a href="live_class_report.html" class="btn btn-primary"><i
                                            class="fa-solid fa-file-invoice"></i></a> -->
                                </div>
                                <!---- Session View table  ----->
                                <table class="table table-bordered table-striped mt-3 branch_view_table">
                                    <tbody>
                                        <tr>
                                            <th>Session</th>
                                            <td>2023</td>
                                        </tr>
                                        <tr>
                                            <th>Class</th>
                                            <td>{{ $lclass->class_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Shift</th>
                                            <td>{{ $lclass->shift }}</td>
                                        </tr>
                                        <tr>
                                            <th>Section</th>
                                            <td>{{ $lclass->section }}</td>
                                        </tr>
                                        <tr>
                                            <th>Subject</th>
                                            <td>{{ $lclass->subject_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Teacher</th>
                                            <td>{{ $lclass->teacher }}</td>
                                        </tr>
                                        <tr>
                                            <th>Class ID</th>
                                            <td>72547022683</td>
                                        </tr>
                                        <tr>
                                            <th>Class Topic</th>
                                            <td>{{ $lclass->class_topic }}</td>
                                        </tr>
                                        <tr>
                                            <th>Password</th>
                                            <td>{{ $lclass->password }}</td>
                                        </tr>
                                        <tr>
                                            <th>Class Date</th>
                                            <td>{{ $lclass->class_date }}</td>
                                        </tr>
                                        <tr>
                                            <th>Class Time</th>
                                            <td>{{ $lclass->class_time }}</td>
                                        </tr>
                                        <tr>
                                            <th>Class Duration (Minutes)</th>
                                            <td>{{ $lclass->duration }}</td>
                                        </tr>
                                        <tr>
                                            <th>Host Email</th>
                                            <td>learningcampus@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>
                                                @if($lclass->status==1) 
                                                    <button class="btn btn-success">Done</button>
                                                @else
                                                    <button class="btn btn-danger">Pending</button>
                                                @endif
                                            </td>
                                        </tr>
                                        <!-- <tr>
                                            <th>Created At</th>
                                            <td>2021-12-19 07:39:06</td>
                                        </tr> -->
                                        <tr>
                                            <th>Created By</th>
                                            <td>Learning Campus</td>
                                        </tr>
                                        <!-- <tr>
                                            <th>Modified At</th>
                                            <td>2022-02-03 04:58:07</td>
                                        </tr>
                                        <tr>
                                            <th>Modified By</th>
                                            <td>Learning Campus</td>
                                        </tr> -->

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

    <!-- Global Vendor -->

    @include('layouts.inc.footer')
</body>

</html>
