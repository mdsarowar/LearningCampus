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
                                Academic Holiday View
                            </h2>
                        </header>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">

                                <a href="{{ route('add_academic_holiday') }}" class="btn btn-primary"><i
                                        class="fa-solid fa-plus"></i> Add Academic Holiday</a>

                                <!---- Branch View table  ----->
                                <table class="table table-bordered table-striped mt-3 branch_view_table">
                                    <tbody>
                                        <tr>
                                            <th>Type</th>
                                            <td>{{ $academic_holidays[0]['type'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td>{{ $academic_holidays[0]['title'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>
                                                @if ($academic_holidays[0]['status'] == 'Active')
                                                    {{ 'Active' }}
                                                @else
                                                    {{ 'Inactive' }}
                                                @endif
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Created At</th>
                                            <td>{{ $academic_holidays[0]['created_at'] }}</td>
                                        </tr>

                                        <tr>
                                            <th>Modified At</th>
                                            <td>{{ $academic_holidays[0]['updated_at'] }}</td>
                                        </tr>

                                    </tbody>
                                </table>

                                <!---- /Branch View table ----->


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
