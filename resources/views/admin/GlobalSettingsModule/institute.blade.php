<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Learning Campus | Institute</title>
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
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <div class="u-content">
            <div class="u-body">

                <section class="es-form-area">
                    <div class="card">
                        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                            <h3 class="text-white mb-0">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0)" onclick="institue()">Institue
                                            Setting</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="javascript:void(0)"
                                            onclick="general()">General Information</a>
                                    </li>
                                </ul>
                            </h3>
                        </header>
                        <!-- Success & Error Message -->
                        <div>
                            @include('layouts.actionmessage')
                        </div>
                        <!-- Success & Error Message  End-->

                        <div class="card-body" id="institue">
                            <form action="{{ route('institute_setting_insert') }}" class="es-form es-add-form"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <p>
                                <div class="sms_div d-flex justify-content-center">
                                    <label class="switch" for="checkbox">
                                        <input type="checkbox" id="checkbox">
                                        <div class="slider round"></div>
                                    </label>
                                    <h6 class="checkbox_txt">Live Website?</h6>
                                </div>
                                </p>

                                <div class="row">

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="subject">Facebook Page</label>
                                        <input type="text" placeholder="www.facebook.com" name="facebook_page"
                                            id="facebook_page">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="subject">Youtube Video</label>
                                        <input type="text" placeholder="www.Youtube.com" name="youtube_video"
                                            id="youtube_video">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="admin_theme">Admin Theme <span>*</span></label>
                                        <select id="admin_theme" name="admin_theme" class="es-add-select"
                                            style="display: none;">
                                            <option value="">Select Admin Theme</option>
                                            <option value="#008B8B">Dark Cyan</option>
                                            <option value="#87ceeb">Sky Blue</option>
                                            <option value="#2e8b57">Sea Green</option>
                                            <option value="#9b870c">Dark Yellow</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="website_theme">Website Theme <span>*</span></label>
                                        <select id="website_theme" name="website_theme" class="es-add-select"
                                            style="display: none;">
                                            <option value="">Select Website Theme</option>
                                            <option value="Defult Theme">Defult Theme</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-10 mt-4 mb-3">
                                    <p>
                                        <button type="submit" class="btn bg-gradient border-0 text-white">Save</button>
                                        <button type="clear"
                                            class="btn cancel_btn border-0 text-white">Cancel</button>
                                    </p>
                                </div>

                            </form>
                        </div>

                        <div class="card-body" id="general">
                            <form action="{{ route('institute_info_insert') }}" class="es-form es-add-form"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="eiin_no">EIIN No</label>
                                        <input type="text" placeholder="edu_" name="eiin_no" id="eiin_no">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="institue_name">Institue Name <span>*</span></label>
                                        <input type="text" placeholder="Campus Library" name="institue_name"
                                            id="institue_name">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="slogan">Slogan</label>
                                        <input type="text" name="slogan" id="slogan" placeholder="Slogan">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="email">Email <span>*</span></label>
                                        <input type="text" name="email" id="email"
                                            placeholder="something@gmail.com">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="favicon">Favicon</label>
                                        <div id="image_preview_one"></div>
                                        <input type="file" id="file1" class="form-control" name="favicon">
                                        <label for="file1" id="fileCustom"><i class="fa-solid fa-camera"></i>
                                            Choose Photo</label>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="banner">Banner</label>
                                        <div id="image_preview_two"></div>
                                        <input type="file" id="file2" class="bannerInput" name="banner"
                                            class="form-control">
                                        <label for="file2" id="fileCustom"><i class="fa-solid fa-camera"></i>
                                            Choose Photo</label>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="logo">Logo</label>
                                        <div id="image_preview_three"></div>
                                        <input type="file" id="file3" name="logo" class="form-control">
                                        <label for="file3" id="fileCustom"><i class="fa-solid fa-camera"></i>
                                            Choose Photo</label>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Short Description <span>*</span></label>
                                        {{-- <input type="text" name="short_description" id="short_description"
                                            placeholder="something....."> --}}
                                        <textarea class="ckeditor" id="short_description" name="short_description"></textarea>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Why Choose Institute ?</label>
                                        {{-- <input type="text" name="why_choose_institute" id="why_choose_institute"
                                            placeholder="something....."> --}}
                                        <textarea class="ckeditor" id="why_choose_institute" name="why_choose_institute"></textarea>
                                    </div>

                                </div>

                                <div class="col-md-10 mt-4 mb-3">
                                    <p>
                                        <button type="submit"
                                            class="btn bg-gradient border-0 text-white">Save</button>
                                        <button type="clear"
                                            class="btn cancel_btn border-0 text-white">Cancel</button>
                                    </p>
                                </div>

                            </form>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </main>

    <!-- Global Vendor -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        function institue() {
            var institue = document.getElementById("institue");
            var general = document.getElementById("general");

            institue.style.display = "block";
            general.style.display = "none";
        }

        function general() {
            var institue = document.getElementById("institue");
            var general = document.getElementById("general");

            general.style.display = "block";
            institue.style.display = "none";
        }
    </script>

    <script>
        CKEDITOR.replace('short_description');
        CKEDITOR.replace('why_choose_institute');
    </script>


    <script type="text/javascript">
        $("#file1").change(function() {
            $('#image_preview_one').html("");
            var total_file = document.querySelector('#file1').files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_preview_one').append(
                    "<div class='col-md-3'><img class='img-responsive' width='80px' height='80px'  src='" + URL
                    .createObjectURL(event.target.files[i]) + "'></div>");
            }
        });
        $("#file2").change(function() {
            $('#image_preview_two').html("");
            var total_file = document.querySelector('#file2').files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_preview_two').append(
                    "<div class='col-md-3'><img class='img-responsive' width='80px' height='80px'  src='" + URL
                    .createObjectURL(event.target.files[i]) + "'></div>");
            }
        });
        $("#file3").change(function() {
            $('#image_preview_three').html("");
            var total_file = document.querySelector('#file3').files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_preview_three').append(
                    "<div class='col-md-3'><img class='img-responsive' width='80px' height='80px'  src='" + URL
                    .createObjectURL(event.target.files[i]) + "'></div>");
            }
        });
    </script>


    @include('layouts.inc.footer')
</body>

</html>
