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
                            <h2 class="text-white mb-0">Academic Holiday Update</h2>
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

                        <div class="session_view_link ml-3 mt-4 mb-5">
                            <a href="{{ route('add_academic_holiday') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-plus"></i></a>
                            <a href="{{ route('view_academic_holiday') }}?id={{ $academic_holidays[0]['id'] }}"
                                class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                        </div>

                        <form action="/update-academic-holiday" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $academic_holidays[0]['id'] }}">
                            <input type="hidden" name="current_type" value="{{ $academic_holidays[0]['type'] }}">
                            <input type="hidden" name="current_title" value="{{ $academic_holidays[0]['title'] }}">
                            <input type="hidden" name="current_status" value="{{ $academic_holidays[0]['status'] }}">

                            <div class="branch_edit">
                                <div class="row">
                                    <div class="col-md-10 mb-3">
                                        <label >Type <span>*</span></label>
                                        <p class="rad_text">
                                            <input class="showActivities" name="type" value="Activities"
                                                type="radio" id="check" onchange="showActivities()">
                                            <b>Activities</b>
                                        </p> &nbsp; &nbsp;
                                        <p class="rad_text">
                                            <input class="hideActivities" name="type" value="Holidays" type="radio"
                                                id="check" onchange="hideActivities()">
                                            <b>Holidays</b>
                                        </p>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Title <span>*</span></label>
                                        <input type="text" placeholder="Holiday Title" name="title" value="{{ $academic_holidays[0]['title'] }}">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Status <span>*</span></label>
                                        <select name="status" id="">
                                            <option value="">Select Medium</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
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
