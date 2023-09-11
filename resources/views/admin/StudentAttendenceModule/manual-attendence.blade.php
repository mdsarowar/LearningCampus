<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Learning Campus | General Routine</title>
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
                            <h2 class="text-white mb-0">Student Manual Attendence</h2>
                        </header>

                        <div class="academic_info">
                            <form action="{{ route('manual.attendence.search') }}" method="POST"
                                id="attendanceSearchForm">
                                @csrf
                                <div class="container">

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="date">Day <span class="text-danger">*</span></label>
                                            <input type="date" name="date" id="date">
                                        </div>

                                        <div class="col-6">
                                            <label for="class">Class <span class="text-danger">*</span></label>


                                            <select name="class" id="class">

                                                <option value="">Select Class</option>

                                                <option value="Bangla Medium" class="bold_text">Bangla Medium</option>
                                                <option value="Play">Play</option>
                                                <option value="Nursary">Nursary</option>
                                                <option value="KG">KG</option>
                                                <option value="One">One</option>
                                                <option value="Two">Two</option>
                                                <option value="Three">Three</option>
                                                <option value="Four">Four</option>
                                                <option value="Five">Five</option>
                                                <option value="Six">Six</option>
                                                <option value="Seven">Seven</option>
                                                <option value="Eight">Eight</option>
                                                <option value="Nine">Nine</option>
                                                <option value="Ten">Ten</option>
                                                <option value="Eleven">Eleven</option>
                                                <option value="Tweleve">Tweleve</option>
                                                <option value="English Medium" class="bold_text">English Medium</option>
                                                <option value="PlayEn">Play</option>
                                                <option value="Nursary">Nursary</option>
                                                <option value="KGEn">KG</option>
                                                <option value="OneEn">One</option>
                                                <option value="TwoEn">Two</option>
                                                <option value="ThreeEn">Three</option>
                                                <option value="FourEn">Four</option>
                                                <option value="FiveEn">Five</option>
                                                <option value="SixEn">Six</option>
                                                <option value="SevenEn">Seven</option>
                                                <option value="EightEn">Eight</option>
                                                <option value="NineEn">Nine</option>
                                                <option value="NineEn">Ten</option>
                                                <option value="ElevenEn">Eleven</option>
                                                <option value="TweleveEn">Tweleve</option>

                                            </select>



                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <label for="shift">Shift <span class="text-danger">*</span></label>
                                            <select name="shift" id="shift">
                                                <option value="">Select Shift</option>

                                                <option value="Morning">Morning</option>
                                                <option value="Day">Day</option>

                                            </select>
                                        </div>

                                        <div class="col-6">
                                            <label for="section">Section <span class="text-danger">*</span></label>
                                            <select name="section" id="section">
                                                <option value="">Select Section</option>

                                                <option value="A">A</option>
                                                <option value="B">B</option>

                                            </select>
                                        </div>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-6">
                                            <button type="submit" id="searchAttendance"
                                                class="btn btn-primary">Submit</button>
                                        </div>

                                    </div>

                                </div>
                            </form>
                            <div class="attendenceTable table-responsive">

                                <p class="text-center text-success">{{ Session::get('message') }}</p>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr style="background-color:rgb(226, 226, 226);">
                                            <th scope="col">SL</th>
                                            <th scope="col">Student ID</th>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Roll</th>
                                            <th scope="col">Gurdian's Name</th>
                                            <th scope="col">Gurdian's Mobile</th>
                                            <th scope="col">
                                                <div class="sms_div">
                                                    <a href="{{ route('manual.attendence.status.all') }}">
                                                        <label class="switch" for="">
                                                            <input type="checkbox" id="" />
                                                            <div class="slider round"></div>
                                                        </label>
                                                    </a>
                                                    <h6 class="checkbox_txt">All Absent</h6>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="attendanceResults">

                                        @foreach ($students as $student)
                                            <tr>

                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $student->student_id }}</td>
                                                <td>
                                                    <img src="assets/img/student.png" class="student_img"
                                                        alt="">
                                                    <span>{{ $student->student_name }}</span>
                                                </td>
                                                <td>{{ $student->roll }}</td>
                                                <td>{{ $student->guardian_name }}</td>
                                                <td>{{ $student->guardian_mobil }}</td>
                                                <td>
                                                    @if ($student->absent_status == 1)
                                                        <div class="sms_div">
                                                            <a
                                                                href="{{ route('manual.attendence.status', ['id' => $student->id]) }} ">
                                                                <label class="switch" for="checkbox">
                                                                    <input type="checkbox" id="" />
                                                                    <div class="slider round"></div>
                                                                </label>
                                                        </div>
                                                    @else
                                                        <div class="sms_div" class="bg-gradient-green">
                                                            <a
                                                                href="{{ route('manual.attendence.status', ['id' => $student->id]) }} ">
                                                                <label class="switch" for="checkbox">
                                                                    <input type="checkbox" id="" />
                                                                    <div class="slider round"></div>
                                                                </label>
                                                        </div>
                                                    @endif
                                                    </a>
                                                    <h6 class="checkbox_txt">
                                                        {{ $student->absent_status == 1 ? 'Present' : 'Absent' }}
                                                    </h6>
                            </div>
                            </td>


                            </tr>
                            @endforeach

                            </tbody>
                            </table>

                        </div>

                    </div>


            </div>
            </section>

        </div>

    </main>
    @include('layouts.inc.footer')
</body>

</html>
