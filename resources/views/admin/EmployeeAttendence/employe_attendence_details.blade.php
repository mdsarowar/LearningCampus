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
                    <h2 class="text-white mb-0">Employee Attendence Details</h2>
                </header>
                
<div class="academic_info student_search">


<div class="container">
    <form action="{{route("employe.attendence.details.search")}}" method="post">
        @csrf
    <div class="row mt-3 mb-4">
        
        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Type <span class="text-danger">*</span></label>
            <select name="employeetype" id="">
                <option value="">Select Employee Type</option>
                @foreach ($employeetypesList as $employeetype)
                    
                <option value="{{$employeetype["type"]}}">{{$employeetype["type"]}}</option>
                
                @endforeach
            </select>
        </div><br><br>

        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Working Shift <span class="text-danger">*</span></label>
            <select name="workingshift" id="">
                <option value="">Select Working Shift</option>
                @foreach ($workingshiftsList as $workingshift)
                    
                <option value="{{$workingshift["name"]}}">{{$workingshift["name"]}}</option>
                
                @endforeach
            </select>
        </div><br><br>

        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Employee <span class="text-danger">*</span></label>
            <select name="employee_name" id="">
                <option value="">Select Employee</option>
                @foreach ($employee_personalsList as $employee_personal)
                    
                <option value="{{$employee_personal["name"]."/".$employee_personal["id"]}}">{{$employee_personal["name"]."/".$employee_personal["id"]}}</option>
                
                @endforeach
            </select>
        </div><br><br>

    </div>

    <div class="row mt-3 mb-4">
        
        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Month <span class="text-danger">*</span></label>
            <select name="month" id="">
                <option value="">Select Month</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
        </div><br><br>

        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Year <span class="text-danger">*</span></label>
            <select name="year" id="">
                <option value="">Select Year</option>
                @foreach ($sessionList as $session)
                <option value="{{$session['session_name']}}">{{$session['session_name']}}</option>
            @endforeach
            </select>
        </div><br><br>

    </div>

</div>

</div>


<p class="text-center">
    <button type="submit" class="btn btn-primary px-5">Submit</button>
</p>  
 
</form>
<div class="d-flex justify-content-between">
    <a href="{{route("employee.details.attendence.download")}}" class="print_btn"><i class="fa-solid fa-download"></i>  Download</a>
</div>
<div class="attendence_summary">
    <div class="attendence_summary_top text-center">
        <h1>Learning Campus (Main Branch)</h1>
        <a href="#">www.LearningCampus.com</a>
        <p>Mirpur-3, Dhaka</p>
        <h3>Attendance Details for the Month of April 2022</h3>
        <p>ID : 20200001, Afzal (Bangla Lecturer)</p>
        <h3>
            <span class="text-primary">Weekend : 3</span>,
            <span class="text-info">Holidays : 0</span>,
            <span class="text-danger">Leave : 18</span>,
            <span class="text-primary">Attend : 0</span>,
            <span class="text-secondary">Absent : 0</span>,
            <span class="text-primary">Green : 0</span>,
            <span class="text-warning"> Orange : 0</span>,
            <span class="text-danger"> Red : 0</span>
        </h3>
    </div>

    <div class="attendence_summary_mid table-responsive">
        
           <!---- student table  ----->
           <table class="table table-bordered mt-3 text-center table-striped">
            <thead class="table-bordered">
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Date</th>
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
                    <td>{{$employee->attendence_date}}</td>
                     
                        @if ($employee->attendences_status == 1 )
                            <td style="color: green; font-size: 50px;" > <i class="fa-solid fa-check"></i> </td>
                        @else
                        <td style="color: rgb(255, 1, 1); font-size: 50px;" >  <i class="fa-solid fa-xmark"></i> </td>
                        @endif
                    
                     <td></td>
                     <td></td>
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