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
                        <h2 class="text-white mb-0">Update Employee Category</h2>
                    </header>
                    <div class="session_add">
                        <form action="{{route('update_employee_category',$category->id)}} " method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">


                                <div class="col-md-10 mb-3">
                                    <label for="">Type <span>*</span></label>
                                    <select name="type" id="">
                                        <option value="Full-time">Full-time</option>
                                        <option value="">Part-time</option>
                                        <option value="">Half-time</option>
                                        <option value="">Contractual</option>
                                        <option value="">Shiftworker</option>
                                    </select>
                                </div>

                                <div class="col-md-10 mb-3">
                                    <label for="">Name <span>*</span></label>
                                    <input type="text" placeholder=" "  name="name" id="">
                                </div>


                                <div class="col-md-10 mb-3">
                                    <label for="">Deduct Salary on Absent? <span>*</span></label>
                                    <select name="dsoa" id="">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>

                                <div class="col-md-10 mb-3">
                                    <label for="">Has Over Time?<span>*</span></label>
                                    <select name="hot" id="">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
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
                                        <button type="submit" class="btn bg-gradient border-0 text-white">Update</button>
                                        <a href="{{route('manage_employee_category')}}" class="btn  cancel_btn border-0 text-white">Cancel</a>
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


@include('layouts.inc.footer');
</body>

</html>
