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
                                Session View
                            </h2>
                        </header>

                        <div class="card-body table-responsive" id="institue">
                            <form class="es-form es-add-form">
                                <div class="session_view_link mt-2 mb-5">
                                    <a href="{{ route('add_session') }}" class="btn btn-primary"><i
                                            class="fa-solid fa-plus"></i></a>
                                    <form action="{{ route('edit_session') }}" method="get">
                                        <input type="hidden" name="session_id"
                                            value="{{ $sessionInfo[0]['session_id'] }}">
                                        <button type="submit" class="btn btn-primary"><i
                                                class="fa-solid fa-pencil"></i></button>
                                    </form>
                                </div>
                                <!---- Session View table  ----->
                                <table class="table table-bordered table-striped mt-3 branch_view_table">
                                    <tbody>
                                        <tr>
                                            <th>Name</th>
                                            <td>{{ $sessionInfo[0]['session_name'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Short Code</th>
                                            <td>{{ $sessionInfo[0]['session_code'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Fiscal Year ?</th>
                                            <td>{{ $sessionInfo[0]['is_fiscal_year'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Current Session ?</th>
                                            <td>{{ $sessionInfo[0]['is_current_session'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Result Type ?</th>
                                            <td>
                                                @if ($sessionInfo[0]['result_type'] == 'Percentage_Terms')
                                                    {{ 'Percentage (Terms)' }}
                                                @elseif ($sessionInfo[0]['result_type'] == 'Average_Terms')
                                                    {{ 'Average (Terms)' }}
                                                @elseif ($sessionInfo[0]['result_type'] == 'Average_Subjects')
                                                    {{ 'Average (Subjects)' }}
                                                @else
                                                    {{ 'N/A' }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>
                                                @if ($sessionInfo[0]['status'] == 1)
                                                    {{ 'Active' }}
                                                @else
                                                    {{ 'Inactive' }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Created At</th>
                                            <td>{{ $sessionInfo[0]['created_at'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Created By</th>
                                            <td>{{ $sessionInfo[0]['created_by'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Modified At</th>
                                            <td>{{ $sessionInfo[0]['modified_at'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Modified By</th>
                                            <td>{{ $sessionInfo[0]['modified_by'] }}</td>
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
