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
                            <h2 class="text-white mb-0">Student Merit List</h2>
                        </header>
                        @if (session('error'))
                        <div class="alert alert-danger col-8 m-auto">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success col-8 m-auto">
                            {{ session('success') }}
                        </div>
                    @endif
                        <div class="academic_info">
                            <h5>

                            </h5>

                            <div class="container">

                                <div class="row mt-3 mb-4">


                                    <div class="col-6 col-md-6">
                                        <label for="">Session <span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            <option value="">Select Session</option>
                                            @foreach ($sessionsList as $session)
                                                <option value="{{ $session['session_name'] }}">
                                                    {{ $session['session_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col-6 col-md-6">
                                        <label for="">Class <span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            <option value="">Select Class </option>
                                            <optgroup label="Bangla Medium" class="bold_text">
                                                @foreach ($classesList as $class)
                                                    @if ($class['class_type'] === 'Bangla')
                                                        <option
                                                            value="{{ $class['class_type'] . '_' . $class['class_name'] }}">
                                                            {{ $class['class_name'] }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </optgroup>
                                            <optgroup label="English Medium" class="bold_text">
                                                @foreach ($classesList as $class)
                                                    @if ($class['class_type'] === 'English')
                                                        <option
                                                            value="{{ $class['class_type'] . '_' . $class['class_name'] }}">
                                                            {{ $class['class_name'] }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>

                                </div>



                                <div class="row mt-3 mb-4">

                                    <div class="col-6 col-md-6">
                                        <label for="">Group </label>
                                        <select name="" id="">
                                            <option value="">All Group</option>
                                            @foreach ($groupsList as $group)
                                            <option value="{{ $group['group_name'] }}">{{ $group['group_name'] }}</option>
                                                
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-6 col-md-6">
                                        <label for="">Shift<span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            <option value="">Select Shift</option>
                                            @foreach ($shiftsList as $shift)
                                                <option value="{{ $shift['shift_name'] }}">{{ $shift['shift_name'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="row mt-3 mb-4">

                                    <div class="col-6 col-md-6">
                                        <label for="">Section <span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            <option value="">Select Section</option>
                                            @foreach ($sectionsList as $section)
                                                <option value="{{ $section['section_name'] }}">
                                                    {{ $section['section_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-6 col-md-6">
                                        <label for="">Exam Term <span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            <option value="">Select Exam Term</option>
                                            @foreach ($examtermList as $examterm)
                                                <option value="{{ $examterm['examterm_name'] }}">
                                                    {{ $examterm['examterm_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="row mt-3 mb-4">

                                    <div class="col-6 col-md-6">
                                        <label for="">Part <span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            <option value="">Select Exam Part</option>
                                            @foreach ($exampartList as $exampart)
                                                <option value="{{ $exampart['exampart_name'] }}">
                                                    {{ $exampart['exampart_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-6 col-md-6">
                                        <label for="">Suject <span class="text-danger">*</span></label>
                                        <input type="text" name="" id="">
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">
                                    <div class="col-6 col-md-6">
                                        <a href="" class="btn bg-gradient border-0 text-white">Submit</a>
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

    <script>
        var preload = document.querySelector(".preload");
        var preloaderst2 = document.querySelectorAll(".st2");
        var preloaderst3 = document.querySelectorAll(".st3");
        var preloaderst4 = document.querySelectorAll(".st4");

        for (let i = 0; i < preloaderst2.length; i++) {
            preloaderst2[i].style.fill = "#0E3E67";
        }
        for (let i = 0; i < preloaderst3.length; i++) {
            preloaderst3[i].style.fill = "#FF9324";
        }
        for (let i = 0; i < preloaderst4.length; i++) {
            preloaderst4[i].style.fill = "#0E3E67";
        }

        function counter() {
            var counts = setInterval(() => {
                var c = parseInt($('.count').text());
                $('.count').text((++c).toString());
                if (c == 100) {
                    clearInterval(counts);
                }
            }, 60);
        }
        counter();

        window.addEventListener("load", function() {
            preload.style.display = "none";
        })
    </script>

    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>

    <!-- Initialization  -->
    <script src="assets/js/sidebar-nav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dashboard-page-scripts.js"></script>
    <!--<script src="assets/js/scripts.js"></script>-->
    <script>
        $().button('toggle')
    </script>
</body>

</html>
