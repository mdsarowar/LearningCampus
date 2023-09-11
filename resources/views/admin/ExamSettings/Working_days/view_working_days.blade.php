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
                                Woking Days View
                            </h2>
                        </header>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">
                                <div class="session_view_link mt-2 mb-5">
                                    <a href="{{ route('add.working.days') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                                    
                                </div>
                                <!---- Session View table  ----->
                                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                                        <tbody >
                                            <tr>
                                                <th>Session</th>
                                                <td>{{ $work_day->rel_to_exam_term->session }}</td>
                                            </tr>
                                            <tr>
                                                <th>Exam Term</th>
                                                <td>{{ $work_day->rel_to_exam_term->term_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Classes</th>
                                                <td>{{ $work_day->class_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Class Start Date</th>
                                                <td>{{ $work_day->start_date }}</td>
                                            </tr>
                                            <tr>
                                                <th>Class End Date</th>
                                                <td>{{ $work_day->end_date }}</td>
                                            </tr>
                                            <tr>
                                                <th>Total Working Days</th>
                                                <td>{{ $work_day->duration }}</td>
                                            </tr>
                                            
                                            <tr>
                                                <th>Created By</th>
                                                <td>tsit</td>
                                            </tr>
                                            
                                            <tr>
                                                <th>Modified By</th>
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