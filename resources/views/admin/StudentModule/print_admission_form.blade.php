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


                <div class="d-flex justify-content-between mt-4 mb-5 no-print">
                    <button id="printBtn" onclick="printAdmissionForm()" class="print_btn"><i
                            class="fa-solid fa-print"></i> Print</button>
                    <button id="downloadPdfBtn" class="print_btn"><i class="fa-solid fa-download"></i> Download</button>
                </div>

                <div class="admission_form">
                    <div class="adFormDiv" id="adFormDiv">
                        <img src="Logo _ Icon/preload2.png" class="copyright" alt="">
                        <div class="addFormTop">
                            <div class="adFormLogo">
                                {{-- <img src="{{ asset('images/example.jpg') }}" alt="Example Image"> --}}
                                <img src="{{ asset('assets/Logo_Icon/logo.png') }}" alt="Logo">
                            </div>
                            <div class="adFormTxt">
                                <h4>Learning Campus (Main Branch)</h4>
                                <a href="#">www.LearningCampus.com</a>
                                <p>Mirpur-1100, Dhaka</p>
                                <p>Mobile : 01234567890</p>
                                <h2>Admission Form for Session - 2023</h2>
                            </div>
                            <div class="adFormPicture">
                                <img src="assets/img/user-unknown.jpg" alt="">
                            </div>
                        </div>
                        <div class="adFormMid">
                            <h3>Academic Information (For office use only)</h3>

                            <div class="adField">
                                <div>
                                    <label for="">Session</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Medium</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">Shift</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Class</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">Group</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Section</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">Student ID</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Roll</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <h3>Personal Information</h3>

                            <div class="adField">
                                <div>
                                    <label for="">First Name</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Email</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">Last Name</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Mobile</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">DOB</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Blood Group</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">BR No</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Religion</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                            <br>

                            <div class="adField">
                                <div>
                                    <label for="">Gender</label>
                                    <input type="checkbox" name="" id="check">Male
                                    &nbsp <input type="checkbox" name="" id="check">Female
                                </div>
                                <div>
                                    <label for="">Nationality</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <h3>Parents Information</h3>

                            <div class="adField">
                                <div>
                                    <label for="">Father's Name</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Mother's Name</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">Father's NID</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Mother's NID</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">Father's Profession</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Mother's Profession</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">Father's Phone</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Mother's Phone</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <h3>Guardian Information</h3>

                            <div class="adField">
                                <div>
                                    <label for="">Gaurdian's Name</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Guardian Phone</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">Relation With Student</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Guardian's Profession</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <h3>Contact Information</h3>

                            <div class="adField">
                                <div>
                                    <label for="">Present Address</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Permanant Address</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for=""></label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for=""></label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                        </div>

                        <div class="adFormBottom">
                            <h5>Signature of Student</h5>
                            <h5>Signature of Guardian</h5>
                            <h5>Signature of Teacher</h5>
                        </div>
                    </div>
                </div>

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
    <script>
        document.getElementById('downloadPdfBtn').addEventListener('click', function() {
            // Create a new jsPDF instance
            const pdf = new jsPDF();

            // Define the element to capture as a base64 image
            const formElement = document.querySelector('.admission_form');

            // Convert the form element to a canvas
            html2canvas(formElement)
                .then(canvas => {
                    // Convert the canvas to a base64 image
                    const imgData = canvas.toDataURL('image/png');

                    // Add the image to the PDF
                    pdf.addImage(imgData, 'PNG', 10, 10, 190, 0);

                    // Save the PDF
                    pdf.save('admission_form.pdf');
                });
        });
    </script>


    @include('layouts.inc.footer')
    <script>
        $('#example').tooltip(options);
    </script>
</body>

</html>
