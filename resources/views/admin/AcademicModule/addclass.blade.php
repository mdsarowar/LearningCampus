<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Learning Campus | Add Class</title>
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
                            <h2 class="text-white mb-0">Add Class</h2>
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

                        <form action="{{ route('add_class_submit') }}" method="POST">
                            @csrf
                            <div class="branch_edit class_edit">
                                <div class="row">

                                    <div class="col-md-10 mb-3">
                                        <label for="">Medium Name <span>*</span></label>
                                        <select name="class_type" id="" required>
                                            <option value="">Select Medium</option>
                                            @foreach ($mediumList as $medium)
                                                <option value="{{ $medium['medium_name'] }}">
                                                    {{ $medium['medium_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Class Name <span>*</span></label>
                                        <input type="text" placeholder="eg: Nursery" name="class_name" id=""
                                            required>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Rank <span>*</span></label>
                                        <input type="text" placeholder="eg: 1" name="class_rank" id=""
                                            required>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Class Code <span>*</span></label>
                                        <input type="text" placeholder="eg: B09" name="class_code" id=""
                                            maxlength="3" required><br>
                                        <span style="color: red;" class="mt-2 d-block">Class code must be 2 digit with
                                            prefix 'B' or 'E'.
                                            <br>For examples : Class Nine (Bangla Medium) -> B09</span>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Has Group/4th Subject <span>*</span></label>
                                        <p class="rad_text">
                                            <input type="radio" value="Yes" name="hasExtraSubject" id="check">
                                            <b>Yes</b>
                                        </p> &nbsp; &nbsp;
                                        <p class="rad_text">
                                            <input type="radio" value="No" name="hasExtraSubject" id="check">
                                            <b>No</b>
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
                                            <button type="submit"
                                                class="btn bg-gradient border-0 text-white">Create</button>
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
