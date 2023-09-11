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
                            <h2 class="text-white mb-0">Add Subject</h2>
                        </header>

                        {{-- form submission message start --}}
                        @if (session('error'))
                            <div class="alert alert-danger col-8 m-auto text-center">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success col-8 m-auto text-center">
                                {{ session('success') }}
                            </div>
                        @endif
                        {{-- form submission message end --}}

                        <form action="{{ route('add_subject_submit') }}" method="POST">
                            @csrf
                            <div class="session_add">
                                <div class="row">

                                    <div class="col-md-10 mb-3">
                                        <label for="">Class Name <span>*</span></label>
                                        <select name="class_name" id="" required>
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
                                        <label for="">Group <span>*</span></label>
                                        <select name="group_name" id="" required>
                                            <option value="">Select Group</option>
                                            <option value="None">None</option>
                                            @foreach ($groupsList as $group)
                                                <option value="{{ $group['group_name'] }}">{{ $group['group_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Subject Name <span>*</span></label>
                                        <input type="text" placeholder="eg: Mathemetics" name="subject_name" id="" required>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Combined With <span>*</span></label>
                                        <select name="combined_subject" id="">
                                            <option value="">Select Subject</option>
                                            <option value="None">None</option>
                                            @foreach ($subjectsList as $subject)
                                                <option value="{{ $subject['subject_name'] }}">{{ $subject['subject_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Subject Type <span>*</span></label>
                                        <select name="subject_type" id="" required>
                                            <option value="">Select Type</option>
                                            <option value="Compulsory">Compulsory</option>
                                            <option value="Optional">Optional</option>
                                            <option value="Continuous_Assesment">Continuous Assesment</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Subject Code <span>*</span></label>
                                        <input type="number" placeholder="eg: 12345" name="subject_code" id="" required>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Full Marks <span>*</span></label>
                                        <input type="number" placeholder="eg: 100" name="full_marks" id="" required>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Result Type ? <span>*</span></label>
                                        <p class="rad_text">
                                            <input type="radio" value="Percentage_Terms" name="result_type" id="check">
                                            <b>Percentage (Terms)</b>
                                        </p> &nbsp; &nbsp;
                                        <p class="rad_text">
                                            <input type="radio" value="Average_Terms" name="result_type" id="check">
                                            <b>Average (Terms)</b>
                                        </p>
                                        <p class="rad_text">
                                            <input type="radio" value="Average_Subjects" name="result_type" id="check">
                                            <b>Average (Subjects)</b>
                                        </p>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Status <span>*</span></label>
                                        <select name="status" id="" required>
                                            <option value="">Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mt-4 mb-3">
                                        <p>
                                            <button type="submit" class="btn bg-gradient border-0 text-white">Create</button>
                                            <a class="btn  cancel_btn border-0 text-white">Cancel</a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </section>

            </div>
        </div>
    </main>

    <!-- Global Vendor -->

    @include('layouts.inc.footer')

</body>

</html>
