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
                        <h2 class="text-white mb-0">Add Slide Show</h2>
                    </header>
                    <div class="session_add">
                        <form action="{{route('store_slide')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-md-10 mb-3">
                                    <label for="">Type <span>*</span></label>
                                    <p class="rad_text">
                                        <input type="radio" placeholder="Education" value="home" name="type" id="check">
                                        <b>Home</b>
                                    </p> &nbsp; &nbsp;
                                    <p class="rad_text">
                                        <input type="radio" placeholder="Education" value="faculty" name="type" id="check">
                                        <b>Faculty</b>
                                    </p>
                                </div>


                                <div class="col-md-10 mb-3">
                                    <label for="">Title <span>*</span></label>
{{--                                    <input type="file"  class="form-control-file" name="photo" placeholder="" >--}}
                                    <input type="text" placeholder=" "  name="title" id="">
                                </div>

                                <div class="col-md-10 mb-3">
                                    <label for="">Image <span>*</span></label>
                                    <input type="file" name="image" class="form-control-file" id="file">
{{--                                    <input type="file" id="file" name="image" multiple />--}}
                                    <label for="file" id="fileCustom" class="add_messageFile"><i class="fa-solid fa-camera"></i> Choose Photo</label><br>
                                    <span style="color: red;">Only image (png,jpg,gif) width = 1200px & Height = 400px - maximum 1MB</span>
                                </div>

                                <div class="col-md-10 mb-3">
                                    <label for="">Description <span>*</span></label>
                                    <textarea class="ckeditor" id="editor1" name="description"></textarea>
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
                                        <button class="btn bg-gradient border-0 text-white">Create</button>
                                        <a href="" class="btn  cancel_btn border-0 text-white">Cancel</a>
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


<script>
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

@include('layouts.inc.footer');
</body>
