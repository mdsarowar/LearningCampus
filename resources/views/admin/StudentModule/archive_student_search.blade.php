<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->


<head>
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
                            <h2 class="text-white mb-0">Archive Student Search</h2>
                        </header>

                        <div class="academic_info student_search">
                            <h5>
                                <i class="fa-solid fa-circle-info"></i> Student Search (Archive)
                            </h5>

                            <div class="container">

                                <div class="row mt-3 mb-4">

                                    <div class="col-12 col-lg-4">
                                        <label for="">Session <span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            @foreach ($sessionsList as $session)
                                                <option value="{{ $session['session_name'] }}">
                                                    {{ $session['session_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div> <br> <br>

                                    <div class="col-12 col-lg-4">
                                        <label for="">Class Name <span class="text-danger">*</span></label>
                                        <select name="" id="">
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
                                    </div> <br> <br>

                                    <div class="col-12 col-lg-4">
                                        <label for="">Shift <span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            <option value="">Select Shift</option>
                                            @foreach ($shiftsList as $shift)
                                                <option value="{{ $shift['shift_name'] }}">
                                                    {{ $shift['shift_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div> <br> <br>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-12 col-lg-4">
                                        <label for="">Section Name <span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            <option value="">Select Section</option>
                                            @foreach ($sectionsList as $section)
                                                <option value="{{ $section['section_name'] }}">
                                                    {{ $section['section_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div> <br> <br>

                                    <div class="col-12 col-lg-4">
                                        <label for="">Gender <span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            <option value="">Select Gender</option>
                                            @foreach ($genderList as $gender)
                                                <option value="{{ $gender['gender_name'] }}">
                                                    {{ $gender['gender_name'] }}</option>
                                            @endforeach

                                        </select>
                                    </div> <br> <br>

                                    <div class="col-12 col-lg-4">
                                        <label for="">Blood Group <span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            <option value="">Select Blood Group</option>
                                            @foreach ($student_admissionList as $bloodGroup)
                                                <option value="{{ $bloodGroup['BloodGroup'] }}">
                                                    {{ $bloodGroup['BloodGroup'] }}</option>
                                            @endforeach

                                        </select>
                                    </div> <br> <br>

                                </div>


                                <div class="row mt-3 mb-4">

                                    <div class="col-12 col-lg-4">
                                        <label for="">Guardian Phone </label>
                                        <input type="text" name="" id="">
                                    </div> <br> <br>

                                    <div class="col-12 col-lg-4">
                                        <label for="">Student ID </label>
                                        <input type="text" name="" id="">
                                    </div> <br> <br>

                                    <div class="col-12 col-lg-4">
                                        <label for="">Status </label>
                                        <select name="" id="">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>

                                        </select>
                                    </div> <br> <br>

                                </div>

                            </div>

                        </div>


                        <p class="text-center">
                            <a href="#" class="btn btn-primary px-5">Search</a>
                        </p>

                        <div class="search_result table-responsive">
                            <table class="table table-bordered mt-3 text-center current_student_table">
                                <thead class="table-bordered">
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Session</th>
                                        <th scope="col">Class</th>
                                        <th scope="col">Shift</th>
                                        <th scope="col">Section</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Student ID</th>
                                        <th scope="col">Roll No.</th>
                                        <th scope="col">Device Serial / MAC</th>
                                        <th scope="col">Finger ID</th>
                                        <th scope="col">RFID Card No</th>
                                        <th scope="col">Guardian's Phone</th>
                                        <th scope="col">Date of Birth</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>
                                            <select name="" id="">
                                                <option value="">Select Session &nbsp;&nbsp;&nbsp;</option>
                                                @foreach ($sessionsList as $session)
                                                    <option value="{{ $session['session_name'] }}">
                                                        {{ $session['session_name'] }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select name="" id="">
                                                <option value="">Select Class &nbsp;&nbsp;&nbsp;</option>
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
                                        </td>
                                        <td>
                                            <select name="" id="">
                                                <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                                @foreach ($shiftsList as $shift)
                                                    <option value="{{ $shift['shift_name'] }}">
                                                        {{ $shift['shift_name'] }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select name="" id="">
                                                <option value="">Select Section &nbsp;&nbsp;</option>
                                                @foreach ($sectionsList as $section)
                                                    <option value="{{ $section['section_name'] }}">
                                                        {{ $section['section_name'] }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td><input type="text" name="" id=""></td>
                                        <td><input type="text" name="" id=""></td>
                                        <td><input type="text" name="" id=""></td>
                                        <td><input type="text" name="" id=""></td>
                                        <td><input type="text" name="" id=""></td>
                                        <td><input type="text" name="" id=""></td>
                                        <td><input type="text" name="" id=""></td>
                                        <td><input type="text" name="" id=""></td>

                                        <td>
                                            <select name="" id="">
                                                <option value="">All&nbsp;&nbsp;&nbsp;</option>
                                                <option value="">Yes</option>
                                                <option value="">No</option>
                                            </select>
                                        </td>
                                        <td></td>
                                    </tr>
                                    @foreach ($student_admissionList as $student)
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $student['Session'] }}</td>
                                            <td>{{ $student['Class'] }}</td>
                                            <td>{{ $student['Shift'] }}</td>
                                            <td>{{ $student['Section'] }}</td>
                                            <td>
                                                <img src="assets/img/student.png" class="curentStuImage"
                                                    alt="">
                                                <br><a href="#">{{ $student['NameEnglish'] }}</a>
                                            </td>
                                            <td>{{ $student['StudentId'] }}</td>
                                            <td>13</td>
                                            <td>{{ $student['DeviceSerialMAC'] }}</td>
                                            <td>{{ $student['Session'] }}</td>
                                            <td>{{ $student['RFIDCardNo'] }})</td>
                                            <td>{{ $student['GuardianPhone'] }}</td>
                                            <td>{{ $student['DateOfBirth'] }}</td>
                                            <td>{{ $student['Status'] }}</td>
                                            <td class="link_table">
                                                <a href="#"><i class="fa-solid fa-print"></i></a>&nbsp
                                                <a href="{{ route('student.view', ['id' => $student['id']]) }}"><i
                                                        class="fa-solid fa-eye"></i></a>&nbsp
                                                <a href="{{ route('student.edit', ['id' => $student['id']]) }}"><i
                                                        class="fa-solid fa-pencil"></i></a>&nbsp
                                                <a href="#"><i class="fa-solid fa-trash"></i></a>&nbsp
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
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
