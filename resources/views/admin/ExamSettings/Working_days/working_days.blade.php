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
                                Manage Working Days
                            </h2>
                        </header>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">
                                <a href="{{ route('add.working.days') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                            <p class="text-right">Showing 1-1 of 1 item</p>
                                <!---- session table  ----->
                                    <table class="table table-bordered mt-3 text-center branch_table">
                                        <thead class="table-bordered">
                                            <tr>
                                                <th scope="col">Srl</th>
                                                <th scope="col">Session</th>
                                                <th scope="col">Exam Term</th>
                                                <th scope="col">Classes</th>
                                                <th scope="col">Class Start Date</th>
                                                <th scope="col">Class End Date</th>
                                                <th scope="col">Total Working Days</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row"></th>
                                                <td>
                                                    <select name="" id="">
                                                        <option value="">2022</option>
                                                        <option value="">2021</option>
                                                        <option value="">2020</option>
                                                        <option value="">2019</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="" id="">
                                                        <option value="">All</option>
                                                        <option value="">Half Yearly Exam</option>
                                                        <option value="">Annual Exam</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="" id="">
                                                        <option value="">All</option>
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
                                                <input type="date" name="" id="">
                                                </td>
                                                <td>
                                                    <input type="date" name="" id="">
                                                </td>
                                                <td>
                                                    <input type="text" name="" id="">
                                                </td>
                                                <td></td>
                                            </tr>

                                            @foreach($working_day as $sl=>$work)
                                            <tr>
                                                <td>{{ $sl+1 }}</td>
                                                <td>{{ $work->rel_to_exam_term->session }}</td>
                                                <td>{{ $work->rel_to_exam_term->term_name }}</td>
                                                <td>{{ $work->class_name }}</td>
                                                <td>{{ $work->start_date }}</td>
                                                <td>{{ $work->end_date }}</td>
                                                <td>{{ $work->duration }}</td>
                                                <td>
                                                    <a href="{{ route('view.working.days', $work->id) }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                                    <!-- <a href="working_days_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp -->
                                                    <a href="{{ route('delete.working.days', $work->id) }}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                                </td>
                                            </tr>
                                            @endforeach

                                            
                                        </tbody>
                                    </table>
                            
                                <!---- /session table ----->
                        
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