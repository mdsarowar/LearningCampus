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
                                Grade View
                            </h2>
                        </header>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">
                                <div class="session_view_link mt-2 mb-5">
                                    <a href="add_grade.html" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                                    <a href="grade_edit.html" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                                </div>
                                <!---- Session View table  ----->
                                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                                        <tbody >
                                            <tr>
                                                <th>Class</th>
                                                <td>{{ $grade->class_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Start Marks	</th>
                                                <td>{{ $grade->start_mark }}</td>
                                            </tr>
                                            <tr>
                                                <th>End Mark</th>
                                                <td>{{ $grade->end_mark }}</td>
                                            </tr>
                                            <tr>
                                                <th>Grade Letter</th>
                                                <td>{{ $grade->grade_letter }}</td>
                                            </tr>
                                            <tr>
                                                <th>Grade Point	</th>
                                                <td>{{ $grade->grade_point }}</td>
                                            </tr>
                                            <tr>
                                                <th>Remarks</th>
                                                <td>{{ $grade->remark }}</td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td>
                                                    @if($grade->status==1) 
                                                        <button class="btn btn-success">Active</button>
                                                    @else
                                                        <button class="btn btn-danger">Inactive</button>
                                                    @endif
                                            </td>
                                            </tr>
                                            <tr>
                                                <th>Create At</th>
                                                <td>2020-08-13 07:16:45</td>
                                            </tr>
                                            <tr>
                                                <th>Create By</th>
                                                <td>tsit</td>
                                            </tr>
                                            <tr>
                                                <th>Modified At</th>
                                                <td>2022-02-03 04:58:07</td>
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