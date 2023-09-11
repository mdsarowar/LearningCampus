<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    @include('layouts.inc.head')
</head>
<!-- End Head -->
<body>
    <style>
        .page-break {
            page-break-after: always;
        }
        </style>
        
    <style type="text/css">
        @media print {
                #routineData {
                    -webkit-print-color-adjust: exact !important;
                    color-adjust: exact !important;
                    margin: 0 !important;
                }
    
                .card {
                    position: absolute !important;
                    transform: translate(-20%, 0) !important;
                    width: 100% !important;
                    margin: 0 auto !important;
                    box-shadow: 0 !important;
                    border: 0 !important;
                }
    
                .search_result {
                    border: 0 !important;
                }
    
                .no-print {
                    display: none !important;
                }
        }
    
    
       </style> 
<!----- preloader ----->
@include('layouts.inc.preloader')
<!----- /preloader ----->



<!-- Header (Topbar) -->
    <header class="u-header page-break">
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
                    <h2 class="text-white mb-0">Employee Attendence Summary Monthly</h2>
                </header>
                
<div class="academic_info student_search">

<div class="container page-break">
    <form action="{{route("employee.monthly.attendence.search")}}" method="post">
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

    </div>

    

</div>

</div>

<p class="text-center">
    <button type="submit" class="btn btn-primary px-5">Submit</button>
</p>    
</form>
<div class="container">
    <div class="d-flex justify-content-between mt-5">
        <a href="{{route("employee.monthly.attendence.download")}}" class="print_btn" ><i class="fa-solid fa-print"></i>Download</a>
        <a href="{{route("employee.monthly.attendence.download")}}" class="print_btn" ><i class="fa-solid fa-print"></i>Download</a>
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
                    <th scope="col">Weekend</th>
                    <th scope="col"><span style="color: red;">Holidays</span></th>
                    <th scope="col"><span style="color: green;">Leave</span></th>
                    <th scope="col"><span style="color: green;">Attend</span></th>
                    <th scope="col"><span style="color: red;">Absent</span></th>
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
                     <td> 1 </td>
                     <td>1</td>
                     <td>0</td>
                     <td>3</td>
                     <td>3</td>
                     <td>0</td>
                     <td>1</td>
                     <td>1</td>
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
<script>
    function printMontlyAttendence() {
            window.print();
        }

</script>

@include('layouts.inc.footer')
<script>
    $().button('toggle')
</script>

</body>
</html>