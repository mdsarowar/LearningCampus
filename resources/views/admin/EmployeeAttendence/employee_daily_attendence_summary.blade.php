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
                    <h2 class="text-white mb-0">Employee Attendence Summary Daily</h2>
                </header>
                
<div class="academic_info student_search">

<div class="container">
    <form action="{{route("employee.daily.attendence.search")}}" method="post">
        @csrf
    <div class="row mt-3 mb-4">
        
        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Type <span class="text-danger">*</span></label>
            <select name="employeetype" id="">
                <option value="">All</option> 
                @foreach ($employeetypesList as $employeetype)
                    
                <option value="{{$employeetype["type"]}}">{{$employeetype["type"]}}</option>
                
                @endforeach
            </select>
        </div><br><br>

        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Shift <span class="text-danger">*</span></label>
            <select name="workingshift" id="">
                <option value="">Select Employee Shift</option>
                @foreach ($workingshiftsList as $workingshift)
                    
                <option value="{{$workingshift["name"]}}">{{$workingshift["name"]}}</option>
                
                @endforeach
            </select>
        </div><br><br>

        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Date <span class="text-danger">*</span></label>
            <input type="date" name="date" id="">
        </div><br><br>

    </div>

</div>

</div>

<p class="text-center">
    <button type="submit" class="btn btn-primary px-5">Submit</button>
</p>    
</form>
<div class="container">
 <div class="d-flex justify-content-between mt-5">
    <a href="{{route("employee.daily.attendence.download")}}" class="print_btn"><i class="fa-solid fa-download"></i>  Download</a>
</div>
</div>

<div class="attendence_summary">



    <div class="attendence_summary_top text-center">
        <h1>Learning Campus (Main Branch)</h1>
        <a href="#">www.LearningCampus.com</a>
        <p>Mirpur-3, Dhaka</p>
        <h3>Daily Attendance Summary (March 31 2022)</h3>
    </div>

    <div class="attendence_summary_mid table-responsive">
           <!---- student table  ----->
           <table class="table table-bordered mt-3 text-center">
            <thead class="table-bordered">
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Name/ID</th>
                    <th scope="col">Designation</th>
                    <th scope="col"><span style="color: green;">Attend</span>  / <span style="color: red;">Absent</span></th>
                    <th scope="col"><span style="color: green;">IN</span></th>
                    <th scope="col"><span style="color: red;">OUT</span></th>
                    <th scope="col">Middle Punches</th>
                    <th scope="col" ><span style="background-color: green;color: white;padding: 8px 14px;font-weight: 600;">G</span></th>
                    <th scope="col"><span style="background-color: yellow;color: white;padding: 8px 14px;font-weight: 600;">Y</span></th>
                    <th scope="col"><span style="background-color: red;color: white;padding: 8px 14px;font-weight: 600;">R</span></th>
                </tr>
            </thead>
            <tbody>
                
                 
                 @foreach ($employees as $employee)
                     
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="assets/img/student.png" class="curentStuImage" alt="">
                        <br><a href="#">{{$employee->employee_name}}</a>
                     </td>
                     <td>{{$employee->designation}}</td>
                     @if ($employee->attendences_status == 1 )
                            <td style="color: green; font-size: 50px;" > <i class="fa-solid fa-check"></i></td>
                        @else
                        <td style="color: rgb(255, 1, 1); font-size: 50px;" >  <i class="fa-solid fa-xmark"></i> </td>
                        @endif
                     <td>{{$employee->in_time}}</td>
                     <td>{{$employee->out_time}}</td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                 </tr>
                 
                 @endforeach
                 


            </tbody>
        </table>
    <!---- /student table ----->
    </div>
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