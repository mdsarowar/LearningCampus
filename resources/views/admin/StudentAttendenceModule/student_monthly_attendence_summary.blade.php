<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head class="no-print">
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
    <aside id="sidebar" class="u-sidebar">
        @include('layouts.inc.sidebar')
    </aside>
<!-- End Sidebar -->
<div class="u-content">
    <div class="u-body">
        <section class="es-form-area">
            <div class="card ">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center no-print">
                    <h2 class="text-white mb-0">Student Attendence Summary Monthly</h2>
                </header>
                
<div class="academic_info student_search no-print">
<form action="{{route("montly.attendence.search")}}" method="post" class="no-print">
    @csrf
    <div class="container">

        <div class="row mt-3 mb-4">
            
            <div class="col-12 col-md-6 col-lg-4">
                <label for="">Session <span class="text-danger">*</span></label>
                <select name="session" id="session">
                    @foreach ($sessionList as $session)
                <option value="{{$session['session_name']}}">{{$session['session_name']}}</option>
                @endforeach
                </select>
            </div> <br><br>

            <div class="col-12 col-md-6 col-lg-4">
                <label for="">Class Name <span class="text-danger">*</span></label>
                <select name="class" id="class">
                                
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
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <label for="shift">Shift <span class="text-danger">*</span></label>
                <select name="shift" id="shift">
                    <option >Select Shift</option>
                    @foreach ($shiftsList as $shift)
                            <option value="{{ $shift['shift_name'] }}">
                                {{ $shift['shift_name'] }}</option>
                        @endforeach
                </select>
            </div> <br><br>

        </div>

        <div class="row mt-3 mb-4">
            
            <div class="col-12 col-md-6 col-lg-4">
                <label for="section">Section <span class="text-danger">*</span></label>
                <select name="section" id="section">
                    <option value="">Select Section</option>
                    @foreach ($sectionsList as $section)
                            <option value="{{ $section['section_name'] }}">
                                {{ $section['section_name'] }}</option>
                        @endforeach
                </select>
            </div> <br><br>

            <div class="col-12 col-md-6 col-lg-4">
                <label for="">From Dete <span class="text-danger">*</span></label>
                <input type="date" name="form_date" id="">
            </div> <br><br>

            <div class="col-12 col-md-6 col-lg-4">
                <label for="date">To Date <span class="text-danger">*</span></label>
                <input type="date" name="to_date" id="date">
            </div>

        </div>

    </div>

    </div>

    <p class="text-center no-print">
        <button type="submit" id="searchAttendance" class="btn btn-primary">Submit</button>
    </p>   
</form>

<div class="container no-print">
    <div class="d-flex justify-content-between mt-5">
        <a href="{{route("student.monthly.attendence.download")}}" class="print_btn"><i class="fa-solid fa-download"></i>  Download</a>
        
    </div>
</div>


        <div class="attendence_summary" id="invoice">
            <div class="attendence_summary_top text-center">
                <h1>Learning Campus (Main Branch)</h1>
                <a href="#">www.LearningCampus.com</a>
                <p>Mirpur-3, Dhaka</p>
                <h3>Monthly Attendance Summary (March 31 2022)</h3>
            </div>

            <div class="attendence_summary_mid table-responsive">
                <!---- student table  ----->
                <table class="table table-bordered mt-3 text-center">
                    <thead class="table-bordered">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Class</th>
                            <th scope="col">Roll</th>
                            <th scope="col">Shift</th>
                            <th scope="col">Section</th>
                            <th scope="col"><span style="color: green;">Attend</span>  / <span style="color: red;">Absent</span></th>
                            <th scope="col"><span style="color: green;">IN</span></th>
                            <th scope="col"><span style="color: red;">OUT</span></th>
                            <th scope="col">Middle Punches</th>
                            <th scope="col" ><span style="background-color: green;color: white;padding: 8px 14px;font-weight: 600;">G</span></th>
                            <th scope="col"><span style="background-color: yellow;color: white;padding: 8px 14px;font-weight: 600;">Y</span></th>
                            <th scope="col"><span style="background-color: red;color: white;padding: 8px 14px;font-weight: 600;">R</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$student->student_id}}</td>
                            <td>
                                <img src="assets/img/student.png" class="curentStuImage" alt="">
                                <br><a href="#">{{$student->name}}</a>
                            </td>
                            <td>{{$student->class}}</td>
                            <td>{{$student->roll}}</td>
                            <td>{{$student->shift}}</td>
                            <td>{{$student->section}}</td>
                            @if ($student->absent_status == 1 )
                                <td style="color: red; "> <i class="fa-solid fa-xmark"></i> </td>
                                @else
                                <td style="color: green; "> <i class="fa-solid fa-check"></i> </td>
                                @endif
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
</section>

</div>
</div>
</main>

<!-- Global Vendor -->
<script>
    function printMontlyAttendence() {
            window.print();
        }

</script>

<script>
    window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'montly-attendece.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
</script>

@include('layouts.inc.footer')
<script>
    $().button('toggle')
</script>
</body>
</html>