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
    <main class="u-main " role="main">
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
                                Student Details
                            </h2>
                        </header>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">
                                <a href="{{ route('archive.students.add') }}" class="btn btn-primary no-print"><i
                                        class="fa-solid fa-plus"></i></a>
                                <a href="{{ route('archive.student.edit', ['id' => $student->id]) }}"
                                    class="btn btn-primary no-print"><i class="fa-solid fa-pen"></i></a>
                                <a id="printBtn" onclick="printAdmissionForm()"
                                    class="print_btn btn btn-primary no-print"><i class="fa-solid fa-print"></i></a>

                                <div class="studentDetTable">
                                    <div class="student_details">

                                        <img src="Logo _ Icon/preload2.png" class="copyright" alt="">

                                        <div class="stuDetTop">
                                            <div>
                                                <h3>{{ $student->NameEnglish }}</h3>
                                                <p>Address : {{ $student->PresentAddress }}</p>
                                                <p>Student's Mobile : {{ $student->Mobile }}</p>
                                                <p>Guardian Mobile : {{ $student->FatherPhone }}</p>
                                                <p>Email : {{ $student->Email }}</p>
                                                <p>Session : {{ $student->Session }}</p>
                                            </div>
                                            <div>
                                                {{-- <img src="assets/img/student.png" alt=""> --}}
                                                <img src="{{ asset($student->Photo) }}" class="curentStuImage"
                                                    alt="Student Image">
                                            </div>
                                        </div>

                                        <div class="stuDetMid">
                                            <div class="table-responsive">
                                                <h2>Academic Information</h2>

                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Medium</th>
                                                            <th scope="col">English Medium</th>
                                                            <th scope="col">Shift</th>
                                                            <th scope="col">{{ $student->Shift }}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Class</th>
                                                            <td>{{ $student->Class }}</td>
                                                            <td>Section</td>
                                                            <td>{{ $student->Section }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Roll</th>
                                                            <td>{{ $student->NameEnglish }}</td>
                                                            <td>Device ID</td>
                                                            <td>{{ $student->NameEnglish }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Finger ID</th>
                                                            <td>{{ $student->NameEnglish }}</td>
                                                            <td>Card No</td>
                                                            <td>{{ $student->NameEnglish }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>


                                            <div class="table-responsive">
                                                <h2>Personal Information</h2>

                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Student's Name</th>
                                                            <th scope="col">{{ $student->NameEnglish }}</th>
                                                            <th scope="col">Student's ID</th>
                                                            <th scope="col">{{ $student->StudentId }}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Date of Birth</th>
                                                            <td>{{ $student->DateOfBirth }}</td>
                                                            <td>Gender</td>
                                                            <td>{{ $student->Gender }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Religion</th>
                                                            <td>{{ $student->Religion }}</td>
                                                            <td>Birth Reginstraion No</td>
                                                            <td>{{ $student->NameEnglish }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Blood Group</th>
                                                            <td>{{ $student->BloodGroup }}</td>
                                                            <td>Nationality</td>
                                                            <td>{{ $student->Nationality }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="table-responsive">
                                                <h2>Contact Information</h2>

                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Present Address</th>
                                                            <td>{{ $student->PresentAddress }}</td>
                                                            <td>Permanant Address</td>
                                                            <td>{{ $student->ParmanantAddress }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Mobile</th>
                                                            <td>{{ $student->FatherPhone }}</td>
                                                            <td>Email</td>
                                                            <td>{{ $student->Email }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="table-responsive">
                                                <h2>Parents Information</h2>

                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Father's Name</th>
                                                            <td>{{ $student->FatherName }}</td>
                                                            <td>Mother's Name</td>
                                                            <td>{{ $student->MotherName }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Father's Mobile</th>
                                                            <td>{{ $student->FatherPhone }}</td>
                                                            <td>Mother's Mobile</td>
                                                            <td>{{ $student->MotherPhone }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Father's Profession</th>
                                                            <td>{{ $student->FatherProfession }}</td>
                                                            <td>Mother's Profession</td>
                                                            <td>{{ $student->MotherProfession }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Father's NID</th>
                                                            <td>{{ $student->FatherNID }}</td>
                                                            <td>Mother's NID</td>
                                                            <td>{{ $student->MotherNID }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Father's Designation</th>
                                                            <td>{{ $student->FatherDesignation }}</td>
                                                            <td>Mother's Designation</td>
                                                            <td>{{ $student->MotherDesignation }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Father's Office Name & Address</th>
                                                            <td>{{ $student->OfficeNameAddressFather }}</td>
                                                            <td>Mother's Office Name & Address</td>
                                                            <td>{{ $student->OfficeNameAddressMother }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Father's Office Contact No</th>
                                                            <td>{{ $student->FatherOfficeContactNo }}</td>
                                                            <td>Mother's Office Contact No</td>
                                                            <td>{{ $student->MotherOfficeContactNo }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="table-responsive">
                                                <h2>Guardian / Receiver Information</h2>

                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Name</th>
                                                            <td>{{ $student->GuardianName }}</td>
                                                            <td>Phone</td>
                                                            <td>{{ $student->GuardianOfficeContactNo }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Profession</th>
                                                            <td>{{ $student->GuardianProfession }}</td>
                                                            <td>Designation</td>
                                                            <td>{{ $student->GuardianDesignation }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Office Name & Address</th>
                                                            <td>{{ $student->OfficeNameAddress }}</td>
                                                            <td>Office Contact No</td>
                                                            <td>{{ $student->GuardianOfficeContactNo }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Relation with Student</th>
                                                            <td>{{ $student->RelationWithStudent }}</td>
                                                            <td>Status</td>
                                                            <td>{{ $student->Status }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Created At</th>
                                                            <td>{{ $student->created_at }}</td>
                                                            <td>Modified At</td>
                                                            <td>{{ $student->updated_at }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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

</body>

</html>
