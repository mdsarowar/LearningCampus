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
                            <h2 class="text-white mb-0">Add Syllabus</h2>
                        </header>

                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Learning Module</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('manage.academic.syllabus') }}">Academic Syllabus</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Add Academic Syllabus</a></li>
                        </ul>

                        <div class="branch_edit">
                        @if(session('success'))
                            <span style="color:green; font-size:30px; padding-left: 100px;">{{ session('success') }}</span>
                        @endif
                            <form action="{{ route('academic.syllabus.post') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-md-10 mb-3">
                                        <label for="">Class Name <span>*</span></label>
                                        <input type="text" placeholder=" " name="class" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Title <span>*</span></label>
                                        <input type="text" placeholder=" " name="title" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">File <span>*</span></label>
                                        <input type="file" placeholder=" " name="file" id="file">
                                        <label for="file" id="fileCustom" class="syllabusFile"><i class="fa-solid fa-file"></i> Choose File(pdf)</label>
                                        <div id="fileDiv"></div>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Status <span>*</span></label>
                                        <select name="status" id="">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mt-4 mb-3">
                                        <p>
                                            <button type="submit"
                                                class="btn bg-gradient border-0 text-white">Create</button>
                                            <a href="{{ route('manage.academic.syllabus') }}" class="btn  cancel_btn border-0 text-white" style="padding: 9px;">Cancel</a>
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
