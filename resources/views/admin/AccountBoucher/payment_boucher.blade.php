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
                        <h2 class="text-white mb-0">Recive Voucher(-)</h2>
                    </header>
                    <div class="session_add">
                        <form action="{{route('store_payment_boucher')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">


                                <div class="col-md-10 mb-3">
                                    <label for="">Voucher No <span>*</span></label>
                                    <input type="text" name="boucher_no" id="">
                                </div>

                                <div class="col-md-10 mb-3">
                                    <label for="">Transaction Date <span>*</span></label>
                                    <input type="date" placeholder=" "  name="transaction_date" id="">
                                </div>


                                <div class="col-md-10 mb-3">
                                    <label for="">Payment Type <span>*</span></label>
                                    <p class="rad_text">
                                        <input type="radio" placeholder="Education" name="payment_type" value="bank" id="check">
                                        <label>Bank</label>
                                    </p>
                                    <p class="rad_text">
                                        <input type="radio" placeholder="Education" value="cash" name="payment_type" id="check">
                                        <b>Cash</b>
                                    </p>
                                </div>

                                <div class="col-md-10 mb-3 table-responsive">

                                    <table class="table table-bordered boucher_table">
                                        <thead class="bg-light">
                                        <tr>
                                            <th scope="col">Particulars</th>
                                            <th scope="col">Amount	</th>
                                            <th scope="col">Remarks</th>
                                            <th scope="col">Remove</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">
                                                <select name="select_head" id="">
                                                    <option value="1">Select A/C Head</option>
                                                    <option value="2">12.00 Field Envelopment</option>
                                                    <option value="3">23.00 Recive From Government</option>
                                                    <option value="4">6.00 Lav Fee</option>
                                                </select>
                                            </th>
                                            <td>
                                                <input type="text" name="amount" id="">
                                            </td>
                                            <td>
                                                <input type="text" name="remarks" id="">
                                            </td>
                                            <td>
                                                <i class="fa-solid fa-trash"></i>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>


                                <div class="col-md-10 mb-3">
                                    <label for="">Description </label><br>
                                    <textarea name="description" id="description_text_area" cols="30" rows="10"></textarea>
                                </div>

                                <div class="col-md-10 mt-4 mb-3">
                                    <p>
{{--                                        <a type="submit" class="btn bg-gradient border-0 text-white">Create</a>--}}
                                        <button type="submit"><a  class="btn bg-gradient border-0 text-white">Create</a></button>
                                        <a href="" class="btn  cancel_btn border-0 text-white">Cancel</a>
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
