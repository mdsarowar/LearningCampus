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
                            <h2 class="text-white mb-0">Update Subject</h2>
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

                        <div class="session_add">

                            <div class="session_view_link mt-1 ml-1 mb-5">
                                <a href="{{ route('add_subject') }}" class="btn btn-primary"><i
                                        class="fa-solid fa-plus"></i></a>
                                <a href="{{ route('view_subject') }}?subject_id={{ $subjectInfo[0]['subject_id'] }}"
                                    class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                            </div>

                            <form action="{{ route('edit_subject_submit') }}" method="POST">
                                @csrf
                                <input type="hidden" name="subject_id" value="{{ $subjectInfo[0]['subject_id'] }}">
                                <input type="hidden" name="current_subject_name" value="{{ $subjectInfo[0]['subject_name'] }}">
                                <input type="hidden" name="current_class_name" value="{{ $subjectInfo[0]['class_name'] }}">
                                <input type="hidden" name="current_group_name" value="{{ $subjectInfo[0]['group_name'] }}">
                                <input type="hidden" name="current_class_type" value="{{ $subjectInfo[0]['class_type'] }}">
                                <input type="hidden" name="current_combined_subject" value="{{ $subjectInfo[0]['combined_subject'] }}">
                                <input type="hidden" name="current_subject_code" value="{{ $subjectInfo[0]['subject_code'] }}">
                                <input type="hidden" name="current_full_marks" value="{{ $subjectInfo[0]['full_marks'] }}">
                                <input type="hidden" name="current_result_type" value="{{ $subjectInfo[0]['result_type'] }}">
                                <input type="hidden" name="current_status" value="{{ $subjectInfo[0]['status'] }}">

                                <div class="row">

                                    <div class="col-md-10 mb-3">
                                        <label for="">Class Name <span>*</span></label>
                                        <select name="class_name" id="">
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
                                        <select name="group_name" id="">
                                            <option value="">Select Group</option>
                                            <option value="None">None</option>
                                            @foreach ($groupsList as $group)
                                                <option value="{{ $group['group_name'] }}">{{ $group['group_name'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Subject Name <span>*</span></label>
                                        <input type="text" placeholder="eg: Mathemetics"
                                            value="{{ $subjectInfo[0]['subject_name'] }}" name="subject_name"
                                            id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Combined With <span>*</span></label>
                                        <select name="combined_subject" id="">
                                            <option value="">Select Subject</option>
                                            <option value="None">None</option>
                                            @foreach ($subjectsList as $subject)
                                                <option value="{{ $subject['combined_subject'] }}">
                                                    {{ $subject['combined_subject'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Subject Code <span>*</span></label>
                                        <input type="number" placeholder="eg: 12345"
                                            value="{{ $subjectInfo[0]['subject_code'] }}" name="subject_code"
                                            id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Full Marks <span>*</span></label>
                                        <input type="number" placeholder="eg: 100"
                                            value="{{ $subjectInfo[0]['full_marks'] }}" name="full_marks"
                                            id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Result Type ? <span>*</span></label>
                                        <p class="rad_text">
                                            <input type="radio" value="Percentage_Terms" name="result_type"
                                                id="check">
                                            <b>Percentage (Terms)</b>
                                        </p> &nbsp; &nbsp;
                                        <p class="rad_text">
                                            <input type="radio" value="Average_Terms" name="result_type"
                                                id="check">
                                            <b>Average (Terms)</b>
                                        </p>
                                        <p class="rad_text">
                                            <input type="radio" value="Average_Subjects" name="result_type"
                                                id="check">
                                            <b>Average (Subjects)</b>
                                        </p>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Status <span>*</span></label>
                                        <select name="status" id="">
                                            <option value="">Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mt-4 mb-3">
                                        <p>
                                            <button type="submit"
                                                class="btn bg-gradient border-0 text-white">Update</button>
                                            <button type="clear"
                                                class="btn  cancel_btn border-0 text-white">Cancel</button>
                                        </p>
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

    @include('layouts.inc.footer')
</body>

</html>
