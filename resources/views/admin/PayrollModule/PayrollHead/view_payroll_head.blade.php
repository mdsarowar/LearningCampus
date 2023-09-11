<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Learning Campus | Account Head View</title>
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
                                Payroll View
                            </h2>
                        </header>


                        <div class="session_view_link ml-3 mt-4 mb-5">
                            {{-- <a href="{{ route('account.head.add') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-plus"></i></a> --}}
                            {{-- <form action="{{ route('edit_payroll_head') }}" method="get">
                                <input type="hidden" name="payroll_code" value="{{ $payrollInfo[0]['payroll_code'] }}">
                                <button type="submit" class="btn btn-primary"><i
                                        class="fa-solid fa-pencil"></i></button>
                            </form> --}}
                            <a href="{{ route('add_payroll_head') }}" class="btn btn-primary"><i
                                class="fa-solid fa-plus"></i> Add Payroll</a>
                        </div>

                        <div class="card-body table-responsive" id="institue">

                            <!---- Branch View table  ----->
                            <table class="table table-bordered table-striped mt-3 branch_view_table">
                                <tbody>
                                    <tr>
                                        <th>A/C Type</th>
                                        <td>{{ $payroll[0]['categories'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>A/C Category</th>
                                        <td>
                                            @if ($payroll[0]['categories'] === 'Addition')
                                                {{ 'Addition' }}
                                            @elseif ($payroll[0]['categories'] === 'Deduction')
                                                {{ 'Deduction' }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>A/C Parents </th>
                                        <td>{{ $payroll[0]['parents'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>A/C Code</th>
                                        <td>{{ $payroll[0]['payroll_code'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>A/C Head</th>
                                        <td>{{ $payroll[0]['heads'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Has Child?</th>
                                        <td>
                                            @if ($payroll[0]['has_child'] == 1)
                                                {{ 'Yes' }}
                                            @else
                                                {{ 'No' }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Absent Deduction?</th>
                                        <td>
                                            @if ($payroll[0]['absent_deductions'] == 1)
                                                {{ 'Yes' }}
                                            @else
                                                {{ 'No' }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            @if ($payroll[0]['status'] == 1)
                                                {{ 'Active' }}
                                            @else
                                                {{ 'Inactive' }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Created At</th>
                                        <td>{{ $payroll[0]['created_at'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Created By</th>
                                        <td>{{ $payroll[0]['created_by'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Modified At</th>
                                        <td>{{ $payroll[0]['modified_at'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Modified By</th>
                                        <td>{{ $payroll[0]['modified_by'] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!---- /Branch View table ----->

                        </div>

                    </div>
                </section>

            </div>
        </div>
    </main>

@include('layouts.inc.footer')
</body>

</html>