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
    <header class="u-header ">
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
            Print Invoice
        </h2>
    </header>

    <div class="card-body table-responsive" id="institue">
        <form action="{{route("invoice.search")}}" class="es-form es-add-form" id="accountSearchForm" method="POST">
            @csrf
            <a href="{{route("add.fees")}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
           <p class="text-right">Showing 1-1 of 1 item</p>
            <!---- session table  ----->
                <table class="table table-bordered mt-3 text-center branch_table">
                    <thead class="table-bordered">
                        <tr>
                            <th scope="col">Srl</th>
                            <th scope="col">Folio Number</th>
                            <th scope="col">Class/Medium</th>
                            <th scope="col">Student</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        
                            
                        <tr>
                            <th scope="row"></th>
                            <td>
                                <input type="text" name="folio_no" id="">
                            </td>
                            <td>
                                
                            </td>
                            <td>
                               
                            </td>
                            <td style="color:#6b15b6" id="accountSearchBtn">
                                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-search"></i></button>
                            </td>
                        </tr>
                    </form>
                        <tr>
                        </tr>
                        
                            @foreach ($invoices as $invoice)
                        <tr>
                            
                                
                            <td>{{$loop->iteration}}</td>
                            <td>{{$invoice->folio_no}}</td>
                            <td>{{$invoice->student_class}}</td>
                            <td> 
                                <img src="assets/img/student.png" class="student_img" alt="">
                              
                                {{$invoice->student_name_id}}
                              
                            </td>
                            
                            <td>                             
                                <a href="{{route("print.invoice.file", ["id" => $invoice->id])}}"><i class="fa-solid fa-print"></i></a>
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
{{-- <script>
    $(document).ready(function() {
        $('#accountSearchBtn').click(function() {
            var formData = $('#accountSearchForm').serialize();

            $('#searchLoader').show();
            $.ajax({
                url: '{{ route('invoice.search') }}',
                type: 'POST',
                data: formData,
                success: function(response) {
                    $('#searchLoader').hide();

                    if (response.length === 0) {
                        $('#accountsContainer').empty();
                        $('#no_result_msg').show();
                    } else {
                        var serial = 1;
                        $('#accountsContainer').empty();
                        $.each(response, function(index, account) {
                            var row = '<tr>' +
                                '<td>' + serial + '</td>' +
                                '<td>' + account.account_type + '</td>' +
                                '<td>' + (account.account_category === 'reciept' ?
                                    'Receipts (+)' : 'Payments (-)') + '</td>' +
                                '<td>' + account.student_class + '</td>' +
                                '<td>' + account.folio_no + '</td>' +
                                '<td>' + account.account_code + '</td>' +
                                '<td>' + account.account_period + '</td>' +
                                '<td>' + (account.has_child == 1 ? 'Yes' : 'No') +
                                '</td>' +
                                '<td>' + (account.status == 1 ?
                                    '<p style="color: rgb(0, 214, 114)">Active</p>' :
                                    '<p style="color: red">Inactive</p>') +
                                '</td>' +
                                '<td>' +
                                '<form action="/account-head-view" method="get">' +
                                '<input type="hidden" name="account_code" value="' +
                                account.account_code + '">' +
                                
                                '</td>' +
                                '</tr>';

                            $('#accountsContainer').append(row);

                            serial++;
                        });
                    }

                    console.log(response);

                },
                error: function(response) {
                    console.log(response.responseText);
                }
            });
        });
    });
</script> --}}
</body>
</html>