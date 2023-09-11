<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->


<head>
    <title>Learning Campus | Dynamic Routine</title>
    @include('layouts.inc.head')
</head>
<!-- End Head -->

<body>

    <!----- preloader ----->
    @include('layouts.inc.preloader')
    <!----- /preloader ----->




    <!-- Header (Topbar) -->
    <header class="u-header">
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
                            <h2 class="text-white mb-0">Dynamic Routine</h2>
                        </header>

                        {{-- form submission message start --}}
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
                        {{-- form submission message end --}}

                        <div class="branch_edit">
                            <div class="row">

                                <div class="col-md-10 mb-3">
                                    <label for="">Class <span>*</span></label>
                                    <select class="class" name="" id="" required>
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
                                    <select class="class_shift" name="" id="" required>
                                        <option value="">Select Shift</option>
                                        @foreach ($shiftsList as $shift)
                                            <option value="{{ $shift['shift_name'] }}">
                                                {{ $shift['shift_name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-10 mb-3">
                                    <label for="">Section <span>*</span></label>
                                    <select class="section" name="" id="" required>
                                        <option value="">Select Section</option>
                                        @foreach ($sectionsList as $section)
                                            <option value="{{ $section['section_name'] }}">
                                                {{ $section['section_name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>


                            <div class="routineShort table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Day</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Saturday</td>
                                            <td>

                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal" onclick="fillRoutineDay('Saturday')">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sunday</td>
                                            <td>

                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal" onclick="fillRoutineDay('Sunday')">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Monday</td>
                                            <td>

                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal" onclick="fillRoutineDay('Monday')">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tuesday</td>
                                            <td>

                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal" onclick="fillRoutineDay('Tuesday')">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Wednesday</td>
                                            <td>

                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal" onclick="fillRoutineDay('Wednesday')">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Thursday</td>
                                            <td>

                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal" onclick="fillRoutineDay('Thursday')">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Friday</td>
                                            <td>

                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal" onclick="fillRoutineDay('Friday')">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!-- Global Vendor -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-table"></i> Create Routine
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ route('dynamic.routine.submit') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <input type="hidden" name="class" id="class">
                        <input type="hidden" name="shift_name" id="class_shift">
                        <input type="hidden" name="section" id="section">
                        <br>
                        <label for="routine_day">Routine Day</label>
                        <input type="text" name="routine_day" id="routine_day" value="" readonly><br>

                        <label for="">Start Time</label>
                        <input type="time" name="start_time" id="" required><br>

                        <label for="">End Time</label>
                        <input type="time" name="end_time" id="" required><br>

                        <label for="check">Break/Tiffin</label>
                        <p class="rad_text">
                            <input class="showBreakTime" type="radio" name="break_time" id="check"
                                value="yes" onchange="showBreakTime()">
                            <b>Yes</b>
                        </p> &nbsp; &nbsp;
                        <p class="rad_text">
                            <input class="hideBreakTime" type="radio" name="break_time" id="check"
                                value="no" onchange="hideBreakTime()">
                            <b>No</b>
                        </p>
                        <br>

                        <div id="break_time_box"
                            style="display: none !important; margin: 0 auto; margin-bottom: 15px; width: 80%">
                            <div style="display: flex; justify-content: space-between;">
                                <div style="width: 48%; margin: 0">
                                    <label for="">Start Time</label>
                                    <input type="time" name="start_break_time" id=""
                                        style="width: 100%; margin: 0">
                                </div>
                                <div style="width: 48%; margin: 0">
                                    <label for="">End Time</label>
                                    <input type="time" name="end_break_time" id=""
                                        style="width: 100%; margin: 0">
                                </div>
                            </div>
                        </div>


                        <label for="">Subject <span>*</span></label>
                        <select name="subject_name" id="">
                            <option value="" required>Select Subject</option>
                            @foreach ($subjectsList as $subject)
                                <option value="{{ $subject['subject_name'] }}">
                                    {{ $subject['subject_name'] }}</option>
                            @endforeach
                        </select><br>

                        <label for="">Teacher <span>*</span></label>
                        <select name="teacher_name" id="">
                            <option value="" required>Select Teacher</option>
                            @foreach ($teachersList as $teacher)
                                <option value="{{ $teacher['teacher_name'] }}">
                                    {{ $teacher['teacher_name'] }}</option>
                            @endforeach
                        </select><br>

                        <label for="">Status <span>*</span></label>
                        <select name="status" id="" required>
                            <option value="">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select><br>
                    </div>
                    <div class="modal-footer">
                        <button type="clear" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <script>
        function showBreakTime() {
            let break_time_box = document.querySelector('#break_time_box');
            break_time_box.style.display = 'block';
        }

        function hideBreakTime() {
            let break_time_box = document.querySelector('#break_time_box');
            break_time_box.style.display = 'none';
        }


        function fillRoutineDay(day) {
            var routineDayInput = document.getElementById("routine_day");
            var selectedClass = document.querySelector('.class');
            var selectedClassShift = document.querySelector('.class_shift');
            var selectedSection = document.querySelector('.section');

            // Assuming you want to set the values of the hidden inputs
            document.getElementById("class").value = selectedClass.value;
            document.getElementById("class_shift").value = selectedClassShift.value;
            document.getElementById("section").value = selectedSection.value;

            routineDayInput.value = day;
        }
    </script>

    @include('layouts.inc.footer')
</body>

</html>
