<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->


<head>
    <title>Learning Campus | Edit Account Head</title>
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
                            <h2 class="text-white mb-0">Update Accounts Head</h2>
                        </header>
                        <div class="session_view_link ml-3 mt-4 mb-5">
                            <form action="/account-head-view" method="get">
                                <input type="hidden" name="account_code" value="{{ $account_head_info[0]['account_code'] }}">
                                <button type="submit" class="btn btn-primary"><i
                                        class="fa-solid fa-eye"></i></button>
                            </form>
                        </div>

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


                        <form action="{{ route('account.head.edit.submit') }}" method="post">
                            @csrf
                            <input type="hidden" name="account_code" value="{{ $account_head_info[0]['account_code'] }}">
                            <input type="hidden" name="current_account_head" value="{{ $account_head_info[0]['account_head'] }}">
                            <input type="hidden" name="current_account_type" value="{{ $account_head_info[0]['account_type'] }}">
                            <input type="hidden" name="current_account_category" value="{{ $account_head_info[0]['account_category'] }}">
                            <input type="hidden" name="current_account_parents" value="{{ $account_head_info[0]['account_parents'] }}">
                            <input type="hidden" name="current_account_period" value="{{ $account_head_info[0]['account_period'] }}">
                            <input type="hidden" name="current_has_child" value="{{ $account_head_info[0]['has_child'] }}">
                            <input type="hidden" name="current_status" value="{{ $account_head_info[0]['status'] }}">

                            <div class="session_add">
                                <div class="row">

                                    <div class="col-md-10 mb-3">
                                        <label for="">A/C Type <span>*</span></label>
                                        <select name="account_type" id="">
                                            <option value="">Select AC Types</option>
                                            <option value="Academic">Academic</option>
                                            <option value="General">General</option>
                                            <option value="Bank">Bank</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">A/C Category<span>*</span></label>
                                        <p class="rad_text">
                                            <input type="radio" name="account_category" value="reciept"
                                                id="check">
                                            <b>Recipts(+)</b>
                                        </p> &nbsp; &nbsp;
                                        <p class="rad_text">
                                            <input type="radio" name="account_category" value="payment"
                                                id="check">
                                            <b>Payments(-)</b>
                                        </p>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">A/C Parents <span>*</span></label>
                                        <select name="account_parents" id="">
                                            <option value="">Select A/C Parents</option>
                                            <option value="Grand Parents">Grand Parents</option>
                                            <option value="30.00 Yearly Tour">30.00 Yearly Tour</option>
                                            <option value="34.00 Yearly Admission">34.00 Yearly Admission</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">A/C No <span>*</span></label>
                                        <input type="text" placeholder="" name="account_code" value="{{ $account_head_info[0]['account_code'] }}" id="" disabled>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="account_head">A/C Head <span>*</span></label>
                                        <input type="text" placeholder="" name="account_head" value="{{ $account_head_info[0]['account_head'] }}" id="account_head">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Yearly / Monthly <span>*</span></label>
                                        <p class="rad_text">
                                            <input type="radio" name="account_period" value="Yearly" id="check">
                                            <b>Yearly</b>
                                        </p> &nbsp; &nbsp;
                                        <p class="rad_text">
                                            <input type="radio" name="account_period" value="Monthly" id="check">
                                            <b>Monthly</b>
                                        </p>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Has Child ? <span>*</span></label>
                                        <p class="rad_text">
                                            <input type="radio" value="1" name="has_child" id="check">
                                            <b>Yes</b>
                                        </p> &nbsp; &nbsp;
                                        <p class="rad_text">
                                            <input type="radio" value="0" name="" id="check">
                                            <b>No</b>
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
                                            <button type="submit"
                                                class="btn bg-gradient border-0 text-white">Update</button>
                                            <button type="clear"
                                                class="btn  cancel_btn border-0 text-white">Cancel</button>
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
