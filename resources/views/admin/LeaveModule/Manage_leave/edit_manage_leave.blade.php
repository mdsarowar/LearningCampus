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
                            <h2 class="text-white mb-0">Update Leave</h2>
                        </header>

                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Leave Module</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('manage.leave') }}">Manage Leaves</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Update Leave</a></li>
                        </ul>

                        <div class="session_view_link mt-5 ml-4 mb-2">
                            <a href="{{ route('leave.entry') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-plus"></i></a>

                        </div>

                        <div class="branch_edit">

                            <div class="newrow">
                                <form action="{{ route('update.manage.leave') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" class="form-control" name="manage_leave_id"
                                        value="{{ $manage_info->id }}">
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
                                        <input type="date" placeholder=" " value="{{ $manage_info->from_date }}"
                                            name="from_date" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">End Date <span>*</span></label>
                                        <input type="date" placeholder=" " value="{{ $manage_info->end_date }}"
                                            name="end_type" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Total Days <span>*</span></label>
                                        <input type="text" placeholder=" " value="{{ $manage_info->total_days }}"
                                            name="total_days" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Status <span>*</span></label>
                                        <select name="status" id="">
                                            <option value="">Active</option>
                                            <option value="">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mt-4 mb-3">
                                        <p>
                                            <button type="submit"
                                                class="btn bg-gradient border-0 text-white">Update</button>
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

    @include('layouts.inc.footer')
</body>

</html>
