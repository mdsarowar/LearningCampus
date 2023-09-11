<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Learning Campus | General Routine</title>
    @include('layouts.inc.head')

    <style type="text/css">
        @media print {
            body {
                -webkit-print-color-adjust: exact !important;
                color-adjust: exact !important;

            }

            .no-print {
                display: none !important;
            }
        }

        /* .card {
               position: absolute !important;
               transform: translate(-20%, 0) !important;
               width: 100% !important;
               margin: 0 auto !important;
               box-shadow: 0 !important;
               border: 0 !important;
           }
           .search_result {
               border: 0 !important;
           }  */
    </style>
</head>
<!-- End Head -->

<body>
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
                            <h2 class="text-white mb-0">Student Attendence Details</h2>
                        </header>

                        <div class="academic_info student_search">

                            <form action="{{ route('details.attendence.search') }}" method="post">
                                @csrf
                                <div class="container no-print">

                                    <div class="row mt-3 mb-4">

                                        <div class="col-12 col-md-6 col-lg-4">
                                            <label for="">Session <span class="text-danger">*</span></label>
                                            <select name="session" id="session">
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                            </select>
                                        </div> <br><br>

                                        <div class="col-12 col-md-6 col-lg-4">
                                            <label for="">Class Name <span class="text-danger">*</span></label>
                                            <select name="class" id="class">

                                                <option value="">Select Class</option>

                                                <option value="Bangla Medium" class="bold_text">Bangla Medium</option>
                                                <option value="Play">Play</option>
                                                <option value="Nursary">Nursary</option>
                                                <option value="KG">KG</option>
                                                <option value="One">One</option>
                                                <option value="Two">Two</option>
                                                <option value="Three">Three</option>
                                                <option value="Four">Four</option>
                                                <option value="Five">Five</option>
                                                <option value="Six">Six</option>
                                                <option value="Seven">Seven</option>
                                                <option value="Eight">Eight</option>
                                                <option value="Nine">Nine</option>
                                                <option value="Ten">Ten</option>
                                                <option value="Eleven">Eleven</option>
                                                <option value="Tweleve">Tweleve</option>
                                                <option value="English Medium" class="bold_text">English Medium</option>
                                                <option value="PlayEn">Play</option>
                                                <option value="Nursary">Nursary</option>
                                                <option value="KGEn">KG</option>
                                                <option value="OneEn">One</option>
                                                <option value="TwoEn">Two</option>
                                                <option value="ThreeEn">Three</option>
                                                <option value="FourEn">Four</option>
                                                <option value="FiveEn">Five</option>
                                                <option value="SixEn">Six</option>
                                                <option value="SevenEn">Seven</option>
                                                <option value="EightEn">Eight</option>
                                                <option value="NineEn">Nine</option>
                                                <option value="NineEn">Ten</option>
                                                <option value="ElevenEn">Eleven</option>
                                                <option value="TweleveEn">Tweleve</option>

                                            </select>
                                        </div> <br><br>

                                        <div class="col-12 col-md-6 col-lg-4">
                                            <label for="">Shift <span class="text-danger">*</span></label>
                                            <select name="shift" id="shift">
                                                <option>Select Shift</option>
                                                <option value="Morning">Morning</option>
                                                <option value="Day">Day</option>
                                            </select>
                                        </div> <br><br>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-12 col-md-6 col-lg-4">
                                            <label for="">Section <span class="text-danger">*</span></label>
                                            <select name="section" id="section">
                                                <option value="">Select Section</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                            </select>
                                        </div> <br><br>

                                        <div class="col-12 col-md-6 col-lg-4">
                                            <label for="">Student <span class="text-danger">*</span></label>
                                            <select name="student_id" id="student_id">

                                                <option value="">Select Student</option>
                                                @foreach ($students as $student)
                                                    <option value="{{ $student->student_id }}">
                                                        {{ $student->student_id }} - {{ $student->student_name }}
                                                        ({{ $student->class }})
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div><br><br>



                                    </div>




                                </div>

                        </div>


                        <p class="text-center no-print">
                            <button type="submit" id="searchAttendance" class="btn btn-primary">Submit</button>
                        </p>
                        </form>

                        <div class="container no-print">
                            <div class="d-flex justify-content-between mt-5">
                                <button class="print_btn" onclick="printMontlyAttendence()"><i
                                        class="fa-solid fa-print"></i>Print</button>
                                <button class="print_btn" id="download"><i
                                        class="fa-solid fa-print"></i>Download</button>

                            </div>
                        </div>

                        <div class="attendence_summary" id="print-content">
                            <div id="invoice">
                                <div class="attendence_summary_top text-center">
                                    <h1>Learning Campus (Main Branch)</h1>
                                    <a href="#">www.LearningCampus.com</a>
                                    <p>Mirpur-3, Dhaka</p>
                                    <h3>Attendance Details for the Month of April 2022</h3>
                                    <p>ID : 20204002, Name : Mahmudul</p>
                                    <h3>
                                        <span class="text-primary">Weekend : 3</span>,
                                        <span class="text-info">Holidays : 0</span>,
                                        <span class="text-danger">Absent : 18</span>,
                                        <span class="text-secondary">Green : 0</span>,
                                        <span class="text-warning"> Orange : 0</span>,
                                        <span class="text-danger"> Red : 0</span>
                                    </h3>
                                </div>

                                <div class="attendence_summary_mid table-responsive">

                                    <!---- student table  ----->
                                    <table class="table table-bordered mt-3 text-center table-striped">
                                        <thead class="table-bordered">
                                            <tr>
                                                <th scope="col">SL</th>
                                                <th scope="col">Date</th>
                                                <th scope="col"><span style="color: green;">Attend</span> / <span
                                                        style="color: red;">Absent</span></th>
                                                <th scope="col"><span style="color: green;">IN</span></th>
                                                <th scope="col"><span style="color: red;">OUT</span></th>
                                                <th scope="col">Middle Punches</th>
                                                <th scope="col"><span
                                                        style="background-color: green;color: white;padding: 8px 14px;font-weight: 600;">G</span>
                                                </th>
                                                <th scope="col"><span
                                                        style="background-color: yellow;color: white;padding: 8px 14px;font-weight: 600;">Y</span>
                                                </th>
                                                <th scope="col"><span
                                                        style="background-color: red;color: white;padding: 8px 14px;font-weight: 600;">R</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($students as $student)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $student->date }}</td>
                                                    @if ($student->absent_status == 1)
                                                        <td style="color: red; "> Absent </td>
                                                    @else
                                                        <td style="color: green; "> Attend </td>
                                                    @endif
                                                    {{-- <td style="">{{$student->absent_status == 1 ? 'Absent' : 'Attend '}}</td> --}}
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <!---- /student table ----->
                                </div>
                            </div>

                        </div>


                    </div>
                </section>

            </div>
        </div>

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" crossorigin="anonymous">
    </script>
    <script>
        function printMontlyAttendence() {
            window.print();
        }
    </script>
    <script>
        window.onload = function() {
            document.getElementById("download")
                .addEventListener("click", () => {
                    const invoice = this.document.getElementById("invoice");
                    var opt = {
                        margin: 1,
                        filename: 'attendece-details.pdf',
                        image: {
                            type: 'jpeg',
                            quality: 0.98
                        },
                        html2canvas: {
                            scale: 2
                        },
                        jsPDF: {
                            unit: 'in',
                            format: 'letter',
                            orientation: 'portrait'
                        }
                    };
                    html2pdf().from(invoice).set(opt).save();
                })
        }
    </script>

    @include('layouts.inc.footer')
</body>

</html>
