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
                                Class Work List
                            </h2>
                        </header>

                        <div class="card-body table-responsive" id="institue">

                            <a href="{{ route('add.class.work') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-plus"></i></a>

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
                                            <th scope="col">Class Work</th>
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
                                                    <option value="">Play</option>
                                                    <option value="">Nursary</option>
                                                    <option value="">KG</option>
                                                    <option value="">One</option>
                                                    <option value="">Two</option>
                                                    <option value="">Three</option>
                                                    <option value="">Four</option>
                                                    <option value="">Five</option>
                                                    <option value="">Six</option>
                                                    <option value="">Seven</option>
                                                    <option value="">Eight</option>
                                                    <option value="">Nine</option>
                                                    <option value="">Ten</option>
                                                    <option value="">Eleven</option>
                                                    <option value="">Tweleve</option>
                                                    <option value="" class="bold_text">English Medium</option>
                                                    <option value="">Play</option>
                                                    <option value="">Nursary</option>
                                                    <option value="">KG</option>
                                                    <option value="">One</option>
                                                    <option value="">Two</option>
                                                    <option value="">Three</option>
                                                    <option value="">Four</option>
                                                    <option value="">Five</option>
                                                    <option value="">Six</option>
                                                    <option value="">Seven</option>
                                                    <option value="">Eight</option>
                                                    <option value="">Nine</option>
                                                    <option value="">Ten</option>
                                                    <option value="">Eleven</option>
                                                    <option value="">Tweleve</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                                    <option value="">Morning</option>
                                                    <option value="">Day</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                                    <option value="">A</option>
                                                    <option value="">B</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                                    <option value="">Bangla</option>
                                                    <option value="">English</option>
                                                    <option value="">Mathmatics</option>
                                                    <option value="">Scinece</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                                    <option value="">12458 - Afzal</option>
                                                    <option value="">12458 - Afzal</option>
                                                    <option value="">12458 - Afzal</option>
                                                    <option value="">12458 - Afzal</option>
                                                    <option value="">12458 - Afzal</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">All &nbsp;&nbsp;&nbsp;</option>
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
                                        @foreach ($cwork as $sl => $class_work)
                                            <tr>
                                                <td>{{ $sl + 1 }}</td>
                                                <td>{{ $class_work->class }}</td>
                                                <td>{{ $class_work->shift }}</td>
                                                <td>{{ $class_work->section }}</td>
                                                <td>{{ $class_work->subject }}</td>
                                                <td>{{ $class_work->teacher }}</td>
                                                <td>{{ $class_work->class_work_title }}</td>
                                                <td>{{ $class_work->assign_date }}</td>
                                                <td>{{ $class_work->due_date }}</td>
                                                <td>{{ $class_work->status }}</td>
                                                <td><a href="{{ route('class.work.delete', $class_work->id) }}"><i
                                                            class="fa fa-solid fa-trash"></i></a></td>
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
