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
                                Manage Exam Grade
                            </h2>
                        </header>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">
                                <a href="{{ route('add.exam.grade') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                            <p class="text-right">Showing 1-1 of 1 item</p>
                                <!---- session table  ----->
                                    <table class="table table-bordered mt-3 text-center branch_table">
                                        <thead class="table-bordered">
                                            <tr>
                                                <th scope="col">Srl</th>
                                                <th scope="col">Classes</th>
                                                <th scope="col">Start Marks</th>
                                                <th scope="col">End Marks</th>
                                                <th scope="col">Grade Letter</th>
                                                <th scope="col">Grade Point</th>
                                                <th scope="col">Remarks</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row"></th>
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
                                                    <input type="text" name="" id="">
                                                </td>

                                                <td>
                                                    <input type="text" name="" id="">
                                                </td>

                                                <td>
                                                    <input type="text" name="" id="">
                                                </td>

                                                <td>
                                                    <input type="text" name="" id="">
                                                </td>
                                                <td>
                                                    <input type="text" name="" id="">
                                                </td>
                                            
                                                <td></td>
                                            </tr>


                                            @foreach($grade as $sl=>$exam_grade)
                                            <tr>
                                                <td>{{ $sl+1 }}</td>
                                                <td>{{ $exam_grade->class_name }}</td>
                                                <td>{{ $exam_grade->start_mark }}</td>
                                                <td>{{ $exam_grade->end_mark }}</td>
                                                <td>{{ $exam_grade->grade_letter }}</td>
                                                <td>{{ $exam_grade->grade_point }}</td>
                                                <td>{{ $exam_grade->remark }}</td>
                                                <td>
                                                    <a href="{{ route('view.exam.grade', $exam_grade->id) }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        
                                                    <a href="{{ route('delete.exam.grade', $exam_grade->id) }}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
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