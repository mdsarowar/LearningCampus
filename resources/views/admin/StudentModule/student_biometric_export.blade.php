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
                            <h2 class="text-white mb-0">Student Export for Attendance</h2>
                        </header>

                        <div class="academic_info">

                            <div class="container">

                                <div class="row mt-3 mb-4">

                                    <div class="col-12 col-md-12">
                                        <label for="">Device Serial / MAC</label>
                                        <select name="" id="">
                                            <option value="">Select Device Serial / MAC</option>
                                            @foreach ($student_admissionList as $student)
                                                <option value="{{ $student['DeviceSerialMAC'] }}">
                                                    {{ $student['DeviceSerialMAC'] }}</option>
                                            @endforeach
                                        </select>
                                        <input type="submit" class="export_btn" value="Export" name=""
                                            id="">
                                    </div>

                                </div>


                            </div>

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
