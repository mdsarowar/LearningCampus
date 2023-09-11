

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
                        <h2 class="text-white mb-0">Update Menu</h2>
                    </header>
                    <div class="session_view_link ml-3 mt-4 mb-5">
                        <a href="{{route('add_menu')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                        <a href="{{route('view_menu',$menu->id)}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                    </div>
                    <div class="session_add">
                        <form action="{{route('update_menu',$menu->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                {{--                                <div class="col-md-10 mb-3">--}}
                                {{--                                    <label for="">Parent Menu <span>*</span></label>--}}
                                {{--                                    <select name="parent_menu" id="">--}}
                                {{--                                        <option value="">Select Parent Menu</option>--}}
                                {{--                                        <option value="ROOT">ROOT</option>--}}
                                {{--                                        <option value="About Us">About Us</option>--}}
                                {{--                                        <option value="Chairman Message">Chairman Message</option>--}}
                                {{--                                        <option value="Class One">Class One</option>--}}
                                {{--                                        <option value="Two">Two</option>--}}
                                {{--                                        <option value="Three">Three</option>--}}
                                {{--                                    </select>--}}
                                {{--                                </div>--}}


                                <div class="col-md-10 mb-3">
                                    <label for="">Title <span>*</span></label>
                                    <input type="text" placeholder=" "  name="menu" id="">
                                </div>


                                <div class="col-md-10 mb-3">
                                    <label for="">Position <span>*</span></label>
                                    <select name="position" id="">
                                        <option value="">Select Position</option>
                                        <option value="Top">Top</option>
                                        <option value="Bottom">Bottom</option>
                                        <option value="Left">Left</option>
                                        <option value="Right">Right</option>
                                    </select>
                                </div>

                                <div class="col-md-10 mb-3">
                                    <label for="">Is Left Column <span>*</span></label>
                                    <p class="rad_text">
                                        <input type="radio" placeholder="Education" value="1" name="left_colum" id="check">
                                        <b>Yes</b>
                                    </p> &nbsp; &nbsp;
                                    <p class="rad_text">
                                        <input type="radio" placeholder="Education" value="0" name="left_colum" id="check">
                                        <b>No</b>
                                    </p>
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
                                        <button class="btn bg-gradient border-0 text-white">Update</button>
                                        <a href="{{route('manage_menu')}}" class="btn  cancel_btn border-0 text-white">Cancel</a>
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
