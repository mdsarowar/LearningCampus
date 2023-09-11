<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Learning Campus | Account Head</title>
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
                                Manage Account Head
                            </h2>
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

                        <div class="card-body table-responsive" id="institue">
                            <div class="es-form es-add-form">

                                <a href="{{ route('account.head.add') }}" class="btn btn-primary"><i
                                        class="fa-solid fa-plus"></i></a>

                                <div id="searchLoader" style="text-align: center; display:none">
                                    <img src="{{ asset('assets/img/dual_ball_loader.gif') }}" alt=""
                                        width="80">
                                </div>

                                @if (count($accountsData) > 0)
                                    <p class="text-right">Showing 1-1 of 1 item</p>
                                @endif

                                <!---- session table  ----->
                                <table class="table table-bordered mt-3 text-center branch_table" id="accountsTable">
                                    @if (count($accountsData) > 0)

                                        <thead class="table-bordered">
                                            <tr>
                                                <th scope="col">Sl</th>
                                                <th scope="col">A/C Type</th>
                                                <th scope="col">A/C Category</th>
                                                <th scope="col">A/C Parents</th>
                                                <th scope="col">A/C Head</th>
                                                <th scope="col">A/C Code</th>
                                                <th scope="col">Yearly / Monthly</th>
                                                <th scope="col">Has Child ? </th>
                                                <th scope="col" width="35px">Status</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>

                                        <form action="/account-head-search" method="POST" id="accountSearchForm">
                                            @csrf
                                            <tr>
                                                <th scope="row"></th>
                                                <td>
                                                    <select name="account_type" id="account_type">
                                                        <option value="all" selected>All</option>
                                                        <option value="Academic">Academic</option>
                                                        <option value="General">General</option>
                                                        <option value="Bank">Bank</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="account_category" id="account_category">
                                                        <option value="all" selected>All</option>
                                                        <option value="reciept">Recipts(+)</option>
                                                        <option value="payment">Payments(-)</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="account_parents" id="account_parents">
                                                        <option value="all" selected>All</option>
                                                        <option value="Grand Parents">Grand Parents</option>
                                                        <option value="30.00 Yearly Tour">30.00 Yearly Tour</option>
                                                        <option value="34.00 Admission">34.00 Admission</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" name="account_head" id="account_head"
                                                        value="" placeholder="A/C Head">
                                                </td>
                                                <td>
                                                    <input type="text" name="account_code" id="account_code"
                                                        value="" placeholder="A/C Code">
                                                </td>
                                                <td>
                                                    <select name="account_period" id="account_period">
                                                        <option value="all" selected>All</option>
                                                        <option value="Yearly">Yearly</option>
                                                        <option value="Monthly">Monthly</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="has_child" id="has_child">
                                                        <option value="all" selected>All &nbsp;&nbsp;&nbsp;
                                                        </option>
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status" id="status">
                                                        <option value="all" selected>All &nbsp;&nbsp;&nbsp;
                                                        </option>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </td>

                                                <td style="color:#6b15b6" id="accountSearchBtn"><i
                                                        class="fa-solid fa-search"></i></td>
                                            </tr>
                                        </form>

                                        <tbody id="accountsContainer">

                                            @php
                                                $serial = 1;
                                            @endphp

                                            @foreach ($accountsData as $account)
                                                <tr>
                                                    <td>{{ $serial }}</td>
                                                    <td>{{ $account['account_type'] }}</td>
                                                    <td>
                                                        @if ($account['account_category'] === 'reciept')
                                                            {{ 'Receipts (+)' }}
                                                        @elseif ($account['account_category'] === 'payment')
                                                            {{ 'Payments (-)' }}
                                                        @endif
                                                    </td>
                                                    <td>{{ $account['account_parents'] }}</td>
                                                    <td>{{ $account['account_head'] }}</td>
                                                    <td>{{ $account['account_code'] }}</td>
                                                    <td>{{ $account['account_period'] }}</td>
                                                    <td>
                                                        @if ($account['has_child'] == 1)
                                                            {{ 'Yes' }}
                                                        @else
                                                            {{ 'No' }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($account['status'] == 1)
                                                            <p style="color: rgb(0, 214, 114)">{{ 'Active' }}
                                                            </p>
                                                        @else
                                                            <p style="color: red">{{ 'Inactive' }}</p>
                                                        @endif
                                                    </td>
                                                    <td style="display: flex; align-items:center; border:0">
                                                        <a
                                                            href="{{ route('account.head.view') }}?account_code={{ $account['account_code'] }}"><i
                                                                class="fa-solid fa-eye"></i></a>&nbsp
                                                        &nbsp
                                                        <a
                                                            href="{{ route('account.head.edit') }}?account_code={{ $account['account_code'] }}"><i
                                                                class="fa-solid fa-pencil"></i></a>&nbsp
                                                        &nbsp
                                                        <a onclick="showDeleteModal('Account Head', {{ $account['account_code'] }})"
                                                            style="background-color: transparent; color:#6b15b6"><i
                                                                class="fa-solid fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @php
                                                    $serial++;
                                                @endphp
                                            @endforeach

                                        </tbody>
                                    @else
                                        <p>No Accounts Found</p>
                                    @endif

                                </table>
                                <p id="no_result_msg" style="display: none">No Accounts Found</p>
                                <!---- /session table ----->

                            </div>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </main>


    <!-- Global Vendor -->

    @include('layouts.inc.footer')

    {{-- confirm popup start --}}
    <div class="modal fade" id="confirmModalBox" tabindex="-1" aria-labelledby="ConfirmModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ConfirmModalLabel">Confirm Deletion...</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this <span id="label"></span>? This action
                    cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ route('accound.head.delete') }}" method="POST">
                        @csrf
                        <input type="hidden" name="label_id" value="">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showDeleteModal(label, id) {
            var modal = new bootstrap.Modal(document.getElementById("confirmModalBox"));
            var labelElement = document.getElementById("label");
            var formInput = document.querySelector("#confirmModalBox [name='label_id']");

            labelElement.textContent = label;
            formInput.value = id;
            modal.show();
        }
    </script>
    {{-- confirm popup start --}}

    {{-- using ajax to handle account head search form request --}}
    <script>
        $(document).ready(function() {
            $('#accountSearchBtn').click(function() {
                var formData = $('#accountSearchForm').serialize();

                $('#searchLoader').show();
                $.ajax({
                    url: '{{ route('account.head.search') }}',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#searchLoader').hide();

                        if (response.length === 0) {
                            $('#accountsContainer').empty();
                            $('#no_result_msg').show();
                        } else {
                            var serial = 1;
                            $('#accountsContainer').empty();
                            $.each(response, function(index, account) {
                                var row = '<tr>' +
                                    '<td>' + serial + '</td>' +
                                    '<td>' + account.account_type + '</td>' +
                                    '<td>' + (account.account_category === 'reciept' ?
                                        'Receipts (+)' : 'Payments (-)') + '</td>' +
                                    '<td>' + account.account_parents + '</td>' +
                                    '<td>' + account.account_head + '</td>' +
                                    '<td>' + account.account_code + '</td>' +
                                    '<td>' + account.account_period + '</td>' +
                                    '<td>' + (account.has_child == 1 ? 'Yes' : 'No') +
                                    '</td>' +
                                    '<td>' + (account.status == 1 ?
                                        '<p style="color: rgb(0, 214, 114)">Active</p>' :
                                        '<p style="color: red">Inactive</p>') +
                                    '</td>' +
                                    '<td style="display: flex; align-items:center; border:0">' +
                                    '<a href="{{ route('account.head.view') }}?account_code=' +
                                    account.account_code +
                                    '"><i class="fa-solid fa-eye"></i></a>&nbsp&nbsp' +
                                    '<a href="{{ route('account.head.edit') }}?account_code=' +
                                    account.account_code +
                                    '"><i class="fa-solid fa-pencil"></i></a>&nbsp&nbsp' +
                                    '<a onclick="showDeleteModal(\'Account Head\',' +
                                    account
                                    .account_code +
                                    ')" style="background-color: transparent; color:#6b15b6"><i class="fa-solid fa-trash"></i></a>' +
                                    '</td>' +
                                    '</tr>';

                                $('#accountsContainer').append(row);

                                serial++;
                            });
                        }

                        // console.log(response);

                    },
                    error: function(response) {
                        console.log(response.responseText);
                    }
                });
            });
        });
    </script>

</body>

</html>
