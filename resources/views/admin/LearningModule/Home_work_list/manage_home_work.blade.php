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
                                Manage Home Work
                            </h2>
                        </header>

                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Learning Module</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home Work</a></li>
                        </ul>

                        <div class="card-body table-responsive" id="institue">
                            <a href="{{ route('add.home.work') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                            @if(session('delete'))
                                <span style="color:red; font-size:30px; padding-left: 100px;">{{ session('delete') }}</span>
                            @endif
                            <form action="" class="es-form es-add-form">

                                <p class="text-right">Showing 1-1 of 1 item</p>
                                <!---- Home Work table  ----->
                                <table class="table table-bordered mt-3 text-center branch_table">
                                    <thead class="table-bordered">
                                        <tr>
                                            <th scope="col">Srl</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Shift</th>
                                            <th scope="col">Section</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Teacher</th>
                                            <th scope="col">Home Work</th>
                                            <th scope="col">Submit By</th>
                                            <th scope="col">Submit Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                                    <option value="" class="bold_text">Bangla Medium</option>
                                                    <option value="Play">Play</option>
                                                    <option value="Nursary">Nursary</option>
                                                    <option value="KG">KG</option>
                                                    <option value="One">One</option>
                                                    <option value="Two">Two</option>
                                                    <option value="Three">Three</option>
                                                    <option value="Four">Four</option>
                                                    <option value="Five">Five</option>
                                                    <option value="Six">Six</option>
                                                    <option value="Seven">Seven</option>
                                                    <option value="Eight">Eight</option>
                                                    <option value="Nine">Nine</option>
                                                    <option value="Ten">Ten</option>
                                                    <option value="Eleven">Eleven</option>
                                                    <option value="Tweleve">Tweleve</option>
                                                    <option value="" class="bold_text">English Medium</option>
                                                    <option value="Play">Play</option>
                                                    <option value="Nursary">Nursary</option>
                                                    <option value="KG">KG</option>
                                                    <option value="One">One</option>
                                                    <option value="Two">Two</option>
                                                    <option value="Three">Three</option>
                                                    <option value="Four">Four</option>
                                                    <option value="Five">Five</option>
                                                    <option value="Six">Six</option>
                                                    <option value="Seven">Seven</option>
                                                    <option value="Eight">Eight</option>
                                                    <option value="Nine">Nine</option>
                                                    <option value="Ten">Ten</option>
                                                    <option value="Eleven">Eleven</option>
                                                    <option value="Tweleve">Tweleve</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">All &nbsp; &nbsp; &nbsp;</option>
                                                    <option value="Morning">Morning</option>
                                                    <option value="Day">Day</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">All &nbsp; &nbsp; &nbsp;</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">All &nbsp; &nbsp; &nbsp;</option>
                                                    <option value="">Select Subject</option>
                                                    <option value="Bangla">Bangla</option>
                                                    <option value="English">English</option>
                                                    <option value="Mathmatics">Mathmatics</option>
                                                    <option value="Social Science">Social Science</option>
                                                    <option value="Science">Science</option>
                                                    <option value="Agriculture">Agriculture</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">All &nbsp; &nbsp; &nbsp;</option>
                                                    <option value="01254 - Afzal">01254 - Afzal</option>
                                                    <option value="01255 - Rahman">01255 - Rahman</option>
                                                    <option value="01244 - Kamran">01244 - Kamran</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">All</option>
                                                </select>
                                            </td>
                                            <td><input type="date" name="" id=""></td>
                                            <td><input type="date" name="" id=""></td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">Active</option>
                                                    <option value="">Inactive</option>
                                                </select>
                                            </td>
                                            <td><a href="#"><i class="fa fa-solid fa-trash"></i></a></td>
                                        </tr>
                                        @foreach ($hwork as $sl => $home_work)
                                            <tr>
                                                <td>{{ $sl + 1 }}</td>
                                                <td>{{ $home_work->class_name }}</td>
                                                <td>{{ $home_work->shift }}</td>
                                                <td>{{ $home_work->section }}</td>
                                                <td>{{ $home_work->subject_name }}</td>
                                                <td>{{ $home_work->teacher }}</td>
                                                <td>{{ $home_work->home_work_title }}</td>
                                                <td>{{ $home_work->assign_date }}</td>
                                                <td>{{ $home_work->due_date }}</td>
                                                <td>
                                                    @if($home_work->status==1) 
                                                        <button class="btn btn-success">Active</button>
                                                    @else
                                                        <button class="btn btn-danger">Inactive</button>
                                                    @endif
                                                </td>
                                                <td><a href="{{ route('home.work.delete', $home_work->id) }}"><i class="fa fa-solid fa-trash"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!---- /Home Work table ----->

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
