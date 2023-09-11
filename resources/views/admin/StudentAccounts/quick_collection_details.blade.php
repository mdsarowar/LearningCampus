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
                
<div class="academic_info">

<div class="container">

    <div class="table-responsive attendenceTable studentLedger">
        <div class="text-center studentDuesTop">
            <h2>Learning Campus School</h2>
            <a href="#">www.learningCampus.com</a>
            <p>Uttara, Dhaka</p>
            <p>Student's Due Report of Session - 2021</p>
            <p>Month : Admission </p>
            <p>Student ID : 21113001, Student Name : ABDUL ALIM </p>
            <p>Class : Ten, Section : A, Shift : Day, Roll : 1 </p>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
              <tr class="th_color">
                <th scope="col">Sl.	</th>
                <th scope="col">Fees Type</th>
                <th scope="col">Due</th>
                <th scope="col">Waived</th>
                <th scope="col">Paid</th>
                <th scope="col">Payable</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <th scope="row">1</th>
                <td>Admission Fee</td>
                <td>3,500.00</td>
                <td>0.00</td>
                <td>0.00</td>
                <td>3,500.00</td>
              </tr>

              <tr>
                <td colspan="2" class="text-right">Total : </td>
                <td>3,500.00</td>
                <td>0.00</td>
                <td>0.00</td>
                <td>3,500.00</td>
              </tr>

            </tbody>
          </table>
        
    </div>

</div>

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