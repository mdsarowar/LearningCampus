<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->


<head>
    <title>Print Routine</title>
    @include('layouts.inc.head')

    <style type="text/css">
        @media print {
            #routineData {
                -webkit-print-color-adjust: exact !important;
                color-adjust: exact !important;
                margin: 0 !important;
            }

            .card {
                position: absolute !important;
                transform: translate(-25%, 0) !important;
                width: 120% !important;
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
                        <header class="no-print card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                            <h2 class="text-white mb-0">Print Routine</h2>
                        </header>
                        <div class="branch_edit">

                            <form action="{{ route('print.routine.submit') }}" method="POST" class="no-print">
                                @csrf
                                <div class="row">

                                    <div class="col-md-10 mb-3">
                                        <label for="">Class <span>*</span></label>
                                        <select name="class" id="class" required>
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

                                    <div class="col-md-10 mb-3">
                                        <label for="">Shift <span>*</span></label>
                                        <select name="shift_name" id="class_shift" required>
                                            <option value="">Select Shift</option>
                                            @foreach ($shiftsList as $shift)
                                                <option value="{{ $shift['shift_name'] }}">
                                                    {{ $shift['shift_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Section <span>*</span></label>
                                        <select name="section" id="section" required>
                                            <option value="">Select Section</option>
                                            @foreach ($sectionsList as $section)
                                                <option value="{{ $section['section_name'] }}">
                                                    {{ $section['section_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- <div class="col-md-10 mb-3">
                                        <label for="">Routine Type<span>*</span></label>
                                        <p class="rad_text">
                                            <input type="radio" name="a" id="check">
                                            <b>Time Slot At (Top)</b>
                                        </p> &nbsp; &nbsp;
                                        <p class="rad_text">
                                            <input type="radio" name="a" id="check">
                                            <b>Time Slot (Inner)</b>
                                        </p>
                                    </div> --}}


                                    <div class="col-md-10 mt-4 mb-3">
                                        <p>
                                            <button type="submit" class="btn bg-gradient border-0 text-white">View
                                                Routine</button>
                                            <button type="clear"
                                                class="btn  cancel_btn border-0 text-white">Cancel</button>
                                        </p>
                                    </div>

                                </div>
                            </form>

                            <div class="search_result table-responsive">

                                <div class="d-flex justify-content-between no-print">
                                    <button class="print_btn" id="btnDownloadRoutine" style="visibility: hidden"><i
                                            class="fa-solid fa-download"></i> Download</button>
                                    <button class="print_btn" onclick="printRoutine()"><i class="fa-solid fa-print"></i>
                                        Print</button>
                                </div>

                                @if (isset($routineData))
                                    <div id="routineData">

                                        <div>
                                            <h1 style="font-size: 1.8rem">Learning Campus (Main Branch)</h1>
                                            <p style="color: black">www.larningcampus.com <br> Mirpur-3, Dhaka</p>
                                        </div>

                                        <div>
                                            <br>
                                            <h2 style="font-size: 1.6rem">Class Routine</h2>
                                            {{-- <table class="m-auto" width="200px">
                                                <tr style="font-size:1.2rem">
                                                    <th class="text-right">Class</th>
                                                    <td class="text-left">: {{ $routineData[0]['class_name'] }}</td>
                                                </tr>
                                                <tr style="font-size:1.2rem">
                                                    <th class="text-right">Medium</th>
                                                    <td class="text-left">: {{ $routineData[0]['class_type'] }}</td>
                                                </tr>
                                                <tr style="font-size:1.2rem">
                                                    <th class="text-right">Shift</th>
                                                    <td class="text-left">: {{ $routineData[0]['shift_name'] }}</td>
                                                </tr>
                                                <tr style="font-size:1.2rem">
                                                    <th class="text-right">Section</th>
                                                    <td class="text-left">: {{ $routineData[0]['section_name'] }}</td>
                                                </tr>
                                            </table> --}}
                                            <p><b>Class</b>: {{ $routineData[0]['class_name'] }},&nbsp;&nbsp;
                                                <b>Medium</b>: {{ $routineData[0]['class_type'] }},&nbsp;&nbsp;
                                                <b>Shift</b>: {{ $routineData[0]['shift_name'] }},&nbsp;&nbsp;
                                                <b>Section</b>: {{ $routineData[0]['section_name'] }}
                                            </p>
                                        </div>

                                        @php
                                            $days = [
                                                'Saturday' => 0,
                                                'Sunday' => 1,
                                                'Monday' => 2,
                                                'Tuesday' => 3,
                                                'Wednesday' => 4,
                                                'Thursday' => 5,
                                                'Friday' => 6,
                                            ];
                                            
                                            $displayedTimes = [];
                                            foreach ($routineData as $routine) {
                                                if (!in_array($routine['start_time'], $displayedTimes)) {
                                                    $displayedTimes[] = $routine['start_time'];
                                                }
                                            }
                                            
                                            $displayedTimes = array_unique($displayedTimes);
                                            sort($displayedTimes);
                                        @endphp

                                        <table class="table table-bordered mt-5">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Day</th>
                                                    @foreach ($displayedTimes as $displayedTime)
                                                        <th scope="col">
                                                            {{ $displayedTime }} -
                                                            @php
                                                                $matchingRoutine = null;
                                                                foreach ($routineData as $routine) {
                                                                    if ($routine['start_time'] === $displayedTime && $routine['status'] === '1') {
                                                                        $matchingRoutine = $routine;
                                                                        break;
                                                                    }
                                                                }
                                                                if ($matchingRoutine) {
                                                                    $endTime = date('h:i A', strtotime($matchingRoutine['end_time']));
                                                                } else {
                                                                    $endTime = date('h:i A', strtotime($displayedTime) + 90 * 60); // Add 90 minutes (1 hour and 30 minutes) to get end time
                                                                }
                                                                $matchingBreakRoutine = null;
                                                                foreach ($routineData as $routine) {
                                                                    if ($routine['start_time'] === $displayedTime && $routine['break_time'] === 'Yes') {
                                                                        $matchingBreakRoutine = $routine;
                                                                        break;
                                                                    }
                                                                }
                                                            @endphp
                                                            {{ $endTime }}
                                                        </th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody style="font-size: 8px !important">
                                                @foreach ($days as $dayName => $dayIndex)
                                                    @php
                                                        $routinesForDay = array_filter($routineData, function ($routine) use ($dayName) {
                                                            return $routine['routine_day'] === $dayName && $routine['status'] === '1';
                                                        });
                                                        usort($routinesForDay, function ($a, $b) {
                                                            return strtotime($a['start_time']) - strtotime($b['start_time']);
                                                        });
                                                    @endphp
                                                    @if (count($routinesForDay) > 0)
                                                        <tr>
                                                            <td>{{ $dayName }}</td>
                                                            @foreach ($displayedTimes as $displayedTime)
                                                                @php
                                                                    $matchingRoutine = null;
                                                                    foreach ($routinesForDay as $routine) {
                                                                        if ($routine['start_time'] === $displayedTime) {
                                                                            $matchingRoutine = $routine;
                                                                            break;
                                                                        }
                                                                    }
                                                                @endphp
                                                                <td>
                                                                    @if ($matchingRoutine)
                                                                        @if ($matchingRoutine['break_time'] === 'Yes')
                                                                            <b>{{ $matchingRoutine['subject_name'] }}</b>
                                                                            <br>
                                                                            {{ $matchingRoutine['teacher_name'] }}<br>

                                                                            {{-- break time --}}
                                                                            <b>
                                                                                {{ $matchingRoutine['start_break_time'] }}
                                                                                -
                                                                                {{ $matchingRoutine['end_break_time'] }}<br>
                                                                            </b>
                                                                            {{ \Carbon\Carbon::parse($matchingRoutine['start_break_time'])->diffInMinutes(\Carbon\Carbon::parse($matchingRoutine['end_break_time'])) }}
                                                                            mins break
                                                                        @else
                                                                            <b>{{ $matchingRoutine['subject_name'] }}</b>
                                                                            <br>
                                                                            {{ $matchingRoutine['teacher_name'] }}
                                                                        @endif
                                                                    @else
                                                                        -
                                                                    @endif
                                                                </td>
                                                            @endforeach
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                @else
                                    <p>{{ $message }}</p>
                                @endif

                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </main>

    <!-- Global Vendor -->
    <script>
        function printRoutine() {
            window.print();
        }
    </script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        window.onload = function() {
            document.getElementById("btnDownloadRoutine")
                .addEventListener("click", () => {
                    const routineData = this.document.getElementById("routineData");
                    var opt = {
                        margin: 1,
                        filename: 'Routine.pdf',
                        image: {
                            type: 'jpeg',
                            quality: 0.98
                        },
                        html2canvas: {
                            scale: 3
                        },
                        jsPDF: {
                            unit: 'in',
                            format: 'a4',
                            orientation: 'portrait'
                        }
                    };
                    html2pdf().from(routineData).set(opt).save();
                })
        }
    </script> --}}


    @include('layouts.inc.footer')
</body>

</html>
