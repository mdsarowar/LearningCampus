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
                                Exam Seat Plan
                            </h2>
                        </header>

                        <form action="">
                            @csrf
                            <div class="container">
                                <div class="student_search">
                                    <label for=""> Student Id</label>
                                    <input type="text" name="search" id="" class="form-control" value="{{ $search }}">
                                    <br>
                                    <button type="" class="btn bg-gradient border-0 text-white">Search</button>
                                </div>
                            </div>
                        </form>
                        

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">

                                <!---- Branch View table  ----->
                                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                                        @if($search == "")
                                        <tbody >
                                            <tr>
                                                <th>Student ID</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Name</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Session</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Class</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Shift</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Section</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Exam Term</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Building/Floor</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Room No. </th>
                                                <td></td>
                                            </tr>
                                        
                                            <tr>
                                                <th>Modified By</th>
                                                <td>Learning Campus</td>
                                            </tr>
                                        
                                        </tbody>
                                        @else
                                        <tbody >
                                        @foreach($info as $seat)
                                            <tr>
                                                <th>Student ID</th>
                                                <td>{{ $seat->student_id }}</td>
                                            </tr>
                                            <tr>
                                                <th>Name</th>
                                                <td>{{ $seat->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Session</th>
                                                <td>{{ $seat->session }}</td>
                                            </tr>
                                            <tr>
                                                <th>Class</th>
                                                <td>{{ $seat->class_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Shift</th>
                                                <td>{{ $seat->shift }}</td>
                                            </tr>
                                            <tr>
                                                <th>Section</th>
                                                <td>{{ $seat->section }}</td>
                                            </tr>
                                            <tr>
                                                <th>Exam Term</th>
                                                <td>{{ $seat->rel_to_exam_term->term_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Building/Floor</th>
                                                <td>{{ $seat->floor }}</td>
                                            </tr>
                                            <tr>
                                                <th>Room No. </th>
                                                <td>{{ $seat->room }}</td>
                                            </tr>
                                        
                                            <tr>
                                                <th>Modified By</th>
                                                <td>Learning Campus</td>
                                            </tr>
                                        
                                            @endforeach
                                        </tbody>
                                        @endif
                                    </table>
                            
                                <!---- /Branch View table ----->
                        

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