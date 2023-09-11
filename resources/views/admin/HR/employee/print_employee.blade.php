

<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->


<head>
    @include('layouts.inc.head')
</head>
<!-- End Head -->

<body>

<!----- preloader ----->
{{--@include('layouts.inc.preloader')--}}
<!----- /preloader ----->




<!-- Header (Topbar) -->
<header class="u-header">
{{--    @include('layouts.inc.header')--}}
</header>
<!-- End Header (Topbar) -->
<main class="u-main" role="main">
    <!-- Sidebar -->
{{--    <aside id="sidebar" class="u-sidebar">--}}
{{--        @include('layouts.inc.sidebar')--}}
{{--    </aside>--}}
    <!-- End Sidebar -->


    <div class="u-content">
        <div class="u-body">

            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">
                            Employee Details
                        </h2>
                    </header>

                    <div class="card-body table-responsive" id="institue">
                        <form action="" class="es-form es-add-form">
{{--                            <a href="{{route('add_employee')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>--}}
{{--                            <a href="{{route('edit_employee',$employee->id)}}" class="btn btn-primary"><i class="fa-solid fa-pen"></i></a>--}}
{{--                            <a href="{{route('print_employee',$employee->id)}}"  class="btn btn-primary"><i class="fa-solid fa-print"></i></a>--}}

                            <div class="studentDetTable">

                                <div class="student_details">

                                    {{--                                    <img src="{{$employee->employee_personals->photo}}" class="copyright_em_view"  alt="">--}}

                                    <div class="stuDetTop">
                                        <div>
                                            <h3>{{$employee->employee_personals->name}}</h3>
                                            <p>Mobile : {{$employee->employee_personals->mobile}}</p>
                                            <p>Email : {{$employee->employee_personals->email}}</p>
                                        </div>
                                        <div>
                                            <img src="{{asset($employee->employee_personals->photo)}}" alt="">
                                        </div>
                                    </div>

                                    <div class="stuDetMid">
                                        <div class="table-responsive">
                                            <h2>Professional Information</h2>

                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Branch</th>
                                                    <th scope="col">Learning Campus (Main Branch)</th>
                                                    <th scope="col">Employee Type</th>
                                                    <th scope="col">Full Time</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">Designation</th>
                                                    <td>{{$employee->designations->title}}</td>
                                                    <th>Working Shift</th>
                                                    <td>{{$employee->Workingshifts->name}}</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Grade</th>
                                                    <td>{{$employee->grade}}</td>
                                                    <th>Joining Date</th>
                                                    <td>{{$employee->joining_date}}</td>
                                                </tr>
                                                {{--                                                <tr>--}}
                                                {{--                                                    <th scope="row">Basic Salary</th>--}}
                                                {{--                                                    <td>16000</td>--}}
                                                {{--                                                    <td>Device ID</td>--}}
                                                {{--                                                    <td>A8LN192260201</td>--}}
                                                {{--                                                </tr>--}}
                                                <tr>
                                                    <th scope="row">Tracking ID</th>
                                                    <td>{{$employee->traking_id}}</td>
                                                    <th>Rfid No</th>
                                                    <td>{{$employee->rfid_card}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Bank Account</th>
                                                    <td>{{$employee->bank_account}}</td>
                                                    <td>Srl. No </td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Prev. Institute </th>
                                                    <td>{{$employee->pre_inst}}</td>
                                                    <td>Pre. Designation</td>
                                                    <td>{{$employee->pre_des}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="table-responsive">
                                            <h2>Contact Information</h2>

                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Mobile</th>
                                                    <th scope="col">{{$employee->employee_personals->mobile}}</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">{{$employee->employee_personals->email}}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">Present Address</th>
                                                    <td>{{$employee->employee_personals->present_add}}</td>
                                                    <th>Permanant Address</th>
                                                    <td>{{$employee->employee_personals->permanant_add}}</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">FB URL</th>
                                                    <td colspan="3">{{$employee->employee_personals->facebook}}</td>

                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="table-responsive">
                                            <h2>Personal Information</h2>

                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <th scope="row">Name</th>
                                                    <td>{{$employee->employee_personals->name}}</td>
                                                    <td>ID</td>
                                                    <td>{{$employee->employee_personals->national_id}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Father's Name</th>
                                                    <td>{{$employee->employee_personals->father_name}}</td>
                                                    <td>Mother's Name</td>
                                                    <td>{{$employee->employee_personals->mother_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Date of Birth</th>
                                                    <td>{{$employee->employee_personals->dob}}</td>
                                                    <td>Blood Group</td>
                                                    <td>{{$employee->employee_personals->blood_group}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Maritial Status</th>
                                                    <td>{{$employee->employee_personals->matarial_status}}</td>
                                                    <td>Religion</td>
                                                    <td>{{$employee->employee_personals->religion}}</td>
                                                </tr>
                                                {{--                                                <tr>--}}
                                                {{--                                                    <th scope="row">Spouse Name</th>--}}
                                                {{--                                                    <td>Hafsa</td>--}}
                                                {{--                                                    <td>No of Child</td>--}}
                                                {{--                                                    <td>4</td>--}}
                                                {{--                                                </tr>--}}
                                                <tr>
                                                    <th scope="row">National ID</th>
                                                    <td>{{$employee->employee_personals->national_id}}</td>

                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>


                                        <div class="table-responsive">
                                            <h2>Educational Qualification</h2>

                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    {{--                                                    <th scope="row">Sl. No.</th>--}}
                                                    <td>Institute Name</td>
                                                    <td>Name of The Degree</td>
                                                    <td>Country</td>
                                                </tr>
                                                <tr>
                                                    {{--                                                    <th scope="row">1</th>--}}
                                                    <td>{{$education->noi}}</td>
                                                    <td>{{$education->nod}}</td>
                                                    <td>{{$education->country}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>



<!-- Global Vendor -->



@include('layouts.inc.footer');

</body>
