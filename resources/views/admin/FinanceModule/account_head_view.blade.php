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
                                Account View
                            </h2>
                        </header>


                        <div class="session_view_link ml-3 mt-4 mb-5">
                            {{-- <a href="{{ route('account.head.add') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-plus"></i></a> --}}
                            <form action="/account-head-edit" method="get">
                                <input type="hidden" name="account_code" value="{{ $accountInfo[0]['account_code'] }}">
                                <button type="submit" class="btn btn-primary"><i
                                        class="fa-solid fa-pencil"></i></button>
                            </form>
                        </div>

                        <div class="card-body table-responsive" id="institue">

                            <!---- Branch View table  ----->
                            <table class="table table-bordered table-striped mt-3 branch_view_table">
                                <tbody>
                                    <tr>
                                        <th>A/C Type</th>
                                        <td>{{ $accountInfo[0]['account_type'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>A/C Category</th>
                                        <td>
                                            @if ($accountInfo[0]['account_category'] === 'reciept')
                                                {{ 'Receipts (+)' }}
                                            @elseif ($accountInfo[0]['account_category'] === 'payment')
                                                {{ 'Payments (-)' }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>A/C Parents </th>
                                        <td>{{ $accountInfo[0]['account_parents'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>A/C Code</th>
                                        <td>{{ $accountInfo[0]['account_code'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>A/C Head</th>
                                        <td>{{ $accountInfo[0]['account_head'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Has Child?</th>
                                        <td>
                                            @if ($accountInfo[0]['has_child'] == 1)
                                                {{ 'Yes' }}
                                            @else
                                                {{ 'No' }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            @if ($accountInfo[0]['status'] == 1)
                                                {{ 'Active' }}
                                            @else
                                                {{ 'Inactive' }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Created At</th>
                                        <td>{{ $accountInfo[0]['created_at'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Created By</th>
                                        <td>{{ $accountInfo[0]['created_by'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Modified At</th>
                                        <td>{{ $accountInfo[0]['modified_at'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Modified By</th>
                                        <td>{{ $accountInfo[0]['modified_by'] }}</td>
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



    <!-- Global Vendor -->

    @include('layouts.inc.footer')

</body>

</html>
