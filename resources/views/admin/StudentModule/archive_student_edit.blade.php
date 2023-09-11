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
                            <h2 class="text-white mb-0">Update Student Details</h2>
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
                        <form action="{{ route('archive.student.edit.update', ['id' => $student->id]) }}"
                            method="POST">
                            @csrf
                            @method('PUT')
                            <div class="academic_info">
                                <h5>
                                    <i class="fa-solid fa-circle-info"></i> Acamedic Information
                                </h5>

                                <div class="container">

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Session <span class="text-danger">*</span></label>
                                            <select name="session" id="">
                                                <option value="{{ $student->Session }}">{{ $student->Session }}</option>

                                            </select>
                                        </div>

                                        <div class="col-6">
                                            <label for="">Shift <span class="text-danger">*</span></label>
                                            <select name="shift" id="">
                                                <option value="{{ $student->Shift }}">{{ $student->Shift }}</option>

                                            </select>
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Class <span class="text-danger">*</span></label>
                                            <select name="class" id="">
                                                <option value="{{ $student->Class }}">{{ $student->Class }}</option>

                                            </select>
                                        </div>

                                        <div class="col-6">
                                            <label for="">Section <span class="text-danger">*</span></label>
                                            <select name="section" id="">
                                                <option value="{{ $student->Section }}">{{ $student->Section }}
                                                </option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Device Serial / MAC</label>
                                            <input type="text" name="deviceSerial" placeholder=""
                                                value="{{ $student->DeviceSerialMAC }}">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Student ID <span class="text-danger">*</span></label>
                                            <input type="text" name="studentId" value="{{ $student->StudentId }}">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Tracking ID</label>
                                            <input type="text" placeholder="Last Finger Id" name="trackingId"
                                                value="{{ $student->TrackingID }}">
                                        </div>

                                        {{-- <div class="col-6">
                                        <label for="">Roll No <span class="text-danger">*</span></label>
                                        <input type="text" name="rollNo" value="{{ $student->Class }}">
                                    </div> --}}

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">RFID Card No</label>
                                            <input type="text" name="rfidCardNo"
                                                placeholder="No Depends On Device Id"
                                                value="{{ $student->RFIDCardNo }}">
                                        </div>

                                        <div class="col-6 toggle-group">
                                            <div class="sms_div">
                                                <label class="switch" for="checkbox">
                                                    <input type="checkbox" name="attendancesms" id="checkbox"
                                                        value="{{ $student->AttendanceSMS }}" />
                                                    <div class="slider round"></div>
                                                </label>
                                                <h6 class="checkbox_txt">Attendance SMS</h6>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="academic_info">
                                <h5>
                                    <i class="fa-solid fa-circle-info"></i> Personal Information
                                </h5>

                                <div class="container">

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Name(In English) <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="nameEnglish" id=""
                                                value="{{ $student->NameEnglish }}">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Blood Group <span class="text-danger">*</span></label>
                                            <input type="text" name="bloodGroup" id=""
                                                value="{{ $student->BloodGroup }}">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Name(In Bengali) <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="nameBengali" id=""
                                                value="{{ $student->NameBengali }}">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Religion <span class="text-danger">*</span></label>
                                            <select name="religion" id="">
                                                <option value="{{ $student->Religion }}">{{ $student->Religion }}
                                                </option>

                                            </select>
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Device Serial / MAC</label>
                                            <input type="text" name="deviceSerial" placeholder="1"
                                                value="{{ $student->DeviceSerialMACPersonal }}">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Student ID <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="studentIdP"
                                                value="{{ $student->StudentIdPersonal }}">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Date Of Birth</label>
                                            <input type="date" name="dob"
                                                value="{{ $student->DateOfBirth }}">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Nationality <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="nationality"
                                                value="{{ $student->Nationality }}">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Gender</label>
                                            <select name="gender" id="">
                                                <option value="{{ $student->Gender }}">{{ $student->Gender }}
                                                </option>

                                            </select>
                                        </div>

                                        <div class="col-6 toggle-group">
                                            <label for="">Photo</label>
                                            <input type="file" name="photo" id=""
                                                value="{{ $student->Photo }}">
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="academic_info">
                                <h5>
                                    <i class="fa-solid fa-circle-info"></i> Contact Information
                                </h5>

                                <div class="container">

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Mobile <span class="text-danger">*</span></label>
                                            <input type="text" name="mobile" id=""
                                                value="{{ $student->Mobile }}">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Email</label>
                                            <input type="text" name="email" id=""
                                                value="{{ $student->Email }}">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Present Address <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="presentAddress" id="" cols="30" rows="10">{{ $student->PresentAddress }}</textarea>
                                        </div>

                                        <div class="col-6">
                                            <label for="">Parmanant Address <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="parmanantAddress" id="" cols="30" rows="10">{{ $student->ParmanantAddress }}</textarea>
                                            <br>
                                            <input type="checkbox" name="" id="check"><span>Same as
                                                parmanant</span>
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <div class="academic_info">
                                <h5>
                                    <i class="fa-solid fa-circle-info"></i> Parents Information
                                </h5>

                                <div class="container">

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Father's Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="fathername" id=""
                                                value="{{ $student->FatherName }}">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Mother's Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="mothername" id=""
                                                value="{{ $student->MotherName }}">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Father's Phone <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="fatherphone" id=""
                                                value="{{ $student->FatherPhone }}">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Mother's Phone <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="motherphone" id=""
                                                value="{{ $student->MotherPhone }}">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Father's NID</label>
                                            <input type="text" name="fathernid" id=""
                                                value="{{ $student->FatherNID }}">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Mother's NID</label>
                                            <input type="text" name="mothernid" id=""
                                                value="{{ $student->MotherNID }}">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Father's Profession</label>
                                            <input type="text" name="fatherPro" id=""
                                                value="{{ $student->FatherProfession }}">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Mother's Profession</label>
                                            <input type="text" name="motherPro" id=""
                                                value="{{ $student->MotherProfession }}">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Father's Designation</label>
                                            <input type="text" name="fatherDes" id=""
                                                value="{{ $student->FatherDesignation }}">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Mother's Designation</label>
                                            <input type="text" name="motherDes" id=""
                                                value="{{ $student->MotherDesignation }}">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Office Name & Addres</label>
                                            <textarea name="officeNAF" id="" cols="30" rows="10">{{ $student->OfficeNameAddressFather }}</textarea>
                                        </div>

                                        <div class="col-6">
                                            <label for="">Office Name & Addres</label>
                                            <textarea name="officeNAM" id="" cols="30" rows="10">{{ $student->OfficeNameAddressMother }}</textarea>
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Father's Office Contact No.</label>
                                            <input type="text" name="focn" id=""
                                                value="{{ $student->FatherOfficeContactNo }}">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Mother's Office Contact No.</label>
                                            <input type="text" name="mocn" id=""
                                                value="{{ $student->MotherOfficeContactNo }}">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Father's Photo</label>
                                            <input type="file" name="fp" id=""
                                                value="{{ $student->FatherPhoto }}">
                                            <label for=""><span>(maximum image size 300 KB)</span></label>
                                        </div>

                                        <div class="col-6">
                                            <label for="">Mother's Photo</label>
                                            <input type="file" name="mp" id=""
                                                value="{{ $student->MotherPhoto }}">
                                            <label for=""><span>(maximum image size 300 KB)</span></label>
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <div class="academic_info">
                                <h5>
                                    <i class="fa-solid fa-circle-info"></i> Guardian / Receiver Information
                                </h5>

                                <div class="container">

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Guardian / Receiver</label>
                                            <input type="radio" value="Father" name="guardian_receiver"
                                                id="check"><span>Father</span>
                                            <input type="radio" value="Mother" name="guardian_receiver"
                                                id="check"><span>Mother</span>
                                            <input type="radio" value="Other" name="guardian_receiver"
                                                id="check"><span>Other</span>
                                        </div>

                                        <div class="col-6">
                                            <label for="">Guardian's Profession</label>
                                            <input type="text" name="gPro" id=""
                                                value="{{ $student->GuardianProfession }}">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Guardian's Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="gn" id=""
                                                value="{{ $student->GuardianName }}">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Guardian's Designation</label>
                                            <input type="text" name="gd" id=""
                                                value="{{ $student->GuardianDesignation }}">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Relation With Student</label>
                                            <input type="text" name="rws" id=""
                                                value="{{ $student->RelationWithStudent }}">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Office Contact No.</label>
                                            <input type="text" name="ocn" id=""
                                                value="{{ $student->GuardianOfficeContactNo }}">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Guardian's Phone <span>*</span></label>
                                            <input type="text" name="gp" id=""
                                                value="{{ $student->GuardianPhone }}">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Office Name & Address</label>
                                            <input type="text" name="onag" id=""
                                                value="{{ $student->OfficeNameAddress }}">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Status</label>
                                            <select name="status" id="">
                                                <option value="{{ $student->Status }}">{{ $student->Status }}
                                                </option>

                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <p class="text-center">
                                <button type="submit" class="btn btn-primary px-5">Update</button>
                            </p>
                        </form>
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
