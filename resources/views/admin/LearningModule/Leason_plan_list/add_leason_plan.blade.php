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
                            <h2 class="text-white mb-0">Add Lesson Plan</h2>
                        </header>

                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Learning Module</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('manage.leason.plan') }}">Lesson PLan</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Add Lesson PLan</a></li>
                        </ul>

                        <div class="card-body">
                        @if(session('success'))
                            <span style="color:green; font-size:30px; padding-left: 100px;">{{ session('success') }}</span>
                        @endif
                            <form action="{{ route('leason.plan.post') }}" method="POST" enctype="multipart/form-data" class="es-form es-add-form">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="">Class <span>*</span></label>
                                        <select name="class_name" id="" class="es-add-select"
                                            style="display: none;">
                                            <option data-display="Select">Select Class</option>
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

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Shift <span>*</span> </label>
                                        <select name="shift" id="day" class="es-add-select"
                                            style="display: none;">
                                            <option value="">Select Shift</option>
                                            <option value="Morning">Morning</option>
                                            <option value="Day">Day</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Section <span>*</span></label>
                                        <select name="section" id="day" class="es-add-select"
                                            style="display: none;">
                                            <option value="">Select Section</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Subject <span>*</span></label>
                                        <select name="subject_name" id="day" class="es-add-select"
                                            style="display: none;">
                                            <option value="">Select Subject</option>
                                            @foreach ($subjectsList as $subject)
                                                <option value="{{ $subject['subject_name'] }}">{{ $subject['subject_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Teacher <span>*</span></label>
                                        <select name="teacher" id="day" class="es-add-select"
                                            style="display: none;">
                                            @foreach($types as $type)
                                                <option value="{{$type->name}}">{{$type->employee_personals->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Lesson Title <span>*</span></label>
                                        <input type="text" name="leason_title">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Chapter <span>*</span></label>
                                        <input type="text" name="chapter">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Page No. (Single / Range) <span>*</span></label>
                                        <input type="text" name="page_number">
                                    </div>

                                    <!-- <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Video URL</label>
                                        <input type="text" name="video_url">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Attachment</label>
                                        <input type="file" id="file" name="attachment">
                                        <label for="file" id="fileCustom"><i class="fa-solid fa-camera"></i>
                                            Choose Photo</label>
                                        <label for=""><span>Attachment file type (pdf,png,jpg,jpeg,gif,bmp)
                                                supported, maximum 10MB</span></label>
                                    </div> -->


                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day"> Lesson Plan Details</label>
                                        <textarea class="ckeditor" id="editor1" name="leason_plan_detail"></textarea>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Assign Date<span>*</span></label>
                                        <input type="date" name="assign_date">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Due Date<span>*</span></label>
                                        <input type="date" name="due_date">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Status <span>*</span> </label>
                                        <select name="status" id="day" class="es-add-select"
                                            style="display: none;">
                                            <option value="1">Active</option>
                                            <option value="0">Deactive</option>
                                        </select>
                                    </div>

                                </div>
                                <br>
                                <br>
                                <p>
                                    <button type="submit" class="btn bg-gradient border-0 text-white">Create</button>
                                    
                                </p>

                            </form>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </main>

    <!-- Global Vendor -->

    @include('layouts.inc.footer')

    <script src="assets/js/mainck.js"></script>
    <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>

</body>

</html>
