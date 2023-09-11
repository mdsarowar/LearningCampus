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
                                Manage Live Class
                            </h2>
                        </header>

                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Learning Module</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Live Classes</a></li>
                        </ul>

                        <div class="card-body table-responsive" id="institue">
                            <a href="{{ route('add.live.classes') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                            @if(session('delete'))
                                <span style="color:red; font-size:30px; padding-left: 100px;">{{ session('delete') }}</span>
                            @endif
                            <form action="" class="es-form es-add-form">

                                <p class="text-right">Showing 1-1 of 1 item</p>
                                <!---- Branch table  ----->
                                <table class="table table-bordered mt-3 text-center branch_table">
                                    <thead class="table-bordered">
                                        <tr>
                                            <th scope="col">Srl</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Shift</th>
                                            <th scope="col">Section</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Teacher</th>
                                            <th scope="col">Class Topic</th>
                                            <th scope="col">Class ID</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Class Date</th>
                                            <th scope="col">Class Time</th>
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
                                                    <option value="">All &nbsp;&nbsp;</option>
                                                    <option value="Morning">Morning</option>
                                                    <option value="Day">Day</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">All &nbsp;&nbsp;&nbsp;</option>
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
                                                    <option value="">All</option>
                                                    <option value="01254 - Afzal">01254 - Afzal</option>
                                                    <option value="01255 - Rahman">01255 - Rahman</option>
                                                    <option value="01244 - Kamran">01244 - Kamran</option>
                                                </select>
                                            </td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td><input type="text" name="" id=""></td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                                    <option value="">Pending</option>
                                                    <option value="">Done</option>
                                                </select>
                                            </td>
                                            <td>
                                                <p class="text-white">This is action Buttonaaaaaaaaaaaa</p>
                                            </td>
                                        </tr>

                                        @foreach ($live as $sl => $live_class)
                                            <tr>
                                                <th scope="row">{{ $sl + 1 }}</th>
                                                <td>{{ $live_class->class_name }}</td>
                                                <td>{{ $live_class->shift }}</td>
                                                <td>{{ $live_class->section }}</td>
                                                <td>{{ $live_class->subject_name }}</td>
                                                <td>{{ $live_class->teacher }}</td>
                                                <td>{{ $live_class->class_topic }}</td>
                                                <td>{{ $live_class->class_id }}</td>
                                                <td>{{ $live_class->password }}</td>
                                                <td>{{ $live_class->class_date }}</td>
                                                <td>{{ $live_class->class_time }}</td>
                                                <td>
                                                    @if($live_class->status==1) 
                                                        <button class="btn btn-success">Done</button>
                                                    @else
                                                        <button class="btn btn-danger">Pending</button>
                                                    @endif
                                                </td>
                                                <td width="60%">
                                                    <a href="{{ route('view.live.classes', $live_class->id) }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp &nbsp
                                                    <a href="{{ route('edit.live.classes', $live_class->id) }}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                                    <a href="live_class_report.html"><i class="fa-solid fa-file-invoice"></i></a>&nbsp &nbsp &nbsp
                                                    <a href="{{ route('live.class.delete', $live_class->id) }}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp &nbsp
                                                    <br>
                                                    <br>
                                                    <a href="https://zoom.us/join" target="_blank" class="text-white" style="background-color: #430D71; padding: 15px; border-radius: 10px;">Join Class Now</a>&nbsp &nbsp &nbsp
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>

                                <!---- /Branch table ----->


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
