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
                            <h2 class="text-white mb-0">Medium Update</h2>
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
                            <a href="{{ route('add_medium') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-plus"></i></a>
                            <a href="{{ route('view_medium') }}?medium_id={{ $mediumInfo[0]['medium_id'] }}"
                                class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                        </div>

                        <form action="/edit-medium-submit" method="POST">
                            @csrf
                            <input type="hidden" name="medium_id" value="{{ $mediumInfo[0]['medium_id'] }}">
                            <input type="hidden" name="current_medium_name" value="{{ $mediumInfo[0]['medium_name'] }}">
                            <input type="hidden" name="current_medium_code" value="{{ $mediumInfo[0]['medium_code'] }}">
                            <input type="hidden" name="current_status" value="{{ $mediumInfo[0]['status'] }}">

                            <div class="branch_edit">
                                <div class="row">
                                    <div class="col-md-10 mb-3">
                                        <label for="">Name <span>*</span></label>
                                        <input type="text" placeholder="eg: Bangla"
                                            value="{{ $mediumInfo[0]['medium_name'] }}" name="medium_name"
                                            id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Medium Code <span>*</span></label>
                                        <input type="text" placeholder="eg: BN"
                                            value="{{ $mediumInfo[0]['medium_code'] }}" name="medium_code"
                                            id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Status <span>*</span></label>
                                        <select name="status" id="">
                                            <option value="">Select Medium</option>
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
