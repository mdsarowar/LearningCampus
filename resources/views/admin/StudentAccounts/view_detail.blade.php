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
            View Fees Detail
        </h2>
    </header>

    <div class="card-body table-responsive" id="institue">
        
            
           <p class="text-right">Showing 1-1 of 1 item</p>
            <!---- session table  ----->
                <table class="table table-bordered mt-3 text-center branch_table">
                    <thead class="table-bordered">
                        <tr>
                            <th scope="col">Srl</th>
                            <th scope="col">Folio Number</th>
                            <th scope="col">Meduam-Class</th>
                            <th scope="col">Student</th>
                            <th scope="col">Session</th>
                            <th scope="col">Shift</th>
                            <th scope="col">Total Dues</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{route("view.search.detail")}}" method="post">
                            @csrf
                        <tr>
                            <th scope="row"></th>
                            <td>
                                
                            </td>
                            <td>
                                <select name="student_class" id="" required>
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
                            </td>
                            <td>
                               
                            </td>
                            <td>
                                
                        <select name="session" id="" required>
                            <option>Select Session</option>
                            <option value="2027">2027</option>
                            <option value="2026">2026</option>
                            <option value="2025">2025</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                        </select>
                            </td>
                            <td>
                                
                        <select name="shift_name" id="class_shift" required>
                            <option value="">Select Shift</option>
                            @foreach ($shiftsList as $shift)
                                <option value="{{ $shift['shift_name'] }}">
                                    {{ $shift['shift_name'] }}</option>
                            @endforeach
                        </select>
                            </td>
                           
                            <td>
                                <button type="submit" id="" class="btn bg-gradient border-0 text-white">Search</button> 
                            </td>
                        </tr>
                    </form>

                        @foreach ($students as $student)
                            
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$student->folio_no}}</td>
                            <td>{{$student->student_class}}</td>
                            
                            <td> 
                                {{$student->student_name_id}}
                            </td>
                            <td>{{$student->session}}</td>
                            <td>{{$student->shift_name}}</td>
                            <td>                             
                                {{$student->due_fee}}
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
           
            <!---- /session table ----->
    
        
    </div>

</div>    
</section>

</div>
</div>
</main>

<!-- Global Vendor -->



<script>
    var preload = document.querySelector(".preload");
    var preloaderst2 = document.querySelectorAll(".st2");
    var preloaderst3 = document.querySelectorAll(".st3");
    var preloaderst4 = document.querySelectorAll(".st4");
   
   for (let i = 0; i < preloaderst2.length; i++) {
      preloaderst2[i].style.fill = "#0E3E67";
   }
   for (let i = 0; i < preloaderst3.length; i++) {
   preloaderst3[i].style.fill = "#FF9324";
   }
   for (let i = 0; i < preloaderst4.length; i++) {
   preloaderst4[i].style.fill = "#0E3E67";
   }

   function counter()
   {
       var counts = setInterval(() => {
           var c = parseInt($('.count').text());
           $('.count').text((++c).toString());
           if(c == 100)
           {
               clearInterval(counts);
           }
       }, 60);
   }
   counter();
     
   window.addEventListener("load",function()
   {
       preload.style.display="none";
   })
</script>

<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>

<!-- Initialization  -->
<script src="assets/js/sidebar-nav.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/dashboard-page-scripts.js"></script>
<!--<script src="assets/js/scripts.js"></script>-->
<script>
    $().button('toggle')
</script>
</body>
</html>