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
                        <h2 class="text-white mb-0">Employee Search</h2>
                    </header>

                    <div class="academic_info student_search">


                        <div class="container">

                            <div class="row mt-3 mb-4">

                                <div class="col-12 col-md-6 col-lg-4">
                                    <label for="">Type <span class="text-danger">*</span></label>
                                    <select name="" id="">
                                        <option value="">All</option>
                                        <option value="">Casual</option>
                                        <option value="">Contractual</option>
                                        <option value="">Full-time</option>
                                        <option value="">Half-time</option>
                                        <option value="">Part-time</option>
                                    </select>
                                </div> <br><br>

                                <div class="col-12 col-md-6 col-lg-4">
                                    <label for="">Working Shift <span class="text-danger">*</span></label>
                                    <select name="" id="">
                                        <option value="">Casual</option>
                                        <option value="">Contractual</option>
                                        <option value="">Full-time</option>
                                        <option value="">Half-time</option>
                                        <option value="">Part-time</option>
                                    </select>
                                </div><br><br>

                                <div class="col-12 col-md-6 col-lg-4">
                                    <label for="">Designation<span class="text-danger">*</span></label>
                                    <select name="" id="">
                                        <option value="">Select Designation</option>
                                        <option value="">Teacher</option>
                                        <option value="">Director</option>
                                        <option value="">Princial</option>
                                        <option value="">Proffesor</option>
                                        <option value="">CEO</option>
                                    </select>
                                </div><br><br>

                            </div>

                            <div class="row mt-3 mb-4">

                                <div class="col-12 col-md-6 col-lg-4">
                                    <label for="">Gender <span class="text-danger">*</span></label>
                                    <select name="" id="">
                                        <option value="">Male</option>
                                        <option value="">Female</option>
                                        <option value="">Custom</option>
                                    </select>
                                </div><br><br>

                                <div class="col-12 col-md-6 col-lg-4">
                                    <label for="">Marital Status <span class="text-danger">*</span></label>
                                    <select name="" id="">
                                        <option value="">Select Marital Status</option>
                                        <option value="">Married</option>
                                        <option value="">Unmarried</option>
                                    </select>
                                </div><br><br>

                                <div class="col-12 col-md-6 col-lg-4">
                                    <label for="">Blood Group <span class="text-danger">*</span></label>
                                    <select name="" id="">
                                        <option value="">Select Blood Group</option>
                                        <option value="">A+</option>
                                        <option value="">A-</option>
                                        <option value="">B+</option>
                                        <option value="">B-</option>
                                        <option value="">O+</option>
                                        <option value="">O-</option>
                                        <option value="">AB-</option>
                                        <option value="">AB+</option>
                                    </select>
                                </div><br><br>

                            </div>


                            <div class="row mt-3 mb-4">

                                <div class="col-12 col-md-6 col-lg-4">
                                    <label for="">Date Of Birth </label>
                                    <input type="date" name="" id="">
                                </div><br><br>

                                <div class="col-12 col-md-6 col-lg-4">
                                    <label for="">Employee ID </label>
                                    <input type="text" name="" id="">
                                </div><br><br>

                            </div>

                        </div>

                    </div>


                    <p class="text-center">
                        <a href="#" class="btn btn-primary px-5">Search</a>
                    </p>


                </div>
            </section>

        </div>
    </div>
</main>

<!-- Global Vendor -->


<script>
    function fillRoutineDay(day) {
        var routineDayInput = document.getElementById("routine_day");
        var selectedClass = document.querySelector('.class');
        var selectedClassShift = document.querySelector('.class_shift');
        var selectedSection = document.querySelector('.section');

        // Assuming you want to set the values of the hidden inputs
        document.getElementById("class").value = selectedClass.value;
        document.getElementById("class_shift").value = selectedClassShift.value;
        document.getElementById("section").value = selectedSection.value;

        routineDayInput.value = day;
    }
</script>

@include('layouts.inc.footer');
</body>
