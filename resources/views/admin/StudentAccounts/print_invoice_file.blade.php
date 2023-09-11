<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    @include('layouts.inc.head')
</head>
<!-- End Head -->
<body>
    <style type="text/css">
        @media print {
                #routineData {
                    -webkit-print-color-adjust: exact !important;
                    color-adjust: exact !important;
                    margin: 0 !important;
                }
    
                .card {
                    position: absolute !important;
                    transform: translate(-20%, 0) !important;
                    width: 100% !important;
                    margin: 0 auto !important;
                    box-shadow: 0 !important;
                    border: 0 !important;
                }
    
                .search_result {
                    border: 0 !important;
                }
    
                .no-print {
                    display: none !important;
                }
        }
    
    
       </style> 

<!----- preloader ----->
@include('layouts.inc.preloader')
<!----- /preloader ----->


<!-- Header (Topbar) -->
    <header class="u-header no-print">
        @include('layouts.inc.header')
    </header>
<!-- End Header (Topbar) -->
<main class="u-main" role="main">
    <!-- Sidebar -->
    <aside id="sidebar" class="u-sidebar no-print">
        @include('layouts.inc.sidebar')
    </aside>
<!-- End Sidebar -->


<div class="u-content">
    <div class="u-body">

<section class="es-form-area">
<div class="card">
    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center no-print">
        <h2 class="text-white mb-0">
           Invoice
        </h2>
    </header>

    <div class="card-body table-responsive" id="institue">
        <form action="" class="es-form es-add-form">
           
         <div class="studentDetTable">
           <div class="student_details">


               <div class="stuInvoiceTop">
                   <h2>Learning Campus (Main Branch)</h2>
                   <a href="#">www.learningCampus.com</a>
                   <p>Mirpur, Dhaka-1209</p>
                   <h6>Money Receipt</h6>

                   <div class="invoice_details">
                       <div>
                           <p>Session : {{$invoice->section}}</p>
                           <p>Student ID/Name : {{$invoice->student_name_id}}</p>
                           <p>Paid : {{$invoice->paid_fee}}</p>
                       </div>
                       <div>
                            <p>Class : {{$invoice->student_class}}</p>
                            <p>Folio : {{$invoice->folio_no}}</p>
                       </div>
                   </div>
               </div>

               <div class="stuDetMid">

                   <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Fee Type</th>
                        <th scope="col">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr >
                        <td>{{$invoice->fees_month}}</td>
                        <td>{{$invoice->total_fee}}</td>
                      </tr>
                      <tr>
                        <td>Total Paid</td>
                        <td>{{$invoice->paid_fee}}</td>
                      </tr>
                      <tr>
                        <td>Total Due</td>
                        <td>{{$invoice->due_fee}}</td>
                      </tr>
                      <tr>
                        <td><b>Total :</b> 	</td>
                        <td>{{$invoice->total_fee - $invoice->due_fee}}</td>
                      </tr>
                      <tr>
                        
                      </tr>
                    </tbody>
                  </table>
                  <div class="container no-print">
                    <div class="d-flex justify-content-between mt-5">
                        <button class="print_btn" onclick="printMontlyAttendence()"><i class="fa-solid fa-print"></i>Print</button>
                        
                        
                    </div>
                </div>
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
    const printBtn = document.querySelector('.print_btn');
    const printContent = document.getElementById('print-content');

    printBtn.addEventListener('click', () => {
        // Create an instance of html2pdf
        const pdfElement = document.createElement('div');
        pdfElement.appendChild(printContent.cloneNode(true));
        const opt = {
            margin: 10,
            filename: 'printed_document.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
        };

        html2pdf().from(pdfElement).set(opt).outputPdf().then((pdf) => {
            const blob = new Blob([pdf], { type: 'application/pdf' });
            const url = URL.createObjectURL(blob);

            // Create a temporary link to download the PDF
            const a = document.createElement('a');
            a.href = url;
            a.download = 'printed_document.pdf';
            a.click();

            // Clean up
            URL.revokeObjectURL(url);
        });
    });
    function printMontlyAttendence() {
            window.print();
        }

</script>


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