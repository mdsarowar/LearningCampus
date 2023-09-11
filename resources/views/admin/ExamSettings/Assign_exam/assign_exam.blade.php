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
                                Manage Assigned Exam
                            </h2>
                        </header>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">
                                <a href="{{ route('add.assign.exam') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                            <p class="text-right">Showing 1-1 of 1 item</p>
                                <!---- session table  ----->
                                    <table class="table table-bordered mt-3 text-center branch_table">
                                        <thead class="table-bordered">
                                            <tr>
                                                <th scope="col">Srl</th>
                                                <th scope="col">Session</th>
                                                <th scope="col">Exam Term</th>
                                                <th scope="col">Exam Part</th>
                                                <th scope="col">Class</th>
                                                <th scope="col">Individual Pass ?</th>
                                                <th scope="col">Consider Fail on Absent ?</th>
                                                <th scope="col">Marks for Term (%)</th>
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
                                                        <option value="">Class Test</option>
                                                        <option value="">Toutorial</option>
                                                        <option value="">Ques Test</option>
                                                        <option value="">Final</option>
                                                        <option value="">Written</option>
                                                        <option value="">MCQ</option>
                                                        <option value="">Practical</option>
                                                        <option value="">CQ</option>
                                                        <option value="">Objective</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="" id="">
                                                        <option value="">All</option>
                                                        <option value="" class="bold_text">Bangla Medium</option>
                                                        <option value="">Play</option>
                                                        <option value="">Nursary</option>
                                                        <option value="">One</option>
                                                        <option value="">Two</option>
                                                        <option value="" class="bold_text">English Medium</option>
                                                        <option value="">Play</option>
                                                        <option value="">Nursary</option>
                                                        <option value="">One</option>
                                                        <option value="">Two</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="" id="">
                                                        <option value="">All</option>
                                                        <option value="">Yes</option>
                                                        <option value="">No</option>    
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="" id="">
                                                        <option value="">All</option>
                                                        <option value="">Yes</option>
                                                        <option value="">No</option>    
                                                    </select>
                                                </td>
                                            
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            @foreach($ass_exam as $sl=>$assign)
                                            <tr>
                                                <td>{{ $sl+1 }}</td>
                                                <td>{{ $assign->rel_to_exam_term->session }}</td>
                                                <td>{{ $assign->rel_to_exam_term->term_name }}</td>
                                                <td>{{ $assign->rel_to_exam_part->exam_name }}</td>
                                                <td>{{ $assign->class_name }}</td>
                                                <td>
                                                    @if($assign->indi_pass==1) 
                                                        <button class="btn btn-success">Yes</button>
                                                    @else
                                                        <button class="btn btn-danger">No</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($assign->absent_fail==1) 
                                                        <button class="btn btn-success">Yes</button>
                                                    @else
                                                        <button class="btn btn-danger">No</button>
                                                    @endif
                                                </td>
                                                <td>{{ $assign->rel_to_exam_term->marks_final }}%</td>
                                                <td>
                                                    <a href="{{ route('view.assign.exam', $assign->id) }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                                    
                                                    <a href="{{ route('delete.assign.exam', $assign->id) }}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
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