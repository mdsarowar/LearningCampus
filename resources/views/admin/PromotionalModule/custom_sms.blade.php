<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Learning Campus | Custom SMS</title>
    @include('layouts.inc.head')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .contact_no {
            position: absolute;
            padding: 4px 8px;
            background-color: rgb(215, 221, 255);
            border-radius: 4px 0 0 4px;
        }
    </style>
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
                            <h3 class="text-white mb-0">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link " href="javascript:void(0)"
                                            onclick="stuInformation()">Student SMS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="javascript:void(0)"
                                            onclick="empInformation()">Employees SMS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="javascript:void(0)"
                                            onclick="custGroupInformation()">Custom Group SMS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="javascript:void(0)"
                                            onclick="custInformation()">Custom SMS</a>
                                    </li>
                                </ul>
                            </h3>
                        </header>

                        {{-- form submission message start --}}
                        @if (session('error'))
                            <div class="alert alert-danger col-8 m-auto text-center">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success col-8 m-auto text-center">
                                {{ session('success') }}
                            </div>
                        @endif
                        {{-- form submission message end --}}

                        <div id="searchLoader" style="text-align: center; display:none">
                            <img src="{{ asset('assets/img/dual_ball_loader.gif') }}" alt="" width="80">
                        </div>

                        <form id="student_sms_send_form" method="POST" action="/custom-sms-student">
                            @csrf
                            <div id="studentInformation">
                                <div class="academic_info">
                                    <div class="container">

                                        {{-- 
                                            <div class="row mt-3 mb-4">
                                        <div class="col-6">
                                            <label for="">Session <span class="text-danger">*</span></label>
                                            <select name="session" id="">
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                            </select>
                                        </div>

                                        <div class="col-6">
                                            <label for="">Shift <span class="text-danger">*</span></label>
                                            <select name="shift" id="">
                                                <option value="">Select Shift</option>
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
                                            <select name="class" id="class" required>
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
                                            <select name="" id="">
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
                                            <label for="">Gender</label>
                                            <select name="gender" id="">
                                                <option value="">Select Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>

                                        <div class="col-6">
                                            <label for="">Blood Group</label>
                                            <select name="blood_group" id="">
                                                <option value="">Select Blood Group</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
                                        </div>
                                    </div> 
                                    --}}

                                        <div class="row mt-3 mb-4">
                                            <div class="col-6">
                                                <label for="">Student ID <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" name="student_id" id="student_id">
                                                <button id="searchStudent" class="btn btn-primary"
                                                    style="padding: 6px; margin-bottom:2px">Search</button>
                                            </div>

                                            <div class="col-6">
                                                <label for="">SMS Type<span class="text-danger">*</span></label>
                                                <select name="sms_type" id="" required>
                                                    <option value="">Select Type</option>
                                                    <option value="Admission">Admission</option>
                                                    <option value="Attendence">Attendence</option>
                                                    <option value="Result">Result</option>
                                                    <option value="Payroll">Payroll</option>
                                                    <option value="Account">Account</option>
                                                    <option value="Custom">Custom</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="academic_info">
                                    <div class="container">
                                        <div class="row mt-3 mb-4">
                                            <div class="col-6">
                                                <label for="">Mobile <span>*</span></label>
                                                <div class="flex" style="position: relative">
                                                    <p class="d-inline contact_no">+88</p>
                                                    <input name="contact_no_student" value=""
                                                        placeholder="01810000055" type="number" id="contact_no_student"
                                                        style="padding-left: 50px" required>
                                                </div>
                                                <p>Without country code (+88)</p>
                                            </div>
                                            <div class="col-6">
                                                <label for="">SMS Body <span>*</span></label>
                                                <textarea id="sms_body_student" name="sms_body_student" cols="30" rows="10" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="text-center">
                                    <button type="submit" id="send_student_sms_btn"
                                        class="btn btn-primary px-5">Send</button>
                                </p>
                            </div>
                        </form>


                        <form id="employee_sms_send_form" method="POST" action="/custom-sms-employee">
                            @csrf
                            <div id="employeInformation">

                                <div class="academic_info">
                                    <div class="container">

                                        <div class="row mt-3 mb-4">
                                            <div class="col-6">
                                                <label for="">Employees <span
                                                        class="text-danger">*</span></label>
                                                <select name="" id="">
                                                    <option value="">Select Employees Type</option>
                                                    <option value="">All</option>
                                                    <option value="">Casual</option>
                                                    <option value="">Contractual</option>
                                                    <option value="">Full-time</option>
                                                    <option value="">Part-time</option>
                                                </select>
                                            </div>

                                            <div class="col-6">
                                                <label for="">SMS Type<span
                                                        class="text-danger">*</span></label>
                                                <select name="sms_type" id="" required>
                                                    <option value="">Select Type</option>
                                                    <option value="Admission">Admission</option>
                                                    <option value="Attendence">Attendence</option>
                                                    <option value="Result">Result</option>
                                                    <option value="Payroll">Payroll</option>
                                                    <option value="Account">Account</option>
                                                    <option value="Custom">Custom</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mt-3 mb-4">
                                            <div class="col-6">
                                                <label for="">Employees ID<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="employee_id" id="employee_id">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="academic_info">
                                    <div class="container">
                                        <div class="row mt-3 mb-4">
                                            <div class="col-6">
                                                <label for="">Mobile <span>*</span></label>
                                                <div class="flex" style="position: relative">
                                                    <p class="d-inline contact_no">+88</p>
                                                    <input name="contact_no_employee" value=""
                                                        placeholder="01810000055" type="number"
                                                        id="contact_no_employee" style="padding-left: 50px">
                                                </div>
                                                <p>Without country code (+88)</p>
                                            </div>

                                            <div class="col-6">
                                                <label for="">SMS Body <span>*</span></label>
                                                <textarea name="sms_body_employee" id="sms_body_employee" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="text-center">
                                    <button type="submit" id="send_employee_sms_btn"
                                        class="btn btn-primary px-5">Send</button>
                                </p>

                            </div>
                        </form>


                        <form id="custom_group_sms_send_form" method="POST" action="/send-group-sms">
                            @csrf
                            <div id="customGroupInformation">
                                <div class="academic_info">
                                    <div class="container">
                                        <div class="row mt-3 mb-4">
                                            <div class="col-6">
                                                <label for="">Group </label>
                                                <select name="sms_group" id="">
                                                    <option value="">Select Group</option>
                                                    @foreach ($groupList as $group)
                                                        <option value="{{ $group['id'] }}">
                                                            {{ $group['group_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-6">
                                                <label for="">SMS Type<span
                                                        class="text-danger">*</span></label>
                                                <select name="sms_type" id="sms_type" required>
                                                    <option value="">Select Type</option>
                                                    <option value="Admission">Admission</option>
                                                    <option value="Attendence">Attendence</option>
                                                    <option value="Result">Result</option>
                                                    <option value="Payroll">Payroll</option>
                                                    <option value="Account">Account</option>
                                                    <option value="Custom">Custom</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mt-3 mb-4">
                                            <div class="col-6">
                                                <label for="">SMS Body <span>*</span></label>
                                                <textarea name="sms_body_custom_group" id="sms_body_custom_group" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="text-center">
                                    <button type="submit" id="send_custom_group_sms_btn"
                                        class="btn btn-primary px-5">Send</button>
                                </p>

                            </div>
                        </form>


                        <form id="custom_sms_send_form" method="POST" action="/custom-sms-send">
                            @csrf
                            <div id="customInformation">
                                <div class="academic_info">
                                    <div class="container">
                                        <div class="row mt-3 mb-4">
                                            <div class="col-6">
                                                <label for="">Mobile <span>*</span></label>
                                                <div class="flex" style="position: relative">
                                                    <p class="d-inline contact_no">+88</p>
                                                    <input name="contact_no_custom" type="number" value=""
                                                        placeholder="01810000055" id="contact_no_custom"
                                                        style="padding-left: 50px">
                                                </div>
                                                <p>Without country code (+88)</p>
                                            </div>

                                            <div class="col-6">
                                                <label for="">SMS Type<span
                                                        class="text-danger">*</span></label>
                                                <select name="sms_type" id="" required>
                                                    <option value="">Select Type</option>
                                                    <option value="Admission">Admission</option>
                                                    <option value="Attendence">Attendence</option>
                                                    <option value="Result">Result</option>
                                                    <option value="Payroll">Payroll</option>
                                                    <option value="Account">Account</option>
                                                    <option value="Custom">Custom</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mt-3 mb-4">
                                            <div class="col-6">
                                                <label for="">SMS Body <span>*</span></label>
                                                <textarea name="sms_body_custom" id="sms_body_custom" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <p class="text-center">
                                    <button type="submit" id="send_custom_sms_btn"
                                        class="btn btn-primary px-5">Send</button>
                                </p>

                            </div>
                        </form>

                    </div>
                </section>

            </div>
        </div>

    </main>


    <!-- Global Vendor -->

    <script>
        var studentInformation = document.getElementById("studentInformation");
        var employeInformation = document.getElementById("employeInformation");
        var customGroupInformation = document.getElementById("customGroupInformation");
        var customInformation = document.getElementById("customInformation");

        function stuInformation() {
            studentInformation.style.display = "block";
            employeInformation.style.display = "none";
            customGroupInformation.style.display = "none";
            customInformation.style.display = "none";
        }

        function empInformation() {
            studentInformation.style.display = "none";
            employeInformation.style.display = "block";
            customGroupInformation.style.display = "none";
            customInformation.style.display = "none";
        }

        function custGroupInformation() {
            studentInformation.style.display = "none";
            employeInformation.style.display = "none";
            customGroupInformation.style.display = "block";
            customInformation.style.display = "none";
        }

        function custInformation() {
            studentInformation.style.display = "none";
            employeInformation.style.display = "none";
            customGroupInformation.style.display = "none";
            customInformation.style.display = "block";
        }
    </script>

    @include('layouts.inc.footer')

    <script src="assets/js/sendSMS.js"></script>
    <script>
        // send sms to students parents
        $('#send_student_sms_btn').click(function() {
            $('#searchLoader').show();
        });
        /* ========================================== */

        // send sms to employee
        $('#send_employee_sms_btn').click(function() {
            $('#searchLoader').show();
        });
        /* ========================================== */

        // send sms to group contacts
        $('#send_custom_group_sms_btn').click(function() {
            $('#searchLoader').show();
        });
        /* ========================================== */

        // send custom sms
        $('#send_custom_sms_btn').click(function() {
            $('#searchLoader').show();
        });
    </script>

    <script>
        $().button('toggle');
    </script>
</body>

</html>
