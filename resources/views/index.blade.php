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
                <!-- breadcumb-area -->
                <section class="breadcumb-area card bg-gradient mb-5">
                    <div class="bread-cumb-content card-body d-flex align-items-center">
                        <div class="breadcumb-heading">
                            <h2 class="text-white">Dashboard</h2>
                        </div>
                        <div class="breadcumb-image ml-auto">
                            <img src="assets/img/breadcumb-dashboard.png" alt="">
                        </div>
                    </div>
                </section>
                <!-- End breadcumb-area -->

                <!-- highlight-area start -->
                <div class="row mb-5">
                     <div class="col-lg-3 col-md-6">
                        <div
                            class="single-asset-counting-list-box bg-gradient bg-gradient-purple card border-0 text-center">
                            <div class="card-body">
                                <div class="single-asset-counting-list-image-wrap">
                                    <img src="assets/img/student.png" alt="">
                                </div>
                                <h2 class="text-white mb-0">{{ $student }} <small class="d-block mt-2">Students</small></h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div
                            class="single-asset-counting-list-box bg-gradient bg-gradient-blue card border-0 text-center">
                            <div class="card-body">
                                <div class="single-asset-counting-list-image-wrap">
                                    <img src="assets/img/teacher.png" alt="">
                                </div>
                                <h2 class="text-white mb-0">{{ $teachers }} <small class="d-block mt-2">Teachers</small></h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div
                            class="single-asset-counting-list-box bg-gradient bg-gradient-green card border-0 text-center">
                            <div class="card-body">
                                <div class="single-asset-counting-list-image-wrap">
                                    <img src="assets/img/parent.png" alt="">
                                </div>
                                <h2 class="text-white mb-0">{{ $student }} <small class="d-block mt-2">Parent</small></h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div
                            class="single-asset-counting-list-box bg-gradient bg-gradient-yellow card border-0 text-center">
                            <div class="card-body">
                                <div class="single-asset-counting-list-image-wrap">
                                    <img src="assets/img/staff.png" alt="">
                                </div>
                                <h2 class="text-white mb-0">{{ $staffs }} <small class="d-block mt-2">Staff</small></h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div
                            class="single-asset-counting-list-box bg-gradient bg-gradient-yellow card border-0 text-center">
                            <div class="card-body">
                                <div class="single-asset-counting-list-image-wrap">
                                    <img src="assets/img/staff.png" alt="">
                                </div>
                                <h2 class="text-white mb-0"> {{ $total_sent_sms[0]['count'] }} <small
                                        class="d-block mt-2">Total Send SMS</small></h2>
                            </div>
                        </div>
                    </div>


                    {{--  <div class="col-lg-3 col-md-6">
                        <div
                            class="single-asset-counting-list-box bg-gradient bg-gradient-green card border-0 text-center">
                            <div class="card-body">
                                <div class="single-asset-counting-list-image-wrap">
                                    <img src="assets/img/parent.png" alt="">
                                </div>
                                <h2 class="text-white mb-0">16000 <small class="d-block mt-2">Total Buy SMS</small></h2>
                            </div>
                        </div>
                    </div>
 --}}
                    <div class="col-lg-3 col-md-6">
                        <div
                            class="single-asset-counting-list-box bg-gradient bg-gradient-blue card border-0 text-center">
                            <div class="card-body">
                                <div class="single-asset-counting-list-image-wrap">
                                    <img src="assets/img/teacher.png" alt="">
                                </div>
                                <h2 class="text-white mb-0">{{ $sms_credit }} <span style="font-size: 20px">BDT</span><small class="d-block mt-2">SMS
                                        Balance</small></h2>
                            </div>
                        </div>
                    </div>



                </div>

                <!---- student attendence ----->
                <div class="student mb-4 table-responsive">
                    <h4>
                        <span>
                            <i class="fa-solid fa-user mr-2"></i>Today Student's Attendence({{ date(' d M, Y ') }})
                        </span>
                        <span>
                            <i class="fa-solid fa-arrow-right-long mr-2"></i>See All
                        </span>
                    </h4>
                    <table class="table table-bordered mt-3 text-center">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Roll</th>
                                <th scope="col">Class</th>
                                <th scope="col">Name</th>
                                <th scope="col" style="color: blue;">In</th>
                                <th scope="col" style="color: red;">Out</th>
                                <th scope="col">Punch In Zone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <th scope="row">{{ $student->student_id }}</th>
                                    <td>{{ $student->roll }}</td>
                                    <td>{{ $student->class }}</td>
                                    <td>{{ $student->student_name }}</td>
                                    <td>{{ $student->time_in }}</td>
                                    <td>{{ $student->time_out }}</td>
                                    <td>{{ $student->middle_punches }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!---- /student attendence ----->

                <!---- staff attendence ----->
                <div class="student mb-4 table-responsive">
                    <h4>
                        <span>
                            <i class="fa-solid fa-person-dress mr-2"></i></i>Today Staff's
                            Attendence({{ date(' d M, Y ') }})
                        </span>
                        <span><i class="fa-solid fa-arrow-right-long mr-2"></i> See All</span>
                    </h4>
                    <table class="table table-bordered mt-3 text-center">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Name</th>
                                <th scope="col" style="color: blue;">In</th>
                                <th scope="col" style="color: red;">Out</th>
                                <th scope="col">Punch In Zone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empolyees as $empolyee)
                                <tr>
                                    <th scope="row">{{ $empolyee->empolyee_id }}</th>
                                    <td>{{ $empolyee->designation }}</td>
                                    <td>{{ $empolyee->employee_name }}</td>
                                    <td>{{ $empolyee->in_time }}</td>
                                    <td>{{ $empolyee->out_time }}</td>
                                    <td>{{ $empolyee->punch_zone }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!---- /staff attendence ----->

                <!---- student admission ----->
                <div class="student mb-4 table-responsive">
                    <h4>
                        <span>
                            <i class="fa-solid fa-earth-africa mr-2"></i>Student admission pending
                        </span>
                    </h4>
                    <table class="table table-bordered mt-3 text-center">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Session</th>
                                <th scope="col">Class</th>
                                <th scope="col">ID</th>
                                {{-- <th scope="col">Roll</th> --}}
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student_admissionList as $student)
                                <tr>
                                    <th scope="row">{{ $student['Session'] }}</th>
                                    <td>{{ $student['Class'] }}</td>
                                    <td>{{ $student['StudentId'] }}</td>
                                    {{-- <td>{{ $student['session'] }}</td> --}}
                                    <td>
                                        {{-- <img src="{{ asset('assets/img/student.png') }}" class="pending_img" alt=""> --}}
                                        <img src="{{ asset($student['Photo']) }}" class="pending_img"
                                            alt="Student Image">
                                        <span>{{ $student['NameEnglish'] }}</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('process.student.view', ['id' => $student['id']]) }}"><i
                                                class="fa-solid fa-pen-to-square mr-2"></i>Process</a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!---- /student admisson ----->
            </div>

        </div>
    </main>

    @include('layouts.inc.footer')

    <script>
        $('#example').tooltip(options);
    </script>
</body>

</html>
