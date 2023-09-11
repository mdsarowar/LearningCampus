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
                            <h2 class="text-white mb-0">Leave Entry</h2>
                        </header>

                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Leave Module</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Leave Entry</a></li>
                        </ul>

                        <div class="branch_edit">
                            <div class="newrow">

                                <form action="{{ route('leave.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-10 mb-3">
                                        <label for="">Employee Type <span>*</span></label>
                                        <select name="employeetype_id" id="">
                                            <option value="">Select Employee Type</option>
                                            @foreach($emp_type as $employee_type)
                                                <option value="{{ $employee_type->id }}">{{ $employee_type->type }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col-md-10 mb-3">
                                        <label for="">Employee <span>*</span></label>
                                        <select name="employeetype_id" id="">
                                            <option value="">Select Employee </option>
                                            @foreach($emp_type as $employee_type)
                                                <option value="{{ $employee_type->id }}">{{ $employee_type->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Leave Type <span>*</span></label>
                                        <select name="leave_type_id" id="">
                                            @foreach ($leave as $leave_type)
                                                <option value="{{ $leave_type->id }}">{{ $leave_type->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">From Date <span>*</span></label>
                                        <input type="date" placeholder=" " name="from_date" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">End Date <span>*</span></label>
                                        <input type="date" placeholder=" " name="end_date" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Total Days <span>*</span></label>
                                        <input type="text" placeholder=" " name="total_days" id="">
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
                                            <button type="submit"
                                                class="btn  cancel_btn border-0 text-white">Cancel</button>
                                        </p>
                                    </div>
                                </form>

                            </div>
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
