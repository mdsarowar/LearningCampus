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
                <h2 class="text-white mb-0">Employee Pay Slip</h2>
            </header>
        </header>
        <!-- Success & Error Message -->
        <div>
            @include('layouts.actionmessage')
        </div>
        <!-- Success & Error Message  End-->
        <form action="{{ route(('insert_employee_pay_slip_print')) }}" class="es-form es-add-form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container">

                <div class="row mt-3 mb-4">
                    
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for=""> </label>
                        <select name="employee_type" id="employee_type" required>
                            <option value="">Select Employee Type</option>
                            <option value="Casual">Casual</option>
                            <option value="Contractual">Contractual</option>
                            <option value="Full-time">Full-time</option>
                            <option value="Half-time">Half-time</option>
                            <option value="Part-time">Part-time</option>
                        </select>
                    </div><br><br>
            
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for=""></label>
                        <select name="month" id="month" required>
                            <option selected>Month</option>
                            <?php
                                $months = array("January","February","March","Aplril","May","June",
                                "July","August","September","October","November","December");
                                foreach ($months as $month) { ?>
                                <option> {{ $month }} </option>
                            <?php  } ?>
                        </select>
                    </div><br><br>
            
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for=""></label>
                        <select id="year" name="year" required>
                            <option selected>Year</option>
                           <?php
                                for ($x = 2000; $x < 2030; $x++) { ?>
                                <option> {{ $x }} </option>
                            <?php  } ?>
                        </select>
                    </div><br> <br>
            
                </div>
               
                <div class="row mt-3 mb-4">
            
                    <div class="col-12 col-md-6 col-lg-4">
                        <p class="text-center">
                          <button href="#" class="btn btn-primary px-5">Submit</button>
                        </p> 
                    </div>
                </div>
            
            </div>
        </form>
    </div>    
</section>

    </div>
</div>
</main>

@include('layouts.inc.footer')
</body>
</html>
