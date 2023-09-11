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
                            <h2 class="text-white mb-0">
                                H.W Submit
                            </h2>
                        </header>

                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Learning Module</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">HW Submit</a></li>
                        </ul>

                        <div class="card-body table-responsive" id="institue">
                        @if(session('success'))
                            <span style="color:green; font-size:30px; padding-left: 100px;">{{ session('success') }}</span>
                        @endif
                            <form action="{{ route('hw.submit.post') }}" method="POST" enctype="multipart/form-data"
                                class="es-form es-add-form">
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
                                        <label for="day">Select Home Work <span>*</span></label>
                                        <select name="home_work_id" id="day" class="es-add-select"
                                            style="display: none;">
                                            @foreach ($home as $hw_submit)
                                                <option value="{{ $hw_submit->id }}">{{ $hw_submit->home_work_title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Attachment</label>
                                        <input type="file" id="file" name="file">
                                        <label for="file" id="fileCustom"><i class="fa-solid fa-file"></i>Choose File</label>
                                        <div id="fileDiv"></div>
                                        <label for=""><span>Attachment file type (pdf) supported</span></label>
                                        
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Submit Date<span>*</span></label>
                                        <input type="date" name="submit_date">
                                    </div>

                                    <!-- <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Status </label>
                                        <select id="day" class="es-add-select" style="display: none;">
                                            <option value="">Active</option>
                                            <option value="">Deactive</option>
                                        </select>
                                    </div> -->

                                </div>

                                <p>
                                    <button type="submit" class="btn bg-gradient border-0 text-white">Create</button>
                                    <!-- <a href="" class="btn  border-0 text-white">Cancel</a>          -->
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

    <script>
        const fileInput = document.getElementById("file");
        const fileDiv = document.getElementById("fileDiv");

        fileInput.addEventListener("change", function() {
            const selectedFile = fileInput.files[0];
            if (selectedFile) {
                const newDiv = document.createElement("div");
                newDiv.innerHTML = "<b>File: </b>" + selectedFile.name;
                fileDiv.appendChild(newDiv);
                fileDiv.classList.add("show");
            }
        });
    </script>

</html>
