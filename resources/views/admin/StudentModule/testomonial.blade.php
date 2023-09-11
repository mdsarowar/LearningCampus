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


        <div class="u-content">
            <div class="u-body">
                <section class="es-form-area">
                    <div class="card">
                        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center no-print">
                            <h2 class="text-white mb-0">Student Testomonial</h2>
                        </header>
                        <form action="{{ route('testimonial.search') }}" method="POST">
                            @csrf

                            <div class="academic_info student_search no-print">
                                <h5>
                                    <i class="fa-solid fa-circle-info"></i> Student Search (Current)
                                </h5>

                                <div class="container">

                                    <div class="row mt-3 mb-4">

                                        <div class="col-12 col-md-6 col-lg-4">
                                            <label for="">Session <span class="text-danger">*</span></label>
                                            <select name="session" id="sessionDropdown">
                                                @foreach ($sessionsList as $session)
                                                    <option value="{{ $session['session_name'] }}">
                                                        {{ $session['session_name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div> <br><br>

                                        <div class="col-12 col-md-6 col-lg-4">
                                            <label for="">Class Name <span class="text-danger">*</span></label>
                                            <select name="class" id="classDropdown">
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
                                        </div><br><br>

                                        <div class="col-12 col-md-6 col-lg-4">
                                            <label for="">Shift <span class="text-danger">*</span></label>
                                            <select name="shift" id="shiftDropdown">
                                                <option value="">Select Shift</option>
                                                @foreach ($shiftsList as $shift)
                                                    <option value="{{ $shift['shift_name'] }}">
                                                        {{ $shift['shift_name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div><br><br>

                                    </div>

                                    <div class="row mt-3 mb-4">

                                        <div class="col-12 col-md-6 col-lg-4">
                                            <label for="">Section<span class="text-danger">*</span></label>
                                            <select name="section" id="sectionDropdown">
                                                <option value="">Select Section</option>
                                                @foreach ($sectionsList as $section)
                                                    <option value="{{ $section['section_name'] }}">
                                                        {{ $section['section_name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div><br><br>

                                        <div class="col-12 col-md-6 col-lg-4">
                                            <label for="">Student <span class="text-danger">*</span></label>
                                            <select name="student_id" id="studentIdDropdown">
                                                <option value="">Select Student</option>
                                                @foreach ($student_admissionList as $student)
                                                    <option value="{{ $student['StudentId'] }}">
                                                        {{ $student['StudentId'] }} - {{ $student['NameEnglish'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div><br><br>
                                    </div>

                                </div>

                            </div>

                            <p class="text-center no-print">
                                <button type="submit" class="btn btn-primary px-5">Search</button>
                            </p>
                        </form>


                        @if (isset($studentInfo))
                            <div class="d-flex justify-content-between mt-4 mb-5 no-print">
                                <button id="printBtn" onclick="printAdmissionForm()" class="print_btn"><i
                                        class="fa-solid fa-print"></i> Print</button>
                            </div>
                            <div class="testomonial search_result" id="routineData">

                                <div class="testomonialBox">

                                    <div class="testomonialTop">
                                        <h1>Learning Campus</h1>
                                        <p>Uttara, Uttarkhan Dhaka 1230</p>
                                        <p>Phone : 01234567890</p>
                                        <p>Email : learningcampus@gmail.com</p>
                                        <h2><span>Testomonial</span> </h2>
                                    </div>


                                    <div class="testomonialText">

                                        <p>
                                            <i>
                                                This is certify that <b>
                                                    {{ $studentInfo->NameEnglish }}
                                                </b>
                                                son/daughter of <b>
                                                    {{ $studentInfo->FatherName }}
                                                </b> and
                                                <b>
                                                    {{ $studentInfo->MotherName }}
                                                </b> , a student of this institute
                                                bearing ID No. <b>
                                                    {{ $studentInfo->StudentId }}
                                                </b> passed the
                                                annual examination of class <b>
                                                    {{ $studentInfo->Class }}
                                                </b> in
                                                <b>
                                                    {{ $studentInfo->Session }}
                                                </b> and secured <b>G.P.A
                                                    4.50</b> on scale of 5.00. His/her date of birth as recorded in
                                                his/her
                                                Registration Book is 11-Aug-2020 .
                                                To the best of my knowledge and belief he/she is a good student. During
                                                this
                                                study period he/she did not take part in any activities subversive of
                                                the
                                                state or discipline.
                                            </i>
                                        </p>
                                        <p>
                                            <i>I wish him/her every success in his/her life.</i>
                                        </p>
                                        <h6>
                                            <span>Date</span>
                                            <span>Signature of principal</span>
                                        </h6>
                                    </div>

                                </div>

                            </div>
                        @endif


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
    <script type="text/javascript" src="{{ asset('assets/js/axios.min.js') }}"></script>
</body>

</html>
