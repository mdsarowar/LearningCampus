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
                            <h2 class="text-white mb-0">Add Session</h2>
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

                        <form action="{{ route('add_session_submit') }}" method="POST">
                            @csrf
                            <div class="session_add">
                                <div class="row">

                                    <div class="col-md-10 mb-3">
                                        <label for="">Name <span>*</span></label>
                                        <input type="number" placeholder="eg: 2023" name="session_name" id="" required>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Short Code <span>*</span></label>
                                        <input type="number" placeholder="eg: 23" name="session_code" id="" required>
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
                                        <select name="status" id="" required>
                                            <option value="">Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mt-4 mb-3">
                                        <p>
                                            <button type="submit" class="btn bg-gradient border-0 text-white">Create</button>
                                            <a class="btn  cancel_btn border-0 text-white">Cancel</a>
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
