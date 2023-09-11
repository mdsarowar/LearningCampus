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
                            <h2 class="text-white mb-0">SMS Settings</h2>
                        </header>

                        <div class="academic_info">
                            <h5>
                                <i class="fa-solid fa-circle-info"></i> General Settings (On/Off)
                            </h5>

                            <div class="container">

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt">Show Teacher on home page</h6>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" checked id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt">Show Teacher on home page</h6>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt">Show Teacher Address</h6>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" checked id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt">Show Teacher Email</h6>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="academic_info">
                            <h5>
                                <i class="fa-solid fa-circle-info"></i> SMS Settings (On/Off)
                            </h5>

                            <div class="container">

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt">Student Admision SMS</h6>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" checked id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt">Student Admision SMS ? </h6>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt">Student Punch in SMS</h6>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" checked id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt">SMS When Add Employee</h6>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt">Student Punch Out SMS</h6>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" checked id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt">Student Absent SMS</h6>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt">Due SMS</h6>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" checked id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt">Student Fee Collection SMS</h6>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="academic_info">
                            <h5>
                                <i class="fa-solid fa-circle-info"></i> SMS Content Settings
                            </h5>

                            <div class="container">

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Student Admission SMS Content</label>
                                        <textarea name="" placeholder="" id="sms_text_area">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore ipsum mollitia, hic quam in ratione reiciendis laudantium modi esse, ipsam voluptatem, rem nostrum! Voluptatibus quidem, in nisi rem nemo distinctio.
                           </textarea>
                                    </div>

                                    <div class="col-6">
                                        <label for="">Students Congratulation SMS Content</label>
                                        <textarea name="" placeholder="" id="sms_text_area">
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore ipsum mollitia, hic quam in ratione reiciendis laudantium modi esse, ipsam voluptatem, rem nostrum! Voluptatibus quidem, in nisi rem nemo distinctio.
                            </textarea>
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Teacher Add SMS Content</label>
                                        <textarea name="" placeholder="" id="sms_text_area">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore ipsum mollitia, hic quam in ratione reiciendis laudantium modi esse, ipsam voluptatem, rem nostrum! Voluptatibus quidem, in nisi rem nemo distinctio.
                           </textarea>
                                    </div>

                                    <div class="col-6">
                                        <label for="">Students Punch Out SMS Content</label>
                                        <textarea name="" placeholder="" id="sms_text_area">
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore ipsum mollitia, hic quam in ratione reiciendis laudantium modi esse, ipsam voluptatem, rem nostrum! Voluptatibus quidem, in nisi rem nemo distinctio.
                            </textarea>
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Students Punch In SMS Content</label>
                                        <textarea name="" placeholder="" id="sms_text_area">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore ipsum mollitia, hic quam in ratione reiciendis laudantium modi esse, ipsam voluptatem, rem nostrum! Voluptatibus quidem, in nisi rem nemo distinctio.
                           </textarea>
                                    </div>

                                    <div class="col-6">
                                        <label for="">Students Absent SMS Content</label>
                                        <textarea name="" placeholder="" id="sms_text_area">
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore ipsum mollitia, hic quam in ratione reiciendis laudantium modi esse, ipsam voluptatem, rem nostrum! Voluptatibus quidem, in nisi rem nemo distinctio.
                            </textarea>
                                    </div>

                                </div>


                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Due SMS Conten</label>
                                        <textarea name="" placeholder="" id="sms_text_area">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore ipsum mollitia, hic quam in ratione reiciendis laudantium modi esse, ipsam voluptatem, rem nostrum! Voluptatibus quidem, in nisi rem nemo distinctio.
                           </textarea>
                                    </div>

                                    <div class="col-6">
                                        <label for="">Students Fee Collection SMS Content</label>
                                        <textarea name="" placeholder="" id="sms_text_area">
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore ipsum mollitia, hic quam in ratione reiciendis laudantium modi esse, ipsam voluptatem, rem nostrum! Voluptatibus quidem, in nisi rem nemo distinctio.
                            </textarea>
                                    </div>

                                </div>

                            </div>
                        </div>


                        <p class="text-center">
                            <a href="#" class="btn btn-primary px-5">Update</a>
                            <a href="#" class="btn cancel_btn px-5 text-white">Cancel</a>
                        </p>

                    </div>
                </section>

            </div>
        </div>


    </main>

    <!-- Global Vendor -->
    @include('layouts.inc.footer')

</body>

</html>
