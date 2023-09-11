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
                    <h2 class="text-white mb-0">Employee Manual Attendence</h2>
                </header>
                
<div class="academic_info">

<div class="container">
    <form action="{{route("employe.manual.search")}}" method="post">
        @csrf
    <div class="row mt-3 mb-4">
        
        <div class="col-6">
            <label for="">Day <span class="text-danger">*</span></label>
            <input type="date" name="attendence_date" id="">
        </div>

        <div class="col-6">
            <label for="">Employee Type <span class="text-danger">*</span></label>
            <select name="employeetype" id="">
                <option value="">Select Employee Type</option>
                @foreach ($employeetypesList as $employeetype)
                    
                <option value="{{$employeetype["type"]}}">{{$employeetype["type"]}}</option>
                
                @endforeach
            </select>
        </div>

    </div>

    <div class="row mt-3 mb-4">
        
        <div class="col-6">
            <label for="">Working Shift <span class="text-danger">*</span></label>
            <select name="workingshift" id="">
                <option value="">Select Working Shift</option>
                @foreach ($workingshiftsList as $workingshift)
                    
                <option value="{{$workingshift["name"]}}">{{$workingshift["name"]}}</option>
                
                @endforeach
            </select>
        </div>

        <div class="col-6">
           <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>

    </div>
</form>
</div>

<div class="attendenceTable table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
          <tr style="background-color:rgb(226, 226, 226);">
            <th scope="col">SL</th>
            <th scope="col">Emp. Name/ID</th>
            <th scope="col">Designation</th>
            <th scope="col">Mobile</th>
            <th scope="col">In Time</th>
            <th scope="col">Out Time</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>
                <img src="assets/img/student.png" class="student_img" alt="">
                <span>{{$employee->employee_name}}</span>
            </td>
            <td>{{$employee->designation}}</td>
            <td>{{$employee->employee_mobile}}</td>
            <td>{{$employee->in_time}}</td>
            <td>{{$employee->out_time}}</td>
         
          </tr>
        
          @endforeach
        </tbody>
      </table>
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