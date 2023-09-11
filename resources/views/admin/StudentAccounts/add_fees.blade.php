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
        <h2 class="text-white mb-0">Student Fees Collection</h2>
    </header>
    <br>
    <p class="text-center text-bold text-success h3">{{Session::get('message')}}</p>
    <div class="card-body">
        <form action="{{route("add.fees.store")}}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="session_add">
                <div class="row">
    
                    <div class="col-md-10 mb-3">
                        <label for="">Session <span>*</span></label>
                        <select name="session" id="" required>
                            <option>Select Session</option>
                            @foreach ($sessionList as $session)
                            <option value="{{$session['session_name']}}">{{$session['session_name']}}</option>
                        @endforeach
                        </select>
                    </div>
                    
                    <div class="col-md-10 mb-3">
                        <label for="">Class <span>*</span></label>
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
                    </div>
    
                    <div class="col-md-10 mb-3">
                        <label for="">Shift <span>*</span></label>
                        <select name="shift_name" id="class_shift" required>
                            <option value="">Select Shift</option>
                            @foreach ($shiftsList as $shift)
                                <option value="{{ $shift['shift_name'] }}">
                                    {{ $shift['shift_name'] }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="col-md-10 mb-3">
                        <label for="">Section <span>*</span></label>
                        <select name="section" id="section" required>
                            <option value="">Select Section</option>
                            @foreach ($sectionsList as $section)
                                <option value="{{ $section['section_name'] }}">
                                    {{ $section['section_name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-10 mb-3">
                        <label for="">Student <span>*</span></label>
                        <select name="student_name_id" id="" required>
                            <option value="">Select Student/Id</option>
                            @foreach ($students as $student)
                            <option value="{{$student->student_name_id}}">{{$student->student_name_id}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="col-md-10 mb-3">
                        <label for="">Select Month/Admission <span>*</span></label>
                        <select name="fees_month" id="">
                            <option value="">Select Month</option>
                            <option value="Admission">Admission</option>
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
                    </div>
                    <div class="col-md-10 mb-3">
                        <label for="">Total Payable <span>*</span></label>
                        <input type="number" name="total_fee" id="" placeholder="Inter your student Total amount" required>
                    </div>
                    <div class="col-md-10 mb-3">
                        <label for="">Total Paid<span>*</span></label>
                        <input type="number" name="paid_fee" id="" placeholder="Inter your student Paid amount" required>
                    </div>
                    
                    <div class="col-md-10 mt-4 mb-3">
                        <p>
                        <button type="submit" id="" class="btn bg-gradient border-0 text-white">Add</button>       
                        <a href="{{route("view.all.detail")}}" class="btn  cancel_btn border-0 text-white">View Folio Number</a>         
                        </p>
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