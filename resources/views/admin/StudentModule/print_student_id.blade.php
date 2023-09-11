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


        <div class="u-content ">
            <div class="u-body">
                <section class="es-form-area no-print">
                    <div class="card">
                        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                            <h2 class="text-white mb-0">Student ID Card</h2>
                        </header>
                        <form action="{{ route('printid.student.search') }}" method="post">
                            @csrf

                            <div class="academic_info student_search">
                                <h5>
                                </h5>

                                <div class="container">

                                    <div class="row mt-3 mb-4">

                                        <div class="col-12 col-lg-4">
                                            <label for="">Session <span class="text-danger">*</span></label>
                                            <select name="session" id="">
                                                <option value="">Select Session</option>
                                                @foreach ($sessionsList as $session)
                                                    <option value="{{ $session['session_name'] }}">
                                                        {{ $session['session_name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div> <br><br>

                                        <div class="col-12 col-lg-4">
                                            <label for="">Class Name <span class="text-danger">*</span></label>
                                            <select name="class" id="">
                                                <option value="">Select Class</option>
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
                                        </div> <br><br>

                                        <div class="col-12 col-lg-4">
                                            <label for="">Shift <span class="text-danger">*</span></label>
                                            <select name="shift" id="">
                                                <option value="">Select Shift</option>
                                                @foreach ($shiftsList as $shift)
                                                    <option value="{{ $shift['shift_name'] }}">
                                                        {{ $shift['shift_name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div> <br><br>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-12 col-lg-4">
                                            <label for="">Section <span class="text-danger">*</span></label>
                                            <select name="section" id="">
                                                <option value="">Select Section</option>
                                                @foreach ($sectionsList as $section)
                                                    <option value="{{ $section['section_name'] }}">
                                                        {{ $section['section_name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div> <br><br>

                                        <div class="col-12 col-lg-4">
                                            <label for="">Student <span class="text-danger">*</span></label>
                                            <select name="student_id" id="">
                                                <option value="">Select Student</option>
                                                @foreach ($student_admissionList as $student)
                                                    <option value="{{ $student['StudentId'] }}">
                                                        {{ $student['StudentId'] }} -
                                                        {{ $student['NameEnglish'] }} </option>
                                                @endforeach

                                            </select>
                                        </div> <br><br>

                                        {{-- <div class="col-12 col-lg-4">
                                        <label for="">Valid Date <span class="text-danger">*</span></label>
                                        <input type="date" name="date" id="">
                                    </div> <br><br> --}}

                                    </div>


                                    {{-- <div class="row mt-3 mb-4">

                                    <div class="col-12 col-lg-4">
                                        <label for="">Establishment </label>
                                        <input type="text" name="establishment" id="">
                                    </div> <br><br>

                                    <div class="col-12 col-lg-4">
                                        <label for="">Back Part Design? </label>
                                        <input type="radio" name="" id="rad_btn"><span>Back Part
                                            (Normal)</span><br>
                                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                        &nbsp &nbsp &nbsp<input type="radio" name="" id="rad_btn">Back
                                        Part (With Parent's Photo)
                                    </div> <br><br>

                                </div> --}}

                                    {{-- <div class="row mt-3 mb-4">

                                    <div class="col-12 col-lg-4">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt" id="printCheck"> Show Session ?</h6>
                                        </div>
                                    </div> <br><br>

                                    <div class="col-12 col-lg-4">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt" id="printCheck">Show Roll No.?</h6>
                                        </div>
                                    </div> <br><br>

                                    <div class="col-12 col-lg-4">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt" id="printCheck">Blood Group ?</h6>
                                        </div>
                                    </div> <br><br>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-12 col-lg-4">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" check id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt" id="printCheck"> Show Shift ?</h6>
                                        </div>
                                    </div> <br><br>

                                    <div class="col-12 col-lg-4">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt" id="printCheck">Show Group ?</h6>
                                        </div>
                                    </div> <br><br>

                                    <div class="col-12 col-lg-4">
                                        <div class="sms_div">
                                            <label class="switch" for="checkbox">
                                                <input type="checkbox" id="checkbox" />
                                                <div class="slider round"></div>
                                            </label>
                                            <h6 class="checkbox_txt " id="printCheck">Students Who has Picture ?</h6>
                                        </div>
                                    </div> <br><br>

                                </div> --}}

                                </div>

                            </div>


                            <p class="text-center">
                                <button type="submit" class="btn btn-primary px-5">Submit</button>
                            </p>
                        </form>

                    </div>

                </section>

                @if (isset($studentInfo))
                    <section>
                        <div class="d-flex justify-content-between mt-4 mb-5 no-print">
                            <button id="printBtn" onclick="printAdmissionForm()" class="print_btn"><i
                                    class="fa-solid fa-print"></i> Print</button>
                        </div>
                        <div class="studentId_new">
                            <div class="studentId_new_box">

                                <div class="studentId_new_left">
                                    <img src="{{ asset('assets/Logo_Icon/logo.png') }}" class="idLogo" alt="">
                                    <h2>Learning Campus </h2>
                                    <h6 class="text-center">Main Branch</h6>
                                    <img src="assets/img/student.png" class="idStudent" alt="">
                                    <img src="Logo _ Icon/preload2.png" class="idCopyright" alt="">
                                    <div class="studentId_new_details">
                                        <h4>{{ $studentInfo->NameEnglish }}</h4>
                                        <label for="">Class</label>
                                        <span> : {{ $studentInfo->Class }}</span><br>
                                        <label for="">Student ID</label>
                                        <span> : {{ $studentInfo->StudentId }}</span><br>
                                        <label for="">Section</label>
                                        <span> : {{ $studentInfo->Section }}</span><br>
                                        <label for="">Session</label>
                                        <span> : {{ $studentInfo->Session }}</span><br>
                                    </div>
                                    <h3><span>Principal</span></h3>
                                </div>

                                <div class="studentId_new_right">
                                    <h5>If Found Please Return to : </h5>
                                    <img src="{{ asset('assets/Logo_Icon/logo.png') }}" alt="">
                                    <h2>Learning Campus</h2>
                                    <h6 class="text-center">Main Branch</h6>
                                    <p>Uttara, Dhaka</p>
                                    <p>Mobile : 01234567890</p>
                                    <p>Email : learningcampus@gmail.com</p>
                                    <p>web : learningcampus.com</p>
                                </div>

                            </div>
                        </div>
                    </section>
                @endif

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
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait'
                }
            };

            html2pdf().from(pdfElement).set(opt).outputPdf().then((pdf) => {
                const blob = new Blob([pdf], {
                    type: 'application/pdf'
                });
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

    @include('layouts.inc.footer')
    <script>
        $().button('toggle')
    </script>
</body>

</html>
