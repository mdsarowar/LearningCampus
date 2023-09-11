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
                            <h2 class="text-white mb-0">
                                Shift View
                            </h2>
                        </header>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">
                                <div class="session_view_link mt-2 mb-5">
                                    <a href="{{ route('add_shift') }}" class="btn btn-primary"><i
                                            class="fa-solid fa-plus"></i></a>
                                    <a href="{{ route('edit_shift') }}?shift_id={{ $shiftInfo[0]['shift_id'] }}"
                                        class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                                </div>
                                <!---- Session View table  ----->
                                <table class="table table-bordered table-striped mt-3 branch_view_table">
                                    <tbody>
                                        <tr>
                                            <th>Medium Name</th>
                                            <td>{{ $shiftInfo[0]['class_type'] }} Medium</td>
                                        </tr>
                                        <tr>
                                            <th>Shift Name</th>
                                            <td>{{ $shiftInfo[0]['shift_name'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Start Time</th>
                                            <td>{{ (new DateTime($shiftInfo[0]['start_time']))->format('h:i A') }}</td>
                                        </tr>
                                        <tr>
                                            <th>End Time</th>
                                            <td>{{ (new DateTime($shiftInfo[0]['end_time']))->format('h:i A') }}</td>
                                        </tr>
                                        <tr>
                                            <th>Green Limit</th>
                                            <td>{{ $shiftInfo[0]['green_limit'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Orange Limit</th>
                                            <td>{{ $shiftInfo[0]['orange_limit'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Red Limit</th>
                                            <td>{{ $shiftInfo[0]['red_limit'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>{{ $shiftInfo[0]['status'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Created At</th>
                                            <td>{{ $shiftInfo[0]['created_at'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Created By</th>
                                            <td>{{ $shiftInfo[0]['created_by'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Modified At</th>
                                            <td>{{ $shiftInfo[0]['modified_at'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Modified By</th>
                                            <td>{{ $shiftInfo[0]['modified_by'] }}</td>
                                        </tr>

                                    </tbody>
                                </table>

                                <!---- /session View table ----->
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
