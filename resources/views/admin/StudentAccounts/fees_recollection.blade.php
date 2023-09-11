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
        <h2 class="text-white mb-0">Invoice Correction</h2>
    </header>
    <form action="{{route("fees.recollection.search")}}" method="post">
        @csrf
    <div class="branch_edit">
        <div class="row">
            
            <div class="col-md-10 mb-3">
                <label for="">Folio No <span>*</span></label>
                <input type="text" name="folio_no" id="">
            </div>

            <div class="col-md-10 mt-4 mb-3">
                <p>
                <button type="submit" id="" class="btn bg-gradient border-0 text-white">Search</button>        
                 </p>
             </div>
            
        </div>
    </div>
    <div style="overflow: auto">
    <table class="table table-bordered table-striped">
        <thead>
          <tr class="th_color">
            <th scope="col">Meduam-Class</th>
            <th scope="col">Student</th>
            <th scope="col">Section</th>
            <th scope="col">Session</th>
            <th scope="col">Shift</th>
            <th scope="col">Fees Type</th>
            <th scope="col">Total Payable </th>
            <th scope="col">Total Paid</th>
            <th scope="col">Total Dues</th>
            {{-- <th scope="col">Actions</th> --}}
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                
          <tr>
            <th scope="row">{{$student->student_class}}</th>
            <td>{{$student->student_name_id}}</td>
            <td>{{$student->section}}</td>
            <td>{{$student->session}}</td>
            <td>{{$student->shift_name}}</td>
            <td>{{$student->fees_month}}</td>
            <td>{{$student->total_fee}}</td>
            <td>{{$student->paid_fee}}</td>
            <td>{{$student->due_fee}}</td>
            {{-- <td>
                <a class="btn btn-primary" href="{{route("fees.recollection.edit", ["folio_no" => $student->folio_no])}}"><i class="fa-solid fa-pencil"></i></a>
            </td> --}}
          </tr>
          
          @endforeach
          

        </tbody>
      </table>
    </div>
</form>
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