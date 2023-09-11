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
                                Syllabus View
                            </h2>
                        </header>

                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Learning Module</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('manage.academic.syllabus') }}">Academic Syllabus</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Syllabus View</a></li>
                        </ul>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">
                                <div class="session_view_link mt-2 mb-5">
                                    <a href="{{ route('add.academic.syllabus') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>

                                </div>
                                <!---- Session View table  ----->
                                <table class="table table-bordered table-striped mt-3 branch_view_table">
                                    <tbody>
                                        <tr>
                                            <th>Class Name</th>
                                            <td>{{ $syllabus->class }}</td>
                                        </tr>
                                        <tr>
                                            <th>Title </th>
                                            <td>{{ $syllabus->title }}</td>
                                        </tr>
                                        <tr>
                                            <th>File</th>
                                            <td>{{ $syllabus->file }}
                                            <br>
                                            <a href="{{ route('download.academic.syllabus', $syllabus->file) }}" class="btn bg-gradient border-0 text-white">download</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>@if($syllabus->status==1) 
                                                    <button class="btn btn-success">Active</button>
                                                @else
                                                    <button class="btn btn-danger">Inactive</button>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Created At</th>
                                            <td>2021-12-19 07:39:06</td>
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

    <!-- Global Vendor -->

    @include('layouts.inc.footer')
</body>

</html>
