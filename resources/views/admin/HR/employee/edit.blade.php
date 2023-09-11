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
        <form action="{{route('update_employee',$employee->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="u-body">
                <section class="es-form-area">
                    <div class="card">
                        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                            <h2 class="text-white mb-0">Add Employees</h2>
                        </header>

                        <div class="academic_info">
                            <h5>
                                <i class="fa-solid fa-circle-info"></i> Professional Information
                            </h5>

                            <div class="container">

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Type <span class="text-danger">*</span></label>
                                        <select name="type" id="">
                                            @foreach($types as $type)
                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                            @endforeach

                                            {{--                                            <option value="Staffs">Staffs</option>--}}
                                            {{--                                            <option value="Board Of Directors">Board Of Directors</option>--}}
                                            {{--                                            <option value="Academic Committee">Academic Committee</option>--}}
                                            {{--                                <option value="Shiftworker">Shiftworker</option>--}}
                                        </select>

                                    </div>

                                    <div class="col-6">
                                        <label for="">Device Serial / MAC</label>
                                        <input type="text" name="divice_serial" id="">
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Employee Type <span class="text-danger">*</span></label>
                                        <select name="employeetype_id" id="">
                                            <option value="">Select Employee Type</option>
                                            <option value="1">All</option>
                                            <option value="2">Casual</option>
                                            <option value="3">Contractual</option>
                                            <option value="4">Full-time</option>
                                            <option value="5">Half-time</option>
                                            <option value="6">Part-time</option>
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <label for="">Tracking ID </label>
                                        <input type="text" name="tracking_id" id="">
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Desgination <span>*</span></label>
                                        <select name="designation_id" id="">
                                            @foreach($designations as $designation)
                                                <option value="{{$designation->id}}">{{$designation->title}}</option>
                                            @endforeach
                                            {{--                                            <option value="0">Select Desgination</option>--}}
                                            {{--                                            --}}
                                            {{--                                            <option value="2">Member</option>--}}
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <label for="">RFID Card No</label>
                                        <input type="text" name="rfid_card">
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Working Shift</label>
                                        <select name="workingshift_id" id="">
                                            <option value="">Select Shift Name</option>
                                            @foreach($workingshifts as $workingshift)
                                                <option value="{{$workingshift->id}}">{{$workingshift->name}}</option>
                                            @endforeach
                                            {{--                                            <option value="2">Contractual</option>--}}
                                            {{--                                            <option value="3">Full-time</option>--}}
                                            {{--                                            <option value="">Half-time</option>--}}
                                            {{--                                            <option value="">Part-time</option>--}}
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <label for="">Joining Date </label>
                                        <input type="date" name="joining_date">
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Grade <span>*</span> </label>
                                        <select name="grade" id="">
                                            <option value="">Select Grade</option>
                                            <option value="1">Grade.1(18000)</option>
                                            <option value="2">Grade.1(18000)</option>
                                            <option value="3">Grade.1(18000)</option>
                                            <option value="">Grade.1(18000)</option>
                                            <option value="">Grade.1(18000)</option>
                                            <option value="">Grade.1(18000)</option>
                                        </select>
                                    </div>

                                    <div class="col-6 toggle-group">
                                        <label for="">Bank Account No</label>
                                        <input type="text" name="bank_account">
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Rank <span>*</span> </label>
                                        <input type="text" name="rank">
                                    </div>

                                    <div class="col-6 toggle-group">
                                        <label for="">Previous Institute</label>
                                        <input type="text" name="pre_inst">
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Employee ID <span>*</span> </label>
                                        <input type="text" name="employee_idnumber">
                                    </div>

                                    <div class="col-6 toggle-group">
                                        <label for="">Previous Designation</label>
                                        <input type="text" name="pre_des">
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
                                        <label for="">Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" id="">
                                    </div>

                                    <div class="col-6">
                                        <label for="">Father's Name <span class="text-danger">*</span></label>
                                        <input type="text" name="father_name" id="">
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Mobile <span class="text-danger">*</span></label>
                                        <input type="text" name="mobile" id="">
                                    </div>

                                    <div class="col-6">
                                        <label for="">Mother's Name <span class="text-danger">*</span></label>
                                        <input type="text" name="mother_name" id="">
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Email</label>
                                        <input type="text" name="email">
                                    </div>

                                    <div class="col-6">
                                        <label for="">Matarial Status<span class="text-danger">*</span></label>
                                        <select name="matarial_status" id="">
                                            <option value="Married">Married</option>
                                            <option value="Unmarried">Unmarried</option>
                                        </select>
                                    </div>

                                </div>



                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Date Of Birth</label>
                                        <input type="date" name="dob">
                                    </div>

                                    <div class="col-6">
                                        <label for="">Religion <span class="text-danger">*</span></label>
                                        <select name="religion" id="">
                                            <option value="Islam">Islam</option>
                                            <option value="Hindu">Hindu</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">National Id</label>
                                        <input type="text" name="national_id">
                                    </div>

                                    <div class="col-6 toggle-group">
                                        <label for="">Blood Group</label>
                                        <select name="blood_group" id="">
                                            <option value="a+">A+</option>
                                            <option value="o+">O+</option>
                                            <option value="a-">A-</option>
                                            <option value="b-">B-</option>
                                            <option value="AB">AB</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Photos</label>
                                        <input type="file" id="file" name="photo">
                                        <label for="file" id="fileCustom"  class="add_messageFile"><i class="fa-solid fa-camera"></i> Choose Photo</label><br>
                                        <span>Image Width = 262px and Height = 300px</span>
                                    </div>

                                    <div class="col-6 toggle-group">
                                        <label for="">Gender</label>
                                        <select name="gender" id="">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Facebook Link</label>
                                        <input type="tetx" name="facebook">
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="academic_info">
                            <h5>
                                <i class="fa-solid fa-circle-info"></i>Last Educational Qualification
                            </h5>

                            <div class="container" id="form">

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Name of the Institue</label>
                                        <input type="text" name="noi" id="">
                                    </div>

                                    <div class="col-6">
                                        <label for="">Name of the Degree</label>
                                        <input type="text" name="nod" id="">
                                    </div>

                                    <div class="col-6 mt-2">
                                        <label for="">Country Name</label>
                                        <input type="text" name="country" id="">
                                    </div>



                                </div>


                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Major Subject </label>
                                        <input type="text" name="major_sub">
                                    </div>

                                    <div class="col-6">
                                        <label for="">Extra Qualification</label>
                                        <input type="text" name="extqual">
                                    </div>

                                </div>


                            </div>
                            {{--                            <div class="col-6 mt-2">--}}
                            {{--                                <a  class="add_qualification_field" id="add">--}}
                            {{--                                    <i class="fa-solid fa-plus"></i>--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}

                        </div>


                        <div class="academic_info">
                            <h5>
                                <i class="fa-solid fa-circle-info"></i> Contact Information
                            </h5>

                            <div class="container">

                                <div class="row mt-3 mb-4">

                                    <div class="col-6">
                                        <label for="">Present Address <span class="text-danger">*</span></label>
                                        {{--                                        <textarea name="present_add" id="" cols="30" rows="10"></textarea>--}}
                                        <textarea class="ckeditor" id="editor1" name="present_add"></textarea>
                                    </div>

                                    <div class="col-6">
                                        <label for="">Permanant Address <span class="text-danger">*</span></label>
                                        {{--                                        <textarea name="permanant_add" id="" cols="30" rows="10"></textarea>--}}
                                        <textarea class="ckeditor" id="editor2" name="permanant_add"></textarea>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <p class="text-center">
                            <button type="submit"><a class="btn btn-primary px-5">Create</a></button>
                            <a href="#" class="btn text-white px-5" style="background-color: red;">Cancel</a>
                        </p>

                    </div>
                </section>

            </div>
        </form>
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
<script>
    console.log('hello world');
    var i=0;
    // var add=document.getElementById('add')
    // add.click(function (){
    //     console.log('hello');
    // })
    $('#add').click(function (){
        ++i;
        console.log('good');
        $('#form').append(
            `<!--<div class="container" id="form">-->

                            <div class="row mt-3 mb-4">

                                <div class="col-6">
                                    <label for="">Name of the Institue</label>
                                    <input type="text" name="inputs[`+i+`][noi]" id="">
                                </div>

                                <div class="col-6">
                                    <label for="">Name of the Degree</label>
                                    <input type="text" name="inputs[`+i+`][nod]" id="">
                                </div>

                                <div class="col-6 mt-2">
                                    <label for="">Country Name</label>
                                    <input type="text" name="inputs[`+i+`][country]" id="">
                                </div>



                            </div>


                            <div class="row mt-3 mb-4">

                                <div class="col-6">
                                    <label for="">Major Subject </label>
                                    <input type="text" name="inputs[`+i+`][major_sub]">
                                </div>

                                <div class="col-6">
                                    <label for="">Extra Qualification</label>
                                    <input type="text" name="inputs[`+i+`][extqual]">
                                </div>

                            </div>


                         </div>
                        `
        );

    })
</script>

</body>
