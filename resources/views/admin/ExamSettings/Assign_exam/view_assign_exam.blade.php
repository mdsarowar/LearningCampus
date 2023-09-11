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
                                Assign Exam View
                            </h2>
                        </header>

                        <div class="session_view_link ml-3 mt-4 mb-5">
                            <a href="{{ route('add.assign.exam') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                            
                        </div>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">

                                <!---- Branch View table  ----->
                                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                                        <tbody >
                                            <tr>
                                                <th>Session</th>
                                                <td>{{ $ass_ex->rel_to_exam_term->session }}</td>
                                            </tr>
                                            <tr>
                                                <th>Exam Term</th>
                                                <td>{{ $ass_ex->rel_to_exam_term->term_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Exam Part</th>
                                                <td>{{ $ass_ex->rel_to_exam_part->exam_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Class</th>
                                                <td>{{ $ass_ex->class_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Individual Pass ?</th>
                                                <td>
                                                    @if($ass_ex->indi_pass==1) 
                                                        <button class="btn btn-success">Yes</button>
                                                    @else
                                                        <button class="btn btn-danger">No</button>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Consider Fail on Absent ?</th>
                                                <td>
                                                    @if($ass_ex->absent_fail==1) 
                                                        <button class="btn btn-success">Yes</button>
                                                    @else
                                                        <button class="btn btn-danger">No</button>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Marks for Term (%)</th>
                                                <td>{{ $ass_ex->rel_to_exam_term->marks_final }}%</td>
                                            </tr>
                                        
                                            <tr>
                                                <th>Modified By</th>
                                                <td>Learning Campus</td>
                                            </tr>
                                        
                                        </tbody>
                                    </table>
                            
                                <!---- /Branch View table ----->
                        

                            </form> 
                        </div>

                        <!-- <h2 class="mt-5 mb-5 ml-4">Subject Wise Mark</h2>

                        <div class="table-responsive m-3">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Full Mark</th>
                                    <th scope="col">Pass Mark</th>
                                </tr>
                                </thead>
                                <tbody>

                                @
                                <tr>
                                    <th>Bangla</th>
                                    <td>70</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>English</th>
                                    <td>70</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Mathematics</th>
                                    <td>70</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Islam and Moral Education</th>
                                    <td>70</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Science</th>
                                    <td>70</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Bangladesh And Global Studies</th>
                                    <td>70</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Information & Communication Technology</th>
                                    <td>70</td>
                                    <td></td>
                                </tr>
                            
                                </tbody>
                            </table>
                        </div> -->

                    </div>    
                </section>

            </div>
        </div>

    </main>

<!-- Global Vendor -->

@include('layouts.inc.footer')
</body>

</html>