<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->


<head>
    @include('layouts.inc.head')
</head>
<!-- End Head -->
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
<body>

    <!----- preloader ----->
    @include('layouts.inc.preloader')
    <!----- /preloader ----->




    <!-- Header (Topbar) -->
    <header class="u-header no-print" >
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
                            <h2 class="text-white mb-0">Student Wise Transcipt</h2>
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
                        <div class="academic_info">
                            <h5>

                            </h5>

                            <div class="container no-print">

                                <div class="row mt-3 mb-4">


                                    <div class="col-6 col-md-6">
                                        <label for="">Session <span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            <option value="">Select Session</option>
                                            @foreach ($sessionsList as $session)
                                                <option value="{{ $session['session_name'] }}">
                                                    {{ $session['session_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col-6 col-md-6">
                                        <label for="">Class <span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            <option value="">Select Class </option>
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

                                    <div class="col-6 col-md-6">
                                        <label for="">Shift<span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            <option value="">Select Shift</option>
                                            @foreach ($shiftsList as $shift)
                                                <option value="{{ $shift['shift_name'] }}">{{ $shift['shift_name'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-6 col-md-6">
                                        <label for="">Section <span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            <option value="">Select Section</option>
                                            @foreach ($sectionsList as $section)
                                                <option value="{{ $section['section_name'] }}">
                                                    {{ $section['section_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>


                                <div class="row mt-3 mb-4">

                                    <div class="col-6 col-md-6">
                                        <label for="">Student<span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            <option value="">Select Student</option>
                                            @foreach ($student_admissionList as $student)
                                                
                                            <option value="{{ $student['NameEnglish'] }}">{{ $student['StudentId'] }} - {{ $student['NameEnglish'] }}</option>
                                            @endforeach
                                           
                                        </select>
                                    </div>


                                    <div class="col-6 col-md-6">
                                        <a href="" class="btn bg-gradient border-0 text-white">Submit</a>
                                    </div>

                                </div>

                            </div>

                            <div class="d-flex justify-content-between" style="margin-top: 70px;">
                                <button id="printBtn" onclick="printAdmissionForm()" class="print_btn"><i class="fa-solid fa-print"></i> Print</button>
                                <a href="#" class="print_btn"><i class="fa-solid fa-download no-print"></i> Download</a>
                            </div>

                            <div class="transciptForm">
                                <div class="transciptDIv" id="transciptDiv">
                                    <img src="Logo _ Icon/preload2.png" class="copyrightTrans" alt="">
                                    <div class="addFormTop">
                                        <div class="adFormLogo">
                                            <img src="Logo _ Icon/logo.png" alt="">
                                        </div>
                                        <div class="adFormTxt">
                                            <h4>Learning Campus (Main Branch)</h4>
                                            <a href="#">www.LearningCampus.com</a>
                                            <p>Mirpur-1100, Dhaka</p>
                                            <p>Mobile : 01234567890</p>
                                            <h2>Mark Sheet</h2>
                                        </div>
                                        <div class="adFormPicture">
                                            <img src="assets/img/student.png" alt="">
                                        </div>
                                    </div>

                                    <div class="transcriptMid">
                                        <div class="studentDetTrans">
                                            <label for="">Name of Student </label>
                                            <p>Suraiya Khan</p>
                                        </div>
                                        <div class="studentDetTrans">
                                            <label for="">Father's Name </label>
                                            <p>Rased Khan</p>
                                        </div>
                                        <div class="studentDetTrans">
                                            <label for="">Mother's Name </label>
                                            <p>Ramisa Khan</p>
                                        </div>
                                        <div class="studentDetTrans">
                                            <label for="">Date Of Birth </label>
                                            <p>01 January 2001</p>
                                        </div>
                                        <div class="studentDetTrans">
                                            <label for="">Institue </label>
                                            <p>Learning Campus School(Main Branch)</p>
                                        </div>
                                    </div>

                                    <div class="transMark">
                                        <div class="table-responsive attendenceTable">
                                            <table class="table text-center transTable">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">SL.NO.</th>
                                                        <th scope="col">Name of Subjects</th>
                                                        <th scope="col">Letter Grade</th>
                                                        <th scope="col">Grade Point(GP)</th>
                                                        <th scope="col">GPA <br> <small>(Without Additional
                                                                Subject)</small> </th>
                                                        <th scope="col">Grade Point Avarage (GPA)</small> </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Bangla 1st Paper</td>
                                                        <td>A+</td>
                                                        <td>5</td>
                                                        <td rowspan="6">4.68</td>
                                                        <td rowspan="9">4.96</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Bangla 2nd Paper</td>
                                                        <td>A+</td>
                                                        <td>5</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>English 2nd Paper</td>
                                                        <td>A-</td>
                                                        <td>4</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Matchmatics</td>
                                                        <td>A+</td>
                                                        <td>5</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>Science</td>
                                                        <td>A+</td>
                                                        <td>5</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">6</th>
                                                        <td>Religion</td>
                                                        <td>A+</td>
                                                        <td>5</td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="5">Additional Subject</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row" rowspan="2">7</th>
                                                        <td rowspan="2">Agriculture</td>
                                                        <td rowspan="2">A+</td>
                                                        <td rowspan="2">5</td>
                                                        <td>GPA Above 2 </td>
                                                    </tr>

                                                    <tr>
                                                        <td>2.00</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>



                                    <div class="trancriptBottom">
                                        <p>Result Published Date : Uttara, December 31,2016</p>
                                        <p>Controller of Examinations</p>
                                    </div>
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
        const printBtn = document.querySelector('.print_btn');
        const printContent = document.getElementById('adFormDiv');
    
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
        function printAdmissionForm() {
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

        function counter() {
            var counts = setInterval(() => {
                var c = parseInt($('.count').text());
                $('.count').text((++c).toString());
                if (c == 100) {
                    clearInterval(counts);
                }
            }, 60);
        }
        counter();

        window.addEventListener("load", function() {
            preload.style.display = "none";
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
