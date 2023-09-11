<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    @include('layouts.inc.head')
</head>
<!-- End Head -->
<body>

<style type="text/css">
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ff0000;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: rgb(253, 253, 253);
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
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
                            <form action="{{route("manual.attendence.search")}}" method="POST" id="attendanceSearchForm">
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
                       
                        <optgroup label="Bangla Medium" class="bold_text">
                            @foreach ($classesList as $class)
                                @if ($class['class_type'] === 'Bangla')
                                    <option
                                        value="{{ $class['class_type'] . '_' . $class['class_name'] }}">
                                        {{ $class['class_name'] }}
                                    </option>
                                @endif
                            @endforeach
                        </optgroup>
                        <optgroup label="English Medium" class="bold_text">
                            @foreach ($classesList as $class)
                                @if ($class['class_type'] === 'English')
                                    <option
                                        value="{{ $class['class_type'] . '_' . $class['class_name'] }}">
                                        {{ $class['class_name'] }}
                                    </option>
                                @endif
                            @endforeach
                        </optgroup>
                                    
                    </select>
                    
            
                
                </div>

            </div>

            <div class="row mt-3 mb-4">
                
                <div class="col-6">
                    <label for="shift">Shift <span class="text-danger">*</span></label>
                    <select name="shift" id="shift">
                        <option value="">Select Shift</option>
                        @foreach ($shiftsList as $shift)
                            <option value="{{ $shift['shift_name'] }}">
                                {{ $shift['shift_name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-6">
                    <label for="section">Section <span class="text-danger">*</span></label>
                    <select name="section" id="section">
                        <option value="">Select Section</option>
                        
                        @foreach ($sectionsList as $section)
                        <option value="{{ $section['section_name'] }}">
                            {{ $section['section_name'] }}</option>
                    @endforeach
                        
                    </select>
                </div>

            </div>

            <div class="row mt-3 mb-4">
                
                <div class="col-6">
                <button type="submit" id="searchAttendance" class="btn btn-primary">Submit</button>
                </div>

            </div>

        </div>
        </form>
        <div class="attendenceTable table-responsive">
            
            <p class="text-center text-success">{{Session::get('message')}}</p>
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
                            
                            
                            {{-- <div class="sms_div">
                                <a href="{{route("manual.attendence.status.all")}}">
                                <label class="switch" for="checkbox">
                                    <input type="checkbox" id="" data-student-id="" />
                                    <div class="slider round"></div>
                                </label>
                                </a>
                            </div>
                            --}}
                        
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
            <img src="assets/img/student.png" class="student_img" alt="">
            <span>{{ $student->student_name }}</span>
        </td>
        <td>{{ $student->roll }}</td>
        <td>{{ $student->guardian_name }}</td>
        <td>{{ $student->guardian_mobil }}</td>
        <td>
            <div class="sms_div">
                <label class="switch" for="checkbox{{ $student->id }}">
                    <input type="checkbox" id="checkbox{{ $student->id }}" data-student-id="{{ $student->id }}" />
                    <div class="slider round"></div>
                </label>
            </div>
            <h6 class="checkbox_txt">
                <span id="status-text_{{ $student->id }}">{{ $student->absent_status == 1 ? 'Present' : 'Absent' }}</span>
            </h6>
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
</div>

</main>

<!-- Global Vendor -->
<script>
    $(function() {
      $('.toggle-class').change(function() {
          var status = $(this).prop('checked') == true ? 1 : 0; 
          var user_id = $(this).data('id'); 
           
          $.ajax({
              type: "GET",
              dataType: "json",
              url: '/manual.attendence.status.all',
              data: {'status': status, 'user_id': user_id},
              success: function(data){
                console.log(data.success)
              }
          });
      })
    })
  </script>


@include('layouts.inc.footer')
<script>
    $().button('toggle')
</script>
<script>
    $(document).ready(function () {
        $("input[type='checkbox']").change(function (event) {
            console.log(event)
            var studentId = $(this).data("student-id");
            var isChecked = $(this).is(":checked");
            var token =  "{{csrf_token()}}";

            $.ajax({
                type: "POST", // You can change this to the appropriate HTTP method
                url: "{{ route('manual.attendence.status') }}", // Update the URL to your route
                data: {
                    student_id: studentId,
                    attendance_status: isChecked ? 1 : 0,
                },
                headers: {
                    'X-CSRF-Token': token 
               },
                success: function (data) {
                    if(isChecked == 1){
	$("#status-text_"+studentId).text('Present')
    }else{
        $("#status-text_"+studentId).text('Absent')
    }
                    // Handle the success response if needed
                },
                error: function (error) {
                    // Handle errors if needed
                },
            });
        });
        });
</script>
{{-- <script>
    $(document).ready(function () {
        $("input[type='checkbox']").change(function (event) {
            console.log(event)
            var studentId = $(this).data("student-id");
            var isChecked = $(this).is(":checked");
            var token =  "{{csrf_token()}}";

            $.ajax({
                type: "POST", // You can change this to the appropriate HTTP method
                url: "{{ route('manual.attendence.status.all') }}", // Update the URL to your route
                data: {
                    student_id: studentId,
                    attendance_status: isChecked ? 1 : 0,
                },
                headers: {
                    'X-CSRF-Token': token 
               },
                success: function (data) {
                    if(isChecked == 1){
	$("#status-text_"+studentId).text('Present')
    }else{
        $("#status-text_"+studentId).text('Absent')
    }
                    // Handle the success response if needed
                },
                error: function (error) {
                    // Handle errors if needed
                },
            });
        });
        });
</script> --}}
</body>
</html>