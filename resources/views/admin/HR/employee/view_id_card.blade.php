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

    <div class="studentId">
        <div class="idBox employee_idBox">

            <div class="leftBox">
                <h4 class="text-center"><span>Identy Card</span> </h4>
                <div class="leftBoxTop">
                    <img src="{{asset('/')}}assets/Logo_Icon/logo.png" alt="">
{{--                    <img src="{{asset($emp_photo->photo)}}" alt="">--}}
                </div>
                <div class="text-center">
                    <h3>{{$employee->employee_personals->name}}</h3>
                    <p>{{$employee->designations->title}}</p>
{{--                    <p>Id : 012456789 </p>--}}
                    <p>{{$employee->employee_personals->blood_group}}</p>
                    <h5>Learning Campus Main Branch</h5>
                </div>
                <h6 class="text-end"><span>Signature of Principal</span></h6>
            </div>

            <div class="rightBox">
                <h3>Personal Information</h3>
                <h4>Contact : {{$employee->employee_personals->mobile}}</h4>
                <h5>Permanant Address : {{$employee->employee_personals->permanant_add}}</h5>
                <img src="{{asset($employee->employee_personals->photo)}}" alt="" style="width: 100px;height: 100px">
                <h5>In case of lost please return it to</h5>
                <h3>Learning Campus Main Branch</h3>
                <p>Mirpur, Dhaka</p>
                <p>Phone : 0123456789</p>
                <p>Web : learningcampus.com</p>
            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    @include('layouts.inc.footer');

</body>
