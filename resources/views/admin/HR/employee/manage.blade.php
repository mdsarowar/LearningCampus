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
                        <h2 class="text-white mb-0">
                            Our Employees
                        </h2>
                    </header>
                    @include('layouts.inc.toaster')

                    <div class="card-body table-responsive" id="institue">
                        <form action="" class="es-form es-add-form">

                            <a href="{{route('add_employee')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                            <div class="studetn_count">
                                <h3>
                                    <p><i class="fa-solid fa-person"></i> Total Male : {{$male}}</p>
                                    <p><i class="fa-solid fa-person-dress"></i> Total Female : {{$female}}</p>
                                </h3>
                                <p class="text-right">Showing 1-1 of 1 item</p>
                            </div>
                            <!---- student table  ----->
                            <table class="table table-bordered mt-3 text-center current_student_table">
                                <thead class="table-bordered">
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col" >Rank</th>
                                    <th scope="col">Employee Type</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Working Shift</th>
                                    <th scope="col">Image</th>
                                    <th scope="col" >Name</th>
                                    <th scope="col" >Employee ID</th>
                                    <th scope="col" >Device Serial / MAC</th>
                                    <th scope="col" >Tracking ID</th>
                                    <th scope="col">RFID Card No</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Date of Birth</th>
{{--                                    <th scope="col">Status</th>--}}
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td>

                                    </td>
                                    <td>
                                        <select name="" id="">
                                            <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                            <option value="">Casual</option>
                                            <option value="">Contactual</option>
                                            <option value="">Half-time</option>
                                            <option value="">Full-time</option>
                                            <option value="">Shiftworker</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="" id="">
                                            <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                            <option value="">Teachers</option>
                                            <option value="">Director</option>
                                            <option value="">CEO</option>
                                            <option value="">Principal</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="" id="">
                                            <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                            <option value="">Casual</option>
                                            <option value="">Contactual</option>
                                            <option value="">Half-time</option>
                                            <option value="">Full-time</option>
                                            <option value="">Shiftworker</option>
                                        </select>
                                    </td>

                                    <td>
                                        <select name="" id="">
                                            <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                            <option value="">Grade 1</option>
                                            <option value="">Grade 2</option>
                                            <option value="">Grade 3</option>
                                            <option value="">Grade 4</option>
                                            <option value="">Grade 5</option>
                                        </select>
                                    </td>

                                    <td><input type="text" name="" id=""></td>
                                    <td><input type="text" name="" id=""></td>
                                    <td><input type="text" name="" id=""></td>
                                    <td><input type="text" name="" id=""></td>
                                    <td><input type="text" name="" id=""></td>
                                    <td><input type="text" name="" id=""></td>
                                    <td><input type="text" name="" id=""></td>

                                    <td>
                                        <select name="" id="">
                                            <option value="">Active &nbsp;&nbsp;&nbsp;</option>
                                            <option value="">Inactive</option>
                                        </select>
                                    </td>
                                    <td></td>
                                </tr>
                                @foreach($employees as $employee)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$employee->rank}}</td>
                                        <td>{{$employee->types->name}}</td>
                                        <td>{{$employee->designations->title}}</td>
                                        <td>{{$employee->Workingshifts->name}}</td>
{{--                                        <td>{{$employee->grade}}</td>--}}
                                        <td><img src="{{asset($employee->employee_personals->photo)}}" style="height: 100px;width: 100px" alt=""></td>
                                        <td>{{$employee->employee_personals->name}}</td>
                                        <td>{{$employee->employee_idnumber}}</td>
                                        <td>{{$employee->divice_serial}}</td>
                                        <td>{{$employee->tracking_id}}</td>
                                        <td>{{$employee->rfid_card}}</td>
                                        <td>{{$employee->employee_personals->mobile}}</td>
                                        <td>{{$employee->employee_personals->dob}}</td>
                                        <td  class="link_table">
{{--                                            <a href="#"><i class="fa-solid fa-print"></i></a>&nbsp--}}
                                            <a href="{{route('view_employee',$employee->id)}}"><i class="fa-solid fa-eye"></i></a>&nbsp
                                            <a href="{{route('edit_employee',$employee->id)}}"><i class="fa-solid fa-pencil"></i></a>&nbsp
                                            <a href="{{route('delete_employee',$employee->id)}}"><i class="fa-solid fa-trash"></i></a>&nbsp
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                            <!---- /student table ----->
                        </form>
                    </div>

                    <div class="mt-5 ml-4">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </section>

        </div>
    </div>
</main>

<!-- Global Vendor -->


<script>
    function fillRoutineDay(day) {
        var routineDayInput = document.getElementById("routine_day");
        var selectedClass = document.querySelector('.class');
        var selectedClassShift = document.querySelector('.class_shift');
        var selectedSection = document.querySelector('.section');

        // Assuming you want to set the values of the hidden inputs
        document.getElementById("class").value = selectedClass.value;
        document.getElementById("class_shift").value = selectedClassShift.value;
        document.getElementById("section").value = selectedSection.value;

        routineDayInput.value = day;
    }
</script>

@include('layouts.inc.footer');

</body>
