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
                             Employe Attendence ({{date('D d M, Y ')}})
                        </h2>
                    </header>

                    <div class="card-body table-responsive" id="institue">
                        <p class="total_count">Total <span>({{$total}})</span></p>
                        <form action="" class="es-form es-add-form">
                          
                            <!---- student table  ----->
                                <table class="table table-bordered mt-3 text-center ">
                                    <thead class="table-bordered">
                                        <tr style="background-color:#ccc">
                                            <th scope="col">ID</th>
                                            <th scope="col">Designation</th>
                                            <th scope="col">Name</th>
                                            <th scope="col" style="color: green; font-weight: 800;">In</th>
                                            <th scope="col" style="color: red; font-weight: 800;">Out</th>
                                            <th scope="col">Punch IN Zone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($empolyees as $empolyee)
                                           
                                        <tr>
                                            <td>{{$empolyee->empolyee_id}}</td>
                                            <td>{{$empolyee->designation}}</td>
                                            <td>{{$empolyee->employee_name}}</td>
                                            <td>{{$empolyee->in_time}}</td>
                                            <td>{{$empolyee->out_time}}</td>
                                            <td></td>
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
<script>
    $().button('toggle')
</script>

</body>
</html>