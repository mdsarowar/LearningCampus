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
            <h2 class="text-white mb-0">Update Exam Grade</h2>
        </header>
        <div class="session_view_link ml-3 mt-4 mb-5">
            <a href="{{ route('add.grade') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
            <a href="{{ route('view.grade') }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
        </div>
        <div class="branch_edit">
            <div class="row">
                <div class="col-md-10 mb-3">
                    <label for="">Classes <span>*</span></label>
                     <select name="" id="">
                        <option value="">All</option>
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
                    <label for="">Start Marks <span>*</span></label>
                    <input type="text" name="" id="">
                 </div>

                 <div class="col-md-10 mb-3">
                    <label for="">End Marks <span>*</span></label>
                    <input type="text" name="" id="">
                 </div>

                 <div class="col-md-10 mb-3">
                    <label for="">Grade Letter <span>*</span></label>
                    <input type="text" name="" id="">
                 </div>

                 <div class="col-md-10 mb-3">
                    <label for="">Grade Point <span>*</span></label>
                    <input type="text" name="" id="">
                 </div>

                 <div class="col-md-10 mb-3">
                    <label for="">Remarks<span>*</span></label>
                    <input type="text" name="" id="">
                 </div>

                <div class="col-md-10 mb-3">
                    <label for="">Status <span>*</span></label>
                     <select name="" id="">
                         <option value="">Active</option>
                         <option value="">Inactive</option>
                     </select>
                 </div>

                <div class="col-md-10 mt-4 mb-3">
                    <p>
                     <a href="" class="btn bg-gradient border-0 text-white">Update</a>        
                     <a href="" class="btn  cancel_btn border-0 text-white">Cancel</a>         
                     </p>
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
</body>
</html>