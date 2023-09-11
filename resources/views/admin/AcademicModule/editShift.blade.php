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
                            <h2 class="text-white mb-0">Update Shift</h2>
                        </header>

                        {{-- form submission message start --}}
                        @if (session('error'))
                            <div class="alert alert-danger col-8 m-auto text-center">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success col-8 m-auto text-center">
                                {{ session('success') }}
                            </div>
                        @endif
                        {{-- form submission message end --}}

                        <div class="session_view_link mt-5 ml-4 mb-2">
                            <a href="{{ route('add_shift') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-plus"></i></a>
                            <a href="{{ route('view_shift') }}?shift_id={{ $shiftInfo[0]['shift_id'] }}" class="btn btn-primary"><i
                                    class="fa-solid fa-eye"></i></a>
                        </div>

                        <form action="/edit-shift-submit" method="POST">
                            @csrf
                            <input type="hidden" name="shift_id" value="{{ $shiftInfo[0]['shift_id'] }}">
                            <input type="hidden" name="current_class_type" value="{{ $shiftInfo[0]['class_type'] }}">
                            <input type="hidden" name="current_shift_name" value="{{ $shiftInfo[0]['shift_name'] }}">
                            <input type="hidden" name="current_start_time" value="{{ $shiftInfo[0]['start_time'] }}">
                            <input type="hidden" name="current_end_time" value="{{ $shiftInfo[0]['end_time'] }}">
                            <input type="hidden" name="current_green_limit" value="{{ $shiftInfo[0]['green_limit'] }}">
                            <input type="hidden" name="current_orange_limit" value="{{ $shiftInfo[0]['orange_limit'] }}">
                            <input type="hidden" name="current_red_limit" value="{{ $shiftInfo[0]['red_limit'] }}">
                            <input type="hidden" name="current_status" value="{{ $shiftInfo[0]['status'] }}">

                            <div class="branch_edit">
                                <div class="row">
                                    <div class="col-md-10 mb-3">
                                        <label for="">Medium Name <span>*</span></label>
                                        <select name="class_type" id="">
                                            <option value="">Select Medium</option>
                                            <option value="Bangla">Bangla Medium</option>
                                            <option value="English">English Medium</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Shift Name <span>*</span></label>
                                        <input type="text" placeholder="eg: Morning" name="shift_name" value="{{ $shiftInfo[0]['shift_name'] }}" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Start Time <span>*</span></label>
                                        <input type="time" name="start_time" value="{{ $shiftInfo[0]['start_time'] }}" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">End Time <span>*</span></label>
                                        <input type="time" name="end_time" value="{{ $shiftInfo[0]['end_time'] }}" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Green Limit <span>*</span></label>
                                        <input type="text" placeholder="eg: 5 (min)" maxlength="2" name="green_limit" value="{{ $shiftInfo[0]['green_limit'] }}" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Orange Limit <span>*</span></label>
                                        <input type="text"placeholder="eg: 10 (min)" maxlength="2" name="orange_limit" value="{{ $shiftInfo[0]['orange_limit'] }}" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Red Limit <span>*</span></label>
                                        <input type="text" placeholder="eg: 15 (min)" maxlength="2" name="red_limit" value="{{ $shiftInfo[0]['red_limit'] }}" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Status <span>*</span></label>
                                        <select name="status" id="">
                                            <option value="">Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mt-4 mb-3">
                                        <p>
                                            <button type="submit" class="btn bg-gradient border-0 text-white">Update</button>
                                            <button type="clear" class="btn  cancel_btn border-0 text-white">Cancel</button>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </section>

            </div>
        </div>
    </main>

    <!-- Global Vendor -->

    @include('layouts.inc.footer')
</body>

</html>
