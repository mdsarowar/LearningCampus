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
                             Student Attendence 
                             <p>({{date('D d M, Y ')}})</p>
                        </h2>
                    </header>
                    
                    
                    <div class="card-body table-responsive" id="institue">
                        <p class="total_count">Total <span>{{$total}}</span></p>
                        <form action="" class="es-form es-add-form">
                            
                            <!---- student table  ----->
                                <table class="table table-bordered mt-3 text-center ">
                                    <thead class="table-bordered">
                                        <tr style="background-color:#ccc">
                                            <th scope="col">ID</th>
                                            <th scope="col">Roll</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Name</th>
                                            <th scope="col" >In</th>
                                            <th scope="col" >Out</th>
                                            <th scope="col">Punch IN Zone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)
                                        <tr>
                                            <td>{{$student->student_id}}</td>
                                            <td>{{$student->roll}}</td>
                                            <td>{{$student->class}}</td>
                                            <td>{{$student->student_name}}</td>
                                            <td>{{$student->time_in}}</td>
                                            <td>{{$student->time_out}}</td>
                                            <td>{{$student->punch_in_zone}}</td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                
                            <!---- /student table ----->
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