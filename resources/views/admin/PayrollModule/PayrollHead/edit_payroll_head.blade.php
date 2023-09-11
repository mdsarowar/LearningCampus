<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->


<head>
    <title>Learning Campus | Edit Payroll Head</title>
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
                            <h2 class="text-white mb-0">Update Payroll Head</h2>
                        </header>
                        <div class="session_view_link ml-3 mt-4 mb-5">
                            <a href="{{ route('add_payroll_head') }}" class="btn btn-primary"><i
                                class="fa-solid fa-plus"></i> </a>
                            <a href="{{ route('view_payroll_head') }}?id={{ $payroll[0]['id'] }}" class="btn btn-primary"><i
                                class="fa-solid fa-eye"></i> </a>
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


                        <form action="{{ route('update_payroll_head') }}?id={{ $payroll[0]['id'] }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $payroll['0']['id'] }}">
                            <input type="hidden" name="current_categories" value="{{ $payroll[0]['categories'] }}">
                            <input type="hidden" name="current_absent_deductions" value="{{ $payroll[0]['absent_deductions'] }}">
                            <input type="hidden" name="current_parents" value="{{ $payroll[0]['parents'] }}">
                            <input type="hidden" name="current_heads" value="{{ $payroll[0]['heads'] }}">
                            <input type="hidden" name="current_payroll_code" value="{{ $payroll[0]['payroll_code'] }}">
                            <input type="hidden" name="current_payroll_period" value="{{ $payroll[0]['payroll_period'] }}">
                            <input type="hidden" name="current_has_child" value="{{ $payroll[0]['has_child'] }}">
                            <input type="hidden" name="current_status" value="{{ $payroll[0]['status'] }}">
                            <input type="hidden" name="current_created_by" value="{{ $payroll[0]['created_by'] }}">
                            <input type="hidden" name="current_created_at" value="{{ $payroll[0]['created_at'] }}">
                            <input type="hidden" name="current_modified_by" value="{{ $payroll[0]['modified_by'] }}">
                            <input type="hidden" name="current_modified_at" value="{{ $payroll[0]['modified_at'] }}">

                            <div class="session_add">
                                <div class="row">
    
                                    <div class="col-md-10 mb-3">
                                        <label>A/C Category<span>*</span></label>
                                        <p class="rad_text">
                                            <input class="showAddition" name="categories" value="Addition" type="radio"
                                                id="check" onchange="showAddition()" required>
                                            <b>Addition</b>
                                        </p> &nbsp; &nbsp;
                                        <p class="rad_text">
                                            <input class="hideDeduction" name="categories" value="Deduction" type="radio"
                                                id="check" onchange="hideDeduction()" required>
                                            <b>Deduction</b>
                                        </p>
                                    </div>
    
                                    <div class="col-md-10 mb-3">
                                        <label>Absent Deduction<span>*</span></label>
                                        <p class="rad_text">
                                            <input class="showYes" name="absent_deduction" value="Yes" type="radio"
                                                id="check" onchange="showYes()" required>
                                            <b>Yes</b>
                                        </p> &nbsp; &nbsp;
                                        <p class="rad_text">
                                            <input class="hideNo" name="absent_deduction" value="No" type="radio"
                                                id="check" onchange="hideNo()" required>
                                            <b>No</b>
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
                                        <label for="">A/C Head <span>*</span></label>
                                        <input type="text" placeholder="" value="{{ $payroll['0']['heads'] }}" name="heads" id="heads">
                                    </div>
    
                                    <div class="col-md-10 mb-3">
                                        <label for="">A/C Code <span>*</span></label>
                                        <input type="text" placeholder="" name="payroll_code" id="payroll_code">
                                    </div>
    
                                    <div class="col-md-10 mb-3">
                                        <label for="">Yearly / Monthly <span>*</span></label>
                                        <p class="rad_text">
                                            <input type="radio" name="payroll_period" value="Yearly" id="check">
                                            <b>Yearly</b>
                                        </p> &nbsp; &nbsp;
                                        <p class="rad_text">
                                            <input type="radio" name="payroll_period" value="Monthly" id="check">
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
                                            <input type="radio" value="0" name="has_child" id="check">
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

    
@include('layouts.inc.footer')
</body>

</html>