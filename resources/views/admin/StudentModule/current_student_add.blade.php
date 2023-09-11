<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    @include('layouts.inc.head');
    <style>
        #fileDiv {
            padding: 10px;
            border: ;
            border-radius: 10px;
            background-color: #ededed;
            display: none;
            width: 24%;
            margin: 8px auto;
            margin-left: 64%;
        }

        #fileDiv.show {
            display: block;
        }


        #fileDiv1 {
            padding: 10px;
            border: ;
            border-radius: 10px;
            background-color: #ededed;
            display: none;
            width: 24%;
            margin: 8px auto;
            margin-left: 64%;
        }

        #fileDiv1.show {
            display: block;
        }


        #fileDiv2 {
            padding: 10px;
            border: ;
            border-radius: 10px;
            background-color: #ededed;
            display: none;
            width: 24%;
            margin: 8px auto;
            margin-left: 64%;
        }

        #fileDiv2.show {
            display: block;
        }
    </style>
</head>
<!-- End Head -->

<body>

    <!----- preloader ----->
    @include('layouts.inc.preloader');
    <!----- /preloader ----->



    <!-- Header (Topbar) -->
    <header class="u-header">
        @include('layouts.inc.header');
    </header>
    <!-- End Header (Topbar) -->
    <main class="u-main" role="main">
        <!-- Sidebar -->
        <aside id="sidebar" class="u-sidebar">
            @include('layouts.inc.sidebar');
        </aside>
        <!-- End Sidebar -->



        <div class="u-content">
            <div class="u-body">
                <section class="es-form-area">
                    <form action="{{ route('current.student.add.submit') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                                <h2 class="text-white mb-0">Add New Current Student</h2>
                            </header>
                            {{-- form submission message start --}}
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
                            {{-- form submission message    end --}}
                            <div class="academic_info">
                                {{-- form submission message    end --}}
                                <div class="academic_info">
                                    <h5>
                                        <i class="fa-solid fa-circle-info"></i> Acamedic Information
                                    </h5>

                                    <div class="container">

                                        <div class="row mt-3 mb-4">

                                            <div class="col-6">
                                                <label for="">Session <span class="text-danger">*</span></label>
                                                <select name="session" id="">
                                                    @foreach ($sessionsList as $session)
                                                        <option value="{{ $session['session_name'] }}">
                                                            {{ $session['session_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-6">
                                                <label for="">Shift <span class="text-danger">*</span></label>
                                                <select name="shift" id="" class="shift">
                                                    @foreach ($shiftsList as $shift)
                                                        <option value="{{ $shift['shift_name'] }}">
                                                            {{ $shift['shift_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>

                                        <div class="row mt-3 mb-4">

                                            <div class="col-6">
                                                <label for="">Class <span class="text-danger">*</span></label>
                                                <select name="class" id="" class="class">
                                                    <option value="">Select Class</option>
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

                                            <div class="col-6">
                                                <label for="">Section <span class="text-danger">*</span></label>
                                                <select name="section" id="" class="section">
                                                    <option value="">Select Section</option>
                                                    @foreach ($sectionsList as $section)
                                                        <option value="{{ $section['section_name'] }}">
                                                            {{ $section['section_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>

                                        <div class="row mt-3 mb-4">

                                            <div class="col-6">
                                                <label for="">Device Serial / MAC</label>
                                                <input type="text" name="device_serial" placeholder="1">
                                            </div>

                                            <div class="col-6">
                                                <label for="">Student ID <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="student_id">
                                            </div>

                                        </div>

                                        <div class="row mt-3 mb-4">

                                            <div class="col-6">
                                                <label for="">Tracking ID</label>
                                                <input type="text" placeholder="Last Finger Id" name="tracking_id">
                                            </div>

                                            <div class="col-6">
                                                <label for="">Roll No <span class="text-danger">*</span></label>
                                                <input type="text" name="roll_no">
                                            </div>

                                        </div>

                                        <div class="row mt-3 mb-4">

                                            <div class="col-6">
                                                <label for="">RFID Card No</label>
                                                <input type="text" placeholder="No Depends On Device Id"
                                                    name="rfid_card_no">
                                            </div>

                                            {{-- <div class="col-6 toggle-group">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" id="checkbox" name="attendance_sms"/>
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt">Attendance SMS</h6>
                                        </div> --}}
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
                                            <input type="text" name="name_eng" id="">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Blood Group <span class="text-danger">*</span></label>
                                            <input type="text" name="blood_group" id="">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Name(In Bengali) <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="eng_bng" id="">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Religion <span class="text-danger">*</span></label>
                                            <select name="religion" id="">
                                                <option value="">Select Religion</option>
                                                @foreach ($religionList as $religion)
                                                    <option value="{{ $religion['religion_name'] }}">
                                                        {{ $religion['religion_name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Device Serial / MAC</label>
                                            <input type="text" placeholder="1" name="device_serial_personal">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Student ID <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="student_id_personal">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Date Of Birth</label>
                                            <input type="date" name="date_of_birth">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Nationality <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="nationality">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Gender</label>
                                            <select name="gender" id="">
                                                <option value="">Select Gender</option>
                                                @foreach ($genderList as $gender)
                                                    <option value="{{ $gender['gender_name'] }}">
                                                        {{ $gender['gender_name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-6 toggle-group">
                                            <label for="">Photo</label>
                                            <div id="image_preview_one"></div>
                                            <input type="file" name="photo" id="file1"
                                                class="form-control">
                                            <label for="file1" id="fileCustom" class="add_messageFile"><i
                                                    class="fa-solid fa-camera"></i> Choose Photo</label>
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
                                            <input type="text" name="mobile" id="">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Email</label>
                                            <input type="text" name="email" id="">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Present Address <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="present_address" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="col-6">
                                            <label for="">Parmanant Address <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="parmanat_address" id="" cols="30" rows="10"></textarea>
                                            <br>
                                            <input type="checkbox" name="parmanat_address" id="check"><span>Same
                                                as
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
                                            <input type="text" name="fathers_name" id="">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Mother's Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="mothers_name" id="">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Father's Phone <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="fathers_phone" id="">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Mother's Phone <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="mothers_phone" id="">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Father's NID</label>
                                            <input type="text" name="fathers_nid" id="">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Mother's NID</label>
                                            <input type="text" name="mothers_nid" id="">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Father's Profession</label>
                                            <input type="text" name="fathers_profession" id="">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Mother's Profession</label>
                                            <input type="text" name="mothers_profession" id="">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Father's Designation</label>
                                            <input type="text" name="fathers_designation" id="">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Mother's Designation</label>
                                            <input type="text" name="mothers_designation" id="">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Office Name & Addres</label>
                                            <textarea name="office_name_address_father" id="" cols="30" rows="10"></textarea>
                                        </div>

                                        <div class="col-6">
                                            <label for="">Office Name & Addres</label>
                                            <textarea name="office_name_address_mother" id="" cols="30" rows="10"></textarea>
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Father's Office Contact No.</label>
                                            <input type="text" name="fathers_office_contact_no" id="">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Mother's Office Contact No.</label>
                                            <input type="text" name="mothers_office_contact_no" id="">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Father's Photo</label>
                                            <div id="image_preview_two"></div>
                                            <input type="file" id="file2" class="bannerInput"
                                                name="fathers_photo">
                                            <label for="file2" id="fileCustom" class="add_messageFile"><i
                                                    class="fa-solid fa-camera"></i> Choose Photo</label><br>
                                            <label for=""><span>(maximum image size 300 KB)</span></label>
                                        </div>


                                        <div class="col-6">
                                            <label for="">Mother's Photo</label>
                                            <div id="image_preview_three"></div>
                                            <input type="file" id="file3" name="mothers_photo">
                                            <label for="file3" id="fileCustom" class="add_messageFile"><i
                                                    class="fa-solid fa-camera"></i> Choose Photo</label><br>
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

                                            {{-- <input type="checkbox" name="guardian_receiver" id="fatherCheck"
                                            value="Father">
                                        <label for="fatherCheck">Father</label>

                                        <input type="checkbox" name="guardian_receiver" id="motherCheck"
                                            value="Mother">
                                        <label for="motherCheck">Mother</label>

                                        <input type="checkbox" name="guardian_receiver" id="otherCheck"
                                            value="Other">
                                        <label for="otherCheck">Other</label> --}}
                                        </div>

                                        <div class="col-6">
                                            <label for="">Guardian's Profession</label>
                                            <input type="text" name="guardians_profession" id="">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Guardian's Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="guardians_name" id="">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Guardian's Designation</label>
                                            <input type="text" name="guardians_designation" id="">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Relation With Student</label>
                                            <input type="text" name="relations_with_student" id="">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Office Contact No.</label>
                                            <input type="text" name="office_contact_no" id="">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Guardian's Phone <span>*</span></label>
                                            <input type="text" name="guardians_phone" id="">
                                        </div>

                                        <div class="col-6">
                                            <label for="">Office Name & Address</label>
                                            <input type="text" name="office_name_address" id="">
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="">Status</label>
                                            <select name="status" id="">
                                                <option value="">Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <p class="text-center">
                                <button type="submit" class="btn btn-primary px-5">Save</button>
                            </p>

                        </div>
                    </form>
                </section>

            </div>
        </div>


    </main>

    @include('layouts.inc.footer')

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

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

    <script>
        $().button('toggle')
    </script>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            var checkboxes = document.querySelectorAll("input[name='guardian_receiver[]']");
            
            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('click', function() {
                    if (this.checked && this.id !== "otherCheck") {
                        checkboxes.forEach(function(otherCheckbox) {
                            if (otherCheckbox.id !== checkbox.id) {
                                otherCheckbox.checked = false;
                            }
                        });
                    }
                });
            });
        });
        </script> --}}
</body>

</html>
