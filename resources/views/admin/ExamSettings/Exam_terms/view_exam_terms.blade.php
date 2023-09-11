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
                                Exam Terms View
                            </h2>
                        </header>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">
                                <div class="session_view_link mt-2 mb-5">
                                    <a href="{{ route('add.exam.terms') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                                    <a href="exam_terms_edit.html" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                                </div>
                                <!---- Session View table  ----->
                                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                                        <tbody >
                                            <tr>
                                                <th>Session</th>
                                                <td>{{ $term->session }}</td>
                                            </tr>
                                            <tr>
                                                <th>Term Name</th>
                                                <td>{{ $term->term_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Marks For Final (%)</th>
                                                <td>{{ $term->marks_final }}</td>
                                            </tr>
                                            <tr>
                                                <th>Related to Final Term ?</th>
                                                <td>
                                                    @if($term->relate_final_term==1) 
                                                        <button class="btn btn-success">Yes</button>
                                                    @else
                                                        <button class="btn btn-danger">No</button>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Final Term ?</th>
                                                <td>
                                                    @if($term->final_term==1) 
                                                        <button class="btn btn-success">Yes</button>
                                                    @else
                                                        <button class="btn btn-danger">No</button>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Exam Routine With Instruction ?</th>
                                                <td>
                                                    @if($term->exam_ins==1) 
                                                        <button class="btn btn-success">Yes</button>
                                                    @else
                                                        <button class="btn btn-danger">No</button>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Website Result Publish </th>
                                                <td>
                                                    @if($term->web_result_publish==1) 
                                                        <button class="btn btn-success">Yes</button>
                                                    @else
                                                        <button class="btn btn-danger">No</button>
                                                    @endif
                                                </td>
                                            </tr>
                                        
                                            
                                            
                                            <tr>
                                                <th>Create By</th>
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