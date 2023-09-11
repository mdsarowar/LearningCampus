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
                Manage Exam Grade
            </h2>
        </header>
        @if (session('error'))
        <div class="alert alert-danger col-8 m-auto">
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success col-8 m-auto">
            {{ session('success') }}
        </div>
    @endif

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <a href="{{ route('add.grade') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
               <p class="text-right">Showing 1-1 of 1 item</p>
                <!---- session table  ----->
                    <table class="table table-bordered mt-3 text-center branch_table">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">Session</th>
                                <th scope="col">Classes</th>
                                <th scope="col">Start Marks</th>
                                <th scope="col">End Marks</th>
                                <th scope="col">Grade Letter</th>
                                <th scope="col">Grade Point</th>
                                <th scope="col">Remarks</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <select name="" id="">
                                        <option value="">All</option>
                                        @foreach ($sessionsList as $session)
                                                    <option value="{{ $session['session_name'] }}">
                                                        {{ $session['session_name'] }}</option>
                                                @endforeach
                                    </select>
                                </td>
                                <td>
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
                                </td>
                                <td>
                                    <input type="text" name="" id="">
                                </td>

                                <td>
                                    <input type="text" name="" id="">
                                </td>

                                <td>
                                    <input type="text" name="" id="">
                                </td>

                                <td>
                                    <input type="text" name="" id="">
                                </td>
                                <td>
                                    <input type="text" name="" id="">
                                </td>
                              
                                <td></td>
                            </tr>
                            <?php
                                $count = 0;
                            ?>
                            @foreach ($addexamgradeList as $addexamgrade )
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>2021</td>
                                <td>{{ $addexamgrade['classe'] }}</td>
                                <td>{{ $addexamgrade['start_marks'] }}</td>
                                <td>{{ $addexamgrade['end_marks'] }}</td>
                                <td>{{ $addexamgrade['grade_letter'] }}</td>
                                <td>{{ $addexamgrade['grade_point'] }}</td>
                                <td>{{ $addexamgrade['remarks'] }}</td>
                                <td>
                                    <a href="{{ route('view.grade.show',["id" => $addexamgrade['addexamgrade_id']]) }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="{{ route('edit.grade') }}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
               
                <!---- /session table ----->
        
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
</body>
</html>