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
                            <h2 class="text-white mb-0">Update Live Class</h2>
                        </header>

                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Learning Module</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('manage.live.classes') }}">Live class</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Update Live Class</a></li>
                        </ul>

                        <div class="session_view_link ml-3 mt-4 mb-5">
                            <a href="{{ route('add.live.classes') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                            <a href="live_class_report.html" class="btn btn-primary"><i class="fa-solid fa-file-invoice"></i></a>
                        </div>
                        
                        <div class="card-body">
                        @if(session('success'))
                            <span style="color:green; font-size:30px; padding-left: 100px;">{{ session('success') }}</span>
                        @endif   
                            <form action="{{ route('update.live.class') }}" method="POST" enctype="multipart/form-data"
                                class="es-form es-add-form">
                                @csrf
                                <input type="hidden" class="form-control" name="live_class_id"
                                    value="{{ $live->id }}">
                                <div class="row">

                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="subject">Class <span>*</span></label>
                                        <select name="class_name" id="day" class="es-add-select"
                                            style="display: none;">
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
                                        <label for="day">Class Topic <span>*</span></label>
                                        <input type="text" name="class_topic" value="{{ $live->class_topic }}">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Class Date <span>*</span></label>
                                        <input type="date" name="class_date" value="{{ $live->class_date }}">
                                    </div>


                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Class Time <span>*</span></label>
                                        <input type="datetime" name="class_time" value="{{ $live->class_time }}">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Class Duration(Minute) <span>*</span></label>
                                        <input type="text" placeholder="Default 40min" name="duration">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Class ID <span>*</span></label>
                                        <input type="text" name="class_id" value="{{ $live->class_id }}">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Password<span>*</span></label>
                                        <input type="password" name="password">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Status </label>
                                        <select name="status" id="day" class="es-add-select"
                                            style="display: none;">
                                            <option value="0">Pending</option>
                                            <option value="1">Done</option>
                                        </select>
                                    </div>

                                </div>
                                <br>
                                <br>
                                <p>
                                    <button type="submit" class="btn bg-gradient border-0 text-white">Update</button>
                                        <a href="{{ route('manage.live.classes') }}" class="btn  border-0 text-white" style="padding: 9px;">Cancel</a>
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
</body>

</html>
