<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->


<head>
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
                            <h2 class="text-white mb-0">Student Migration</h2>
                        </header>
                        <form action="{{ route('migration.student.update') }}" method="POST">
                            @csrf

                            <div class="migrate_div">
                                <h6 class="warning">
                                    <i class="fa-solid fa-circle-info"></i> Warning ! Please select Migrated From
                                    (Current
                                    Session) & Migrated To (New Session) carefully ! Otherwise you have to manually.
                                </h6>


                                <div class="row">

                                    <div class="col-12 col-md-6">
                                        <div class="migrate_left">
                                            <h4>Migrate From</h4>

                                            <div>
                                                <label for="">Session <span>*</span></label>
                                                <select name="from_session" id="">
                                                    <option value="">Select Session</option>
                                                    @foreach ($sessionsList as $session)
                                                        <option value="{{ $session['session_name'] }}">
                                                            {{ $session['session_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div>
                                                <label for="">Class <span>*</span></label>
                                                <select name="from_class" id="">
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

                                            <div>
                                                <label for="">Shift <span>*</span></label>
                                                <select name="from_shift" id="">
                                                    <option value="">Select Shift</option>
                                                    @foreach ($shiftsList as $shift)
                                                        <option value="{{ $shift['shift_name'] }}">
                                                            {{ $shift['shift_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div>
                                                <label for="">Section <span>*</span></label>
                                                <select name="from_section" id="">
                                                    <option value="">Select Section</option>
                                                    @foreach ($sectionsList as $section)
                                                        <option value="{{ $section['section_name'] }}">
                                                            {{ $section['section_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="migrate_left">
                                            <h4>Migrate To</h4>

                                            <div>
                                                <label for="">Migrated Session <span>*</span></label>
                                                <select name="to_session" id="">
                                                    <option value="">Select Session</option>
                                                    @foreach ($sessionsList as $session)
                                                        <option value="{{ $session['session_name'] }}">
                                                            {{ $session['session_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div>
                                                <label for="">Migrated Class <span>*</span></label>
                                                <select name="to_class" id="">
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

                                            <div>
                                                <label for="">Migrated Shift <span>*</span></label>
                                                <select name="to_shift" id="">
                                                    <option value="">Select Shift</option>
                                                    @foreach ($shiftsList as $shift)
                                                        <option value="{{ $shift['shift_name'] }}">
                                                            {{ $shift['shift_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div>
                                                <label for="">Migrated Section <span>*</span></label>
                                                <select name="to_section" id="">
                                                    <option value="">Select Section</option>
                                                    @foreach ($sectionsList as $section)
                                                        <option value="{{ $section['section_name'] }}">
                                                            {{ $section['section_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center mt-5 mb-5">
                                <button type="submit" class="btn btn-primary px-5">Review Migration</button>
                            </p>
                        </form>


                        <div class="search_result table-responsive">
                            <div class="attendence_summary">

                                <div class="attendence_summary_top text-center">
                                    <h1>Learning Campus (Main Branch)</h1>
                                    <a href="#">www.LearningCampus.com</a>
                                    <p>Mirpur-3, Dhaka</p>
                                    <h3>Student Migration List (Class 7)</h3>
                                </div>

                                <div class="attendence_summary_mid table-responsive">
                                    <a href="#" class="print_btn"><i class="fa-solid fa-print"></i> Print</a>
                                    <!---- student table  ----->
                                    <table class="table table-bordered mt-3 text-center">
                                        <thead class="table-bordered">
                                            <tr>
                                                <th scope="col">SL</th>
                                                <th scope="col">ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">From</th>
                                                <th scope="col">To</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($current_studentsList as $student)
                                                @if ($student['migrated_session'])
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $student['StudentId'] }}</td>
                                                        <td>
                                                            <img src="assets/img/student.png" class="curentStuImage"
                                                                alt="">
                                                            <br><a href="#">{{ $student['NameEnglish'] }}</a>
                                                        </td>
                                                        <td> {{ $student['Class'] }}</td>
                                                        <td> {{ $student['migrated_class'] }} </td>
                                                    </tr>
                                                @endif
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

    <!-- Global Vendor -->

    @include('layouts.inc.footer')
    <script>
        $().button('toggle')
    </script>
</body>

</html>
