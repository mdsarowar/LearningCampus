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
                            <h2 class="text-white mb-0">Leave Type Update</h2>
                        </header>

                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Leave Module</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('leave.type') }}">Leave Type</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Leave Type Update</a></li>
                        </ul>

                        <div class="session_view_link ml-3 mt-4 mb-5">
                            <a href="{{ route('add.leave.type') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>

                        </div>

                        <div class="branch_edit">
                            <div class="newrow">
                                @if(session('success'))
                                    <span style="color:green; font-size:30px; padding-left: 100px;">{{ session('success') }}</span>
                                @endif
                                <form action="{{ route('update.leave.type') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" class="form-control" name="leave_type_id" value="{{ $leave_info->id }}">
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
                                        <label for="">Title <span>*</span></label>
                                        <input type="text" placeholder=" " name="title" value="{{ $leave_info->title }}" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Short Title <span>*</span></label>
                                        <input type="text" placeholder=" " name="short_title" value="{{ $leave_info->short_title }}" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Leave Days <span>*</span></label>
                                        <input type="number" placeholder=" " name="leave_days" value="{{ $leave_info->leave_days }}" id="">
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
                                            <a href="{{ route('leave.type') }}" class="btn  cancel_btn border-0 text-white" style="padding: 9px;">Cancel</a>
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
