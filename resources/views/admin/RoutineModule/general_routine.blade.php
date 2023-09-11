<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Learning Campus | General Routine</title>
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
                            <h2 class="text-white mb-0">General Routine</h2>
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
                            <form action="{{ route('general.routine.submit') }}" method="post">
                                @csrf
                                <div class="row">

                                    <div class="col-md-10 mb-3">
                                        <label for="class">Class <span>*</span></label>
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
                                        <label for="class_shift">Shift <span>*</span></label>
                                        <select name="shift_name" id="class_shift" required>
                                            <option value="">Select Shift</option>
                                            @foreach ($shiftsList as $shift)
                                                <option value="{{ $shift['shift_name'] }}">
                                                    {{ $shift['shift_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="section">Section <span>*</span></label>
                                        <select name="section" id="section" required>
                                            <option value="">Select Section</option>
                                            @foreach ($sectionsList as $section)
                                                <option value="{{ $section['section_name'] }}">
                                                    {{ $section['section_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="routine_day">Routine Day <span>*</span></label>
                                        <select name="routine_day" id="routine_day" required>
                                            <option value="">Select Routine Day</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="start_time">Start Time<span>*</span></label>
                                        <input type="time" name="start_time" id="start_time" required>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="end_time">End Time<span>*</span></label>
                                        <input type="time" name="end_time" id="end_time" required>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label>Break / Tiffin ? <span>*</span></label>
                                        <p class="rad_text">
                                            <input class="showBreakTime" name="break_time" value="yes" type="radio"
                                                id="check" onchange="showBreakTime()">
                                            <b>Yes</b>
                                        </p> &nbsp; &nbsp;
                                        <p class="rad_text">
                                            <input class="hideBreakTime" name="break_time" value="no" type="radio"
                                                id="check" onchange="hideBreakTime()">
                                            <b>No</b>
                                        </p>

                                        <div id="break_time_box" style="display: none !important">
                                            <div style="width: 84%; margin: 0 auto;">
                                                <div style="margin: 8px auto; text-align: right">
                                                    <label for="">Start Break Time</label>
                                                    <input type="time" name="start_break_time" id=""
                                                        style="margin-left: 2%; width: 50%">
                                                </div>
                                                <div style="margin: 8px auto; text-align: right">
                                                    <label for="">End Break Time</label>
                                                    <input type="time" name="end_break_time" id=""
                                                        style="margin-left: 2%; width: 50%">
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                    <div class="col-md-10 mb-3">
                                        <label for="subject">Subject <span>*</span></label>
                                        <select name="subject_name" id="subject" required>
                                            <option value="">Select Subject</option>
                                            @foreach ($subjectsList as $subject)
                                                <option value="{{ $subject['subject_name'] }}">
                                                    {{ $subject['subject_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="teacher">Teacher <span>*</span></label>
                                        <select name="teacher_name" id="teacher" required>
                                            <option value="">Select Teacher</option>
                                            @foreach ($teachersList as $teacher)
                                                <option value="{{ $teacher['teacher_name'] }}">
                                                    {{ $teacher['teacher_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="status">Status <span>*</span></label>
                                        <select name="status" id="status" required>
                                            <option value="">Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>



                                    <div class="col-md-10 mt-4 mb-3">
                                        <p>
                                            <button type="submit"
                                                class="btn bg-gradient border-0 text-white">Save</button>
                                            <button type="clear"
                                                class="btn cancel_btn border-0 text-white">Cancel</button>
                                        </p>
                                    </div>

                            </form>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </main>

    <script>
        function showBreakTime() {
            let break_time_box = document.querySelector('#break_time_box');
            break_time_box.style.display = 'block';
        }

        function hideBreakTime() {
            let break_time_box = document.querySelector('#break_time_box');
            break_time_box.style.display = 'none';
        }
    </script>

    @include('layouts.inc.footer')
</body>

</html>
