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
                            <h2 class="text-white mb-0">Student Switch</h2>
                        </header>

                        <div class="academic_info">


                            <div class="container">

                                <div class="row mt-3 mb-4">

                                    <div class="col-12 col-md-12">
                                        <label for="">Student ID <span class="text-danger">*</span></label>
                                        <input type="text" name="studentId" id="">
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
