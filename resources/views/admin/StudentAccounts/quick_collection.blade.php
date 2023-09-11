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
      <h2 class="text-white mb-0">Student Fees Collection (Quick)</h2>
  </header>
  <form action="{{route("quick.collection.search")}}" method="post" >
    @csrf
  <div class="branch_edit">
      <div class="row">

        <div class="col-md-10 mb-3">
            <label for="">Session <span>*</span></label>
            <select name="session" id="" required>
                <option>Select Session</option>
                <option value="2027">2027</option>
                <option value="2026">2026</option>
                <option value="2025">2025</option>
                <option value="2024">2024</option>
                <option value="2023">2023</option>
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
            <label for=""> Month <span>*</span></label>
            <select name="month" id="" required>
                <option value="">Select Fees Month</option>
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

          <div class="col-md-10 mt-4 mb-3">
              <p>
                <button type="submit" class="btn bg-gradient border-0 text-white">Search</button>         
               <a href="" class="btn  cancel_btn border-0 text-white">Cancel</a>         
               </p>
           </div>

      </div>
  
  </div>
  </form>
   
  <div class="quickCollection table-responsive">
      <h3><i class="fa-solid fa-info"></i> Student Fees Collection (Quick)</h3>
      <table class="table table-bordered table-striped">
          <thead>
            <!-- <tr class="th_color">
              <th scope="col">Image</th>
              <th scope="col">21113001</th>
              <th scope="col">Session</th>
              <th scope="col">Shift</th>
              <th scope="col">Roll</th>
              <th scope="col">Admission</th>
              <th scope="col">January</th>
              <th scope="col">February</th>
              <th scope="col">March</th>
              <th scope="col">April</th>
              <th scope="col">May</th>
              <th scope="col">June</th>
              <th scope="col">July</th>
              <th scope="col">August</th>
              <th scope="col">September</th>
              <th scope="col">October</th>
              <th scope="col">November</th>
              <th scope="col">December</th>
              <th scope="col">Total</th>
            </tr> -->
          </thead>
          <tbody>

            <tr>
              <th rowspan="2">
                  <img src="assets/img/student.png" class="student_pic" alt="">
              </th>
              <td>ID</td>
              <td>21113001</td>
              <td>Session</td>
              <td>2021</td>
              <td>Medium</td>
              <td>Bangla Medium</td>
              <td>Class</td>
              <td>Ten</td>
            </tr>

            <tr>
             
              <td>Name</td>
              <td>ABDUL ALIM</td>
              <td>Shift</td>
              <td>Day</td>
              <td>Section</td>
              <td>A</td>
              <td>Roll</td>
              <td>1</td>
            </tr>

          </tbody>
        </table>    
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