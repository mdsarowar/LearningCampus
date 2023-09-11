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
                            <h2 class="text-white mb-0">Session Update</h2>
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

                        <div class="session_add">
                            <div class="session_view_link mt-2 mb-5">
                                <a href="{{ route('add_session') }}" class="btn btn-primary"><i
                                        class="fa-solid fa-plus"></i></a>
                                <a href="{{ route('view_session') }}?session_id={{ $sessionInfo[0]['session_id'] }}" class="btn btn-primary"><i
                                        class="fa-solid fa-eye"></i></a>
                            </div>

                            <form action="{{ route('edit_session_submit') }}" method="POST">
                                @csrf
                                <input type="hidden" name="session_id" value="{{ $sessionInfo[0]['session_id'] }}">
                                <input type="hidden" name="current_session_name" value="{{ $sessionInfo[0]['session_name'] }}">
                                <input type="hidden" name="current_session_code" value="{{ $sessionInfo[0]['session_code'] }}">
                                <input type="hidden" name="current_is_fiscal_year" value="{{ $sessionInfo[0]['is_fiscal_year'] }}">
                                <input type="hidden" name="current_is_current_session" value="{{ $sessionInfo[0]['is_current_session'] }}">
                                <input type="hidden" name="current_result_type" value="{{ $sessionInfo[0]['result_type'] }}">
                                <input type="hidden" name="current_status" value="{{ $sessionInfo[0]['status'] }}">

                                <div class="row">

                                    <div class="col-md-10 mb-3">
                                        <label for="">Name <span>*</span></label>
                                        <input type="number" placeholder="eg: 2023" value="{{ $sessionInfo[0]['session_name'] }}" name="session_name" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Short Code <span>*</span></label>
                                        <input type="number" placeholder="eg: 23" value="{{ $sessionInfo[0]['session_code'] }}" name="session_code" id="">
                                    </div>


                                    <div class="col-md-10 mb-3">
                                        <label for="">Fiscal Year ? <span>*</span></label>
                                        <p class="rad_text">
                                            <input type="radio" value="Yes" name="is_fiscal_year" id="check">
                                            <b>Yes</b>
                                        </p> &nbsp; &nbsp;
                                        <p class="rad_text">
                                            <input type="radio" value="No" name="is_fiscal_year" id="check">
                                            <b>No</b>
                                        </p>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Current Session ?<span>*</span></label>
                                        <p class="rad_text">
                                            <input type="radio" value="Yes" name="is_current_session" id="check">
                                            <b>Yes</b>
                                        </p> &nbsp; &nbsp;
                                        <p class="rad_text">
                                            <input type="radio" value="No" name="is_current_session" id="check">
                                            <b>No</b>
                                        </p>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Result Type ?<span>*</span></label>
                                        <p class="rad_text">
                                            <input type="radio" value="Percentage_Terms" name="result_type" id="check">
                                            <b>Percentage (Terms) </b>
                                        </p> &nbsp; &nbsp;
                                        <p class="rad_text">
                                            <input type="radio" value="Average_Terms" name="result_type" id="check">
                                            <b>Average (Terms)</b>
                                        </p>
                                        <p class="rad_text">
                                            <input type="radio" value="Average_Subjects" name="result_type" id="check">
                                            <b>Average (Subjects)</b>
                                        </p>
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
