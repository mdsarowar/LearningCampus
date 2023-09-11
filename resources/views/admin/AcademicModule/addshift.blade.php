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
                            <h2 class="text-white mb-0">Add Shift</h2>
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

                        <form action="{{ route('add_shift_submit') }}" method="POST">
                            @csrf
                            <div class="branch_edit">
                                <div class="row">

                                    <div class="col-md-10 mb-3">
                                        <label for="">Medium Name <span>*</span></label>
                                        <select name="class_type" id="" required>
                                            <option value="">Select Medium</option>
                                            @foreach ($mediumList as $medium)
                                                <option value="{{ $medium['medium_name'] }}">{{ $medium['medium_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Shift Name <span>*</span></label>
                                        <input type="text" placeholder="eg: Morning" name="shift_name" id="" required>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Start Time <span>*</span></label>
                                        <input type="time" name="start_time" id="" required>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">End Time <span>*</span></label>
                                        <input type="time" name="end_time" id="" required>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Green Limit <span>*</span></label>
                                        <input type="number" placeholder="eg: 5 (min)" maxlength="2" min="1" max="59" name="green_limit" id="" required>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Orange Limit <span>*</span></label>
                                        <input type="number" placeholder="eg: 10 (min)" maxlength="2" min="1" max="59" name="orange_limit" id="" required>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Red Limit <span>*</span></label>
                                        <input type="number" placeholder="eg: 15 (min)" maxlength="2" min="1" max="59" name="red_limit" id="" required>
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
