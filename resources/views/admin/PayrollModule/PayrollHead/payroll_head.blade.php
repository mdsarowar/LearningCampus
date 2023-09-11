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
                                Payroll Head
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

                        <div class="card-body" id="institue">
                            <div class="es-form es-add-form">
                                <a href="{{ route('add_payroll_head') }}" class="btn btn-primary"><i
                                        class="fa-solid fa-plus"></i></a>
                                <div id="searchLoader" style="text-align: center; display:none">
                                    <img src="{{ asset('assets/img/dual_ball_loader.gif') }}" alt=""
                                        width="80">
                                </div>
                                <p class="text-right">Showing 1-1 of 1 item</p>

                                @if (!empty($payrollsData))

                                    <div class="table-responsive">
                                        <!---- session table  ----->
                                        <table class="table table-bordered mt-3 text-center">
                                            <thead class="table-bordered">
                                                <tr>
                                                    <th scope="col">Srl</th>
                                                <th scope="col">A/C Category</th>
                                                <th scope="col">A/C Parents</th>
                                                <th scope="col">A/C Head</th>
                                                <th scope="col">A/C Code</th>
                                                <th scope="col">Yead/Montly</th>
                                                <th scope="col">Has Child?</th>
                                                <th scope="col">Absent Deduction?</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Actions</th>
                                                </tr>
                                            </thead>

                                            <form action="{{ route('payroll_head_search') }}" method="POST"
                                                id="tableSearchForm">
                                                @csrf
                                                <tr>
                                                    <th scope="row"></th>
                                                <td>
                                                    <select name="categories" id="categories">
                                                        <option value="all" selected>All</option>
                                                        <option value="Addition">Addition</option>
                                                        <option value="Deduction">Deduction</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="parents" id="parents">
                                                        <option value="all" selected>All</option>
                                                        <option value="Grand Parents">Grand Parents</option>
                                                        <option value="30.00 Yearly Tour">30.00 Yearly Tour</option>
                                                        <option value="34.00 Admission">34.00 Admission</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" name="heads" id="heads"
                                                        value="" placeholder="A/C Head">
                                                </td>
                                                <td>
                                                    <input type="text" name="payroll_code" id="payroll_code"
                                                        value="" placeholder="A/C Code">
                                                </td>
                                                <td>
                                                    <select name="payroll_period" id="payroll_period">
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
                                                    <select name="absent_deductions" id="absent_deductions">
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
    
                                                    <td style="color:#6b15b6" id="SearchBtn"><i
                                                            class="fa-solid fa-search"></i></td>
                                                </tr>
                                            </form>

                                            <tbody id="tableContents">

                                                {{-- table data --}}
                                                @php
                                                    $serial = 1;
                                                @endphp

                                                @foreach ($payrollsData as $payroll)
                                                    <tr>
                                                        <td>{{ $serial }}</td>
                                                    <td>
                                                        @if ($payroll['categories'] === 'Addition')
                                                            {{ 'Addition' }}
                                                        @elseif ($payroll['categories'] === 'Deduction')
                                                            {{ 'Deduction' }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($payroll['parents'] === 'Grand Parents')
                                                            {{ 'Grand Parents' }}
                                                        @elseif ($payroll['parents'] === '30.00 Yearly Tour')
                                                            {{ '30.00 Yearly Tour' }}
                                                        @elseif ($payroll['parents'] === '34.00 Yearly Admission')
                                                        {{ '34.00 Yearly Admission' }}
                                                        @endif
                                                    </td>
                                                    <td>{{ $payroll['heads'] }}</td>
                                                    <td>{{ $payroll['payroll_code'] }}</td>
                                                    <td>
                                                        @if ($payroll['payroll_period'] === 'Yearly')
                                                            {{ 'Yearly' }}
                                                        @elseif ($payroll['payroll_period'] === 'Monthly')
                                                            {{ 'Monthly' }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($payroll['has_child'] == 1)
                                                            {{ 'Yes' }}
                                                        @else
                                                            {{ 'No' }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($payroll['absent_deductions'] == 1)
                                                            {{ 'Yes' }}
                                                        @else
                                                            {{ 'No' }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($payroll['status'] == 1)
                                                            <p style="color: rgb(0, 214, 114)">{{ 'Active' }}
                                                            </p>
                                                        @else
                                                            <p style="color: red">{{ 'Inactive' }}</p>
                                                        @endif
                                                        </td>
                                                        <td style="display: flex; align-items:center; border:0">
                                                            <a
                                                                href="{{ route('view_payroll_head') }}?id={{ $payroll['id'] }}"><i
                                                                    class="fa-solid fa-eye"></i></a>&nbsp
                                                            &nbsp
                                                            <a
                                                                href="{{ route('edit_payroll_head') }}?id={{ $payroll['id'] }}"><i
                                                                    class="fa-solid fa-pencil"></i></a>&nbsp
                                                            &nbsp
                                                            <a onclick="showDeleteModal('Payroll', {{ $payroll['id'] }})"
                                                                style="background-color: transparent; color:#6b15b6"><i
                                                                    class="fa-solid fa-trash"></i></a>&nbsp
                                                            &nbsp
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $serial++;
                                                    @endphp
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <p id="no_result_msg" style="display: none">No Branch Found</p>
                                        <!---- /session table ----->
                                    </div>
                                @else
                                    <p>No Branch found</p>
                                @endif

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
                    <form action="{{ route('delete_payroll_head') }}" method="POST">
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
            $('#SearchBtn').click(function() {
                var formData = $('#tableSearchForm').serialize();

                $('#searchLoader').show();
                $.ajax({
                    url: '{{ route('payroll_head_search') }}',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#searchLoader').hide();

                         if (response.length === 0) {
                            $('#tableContents').empty();
                            $('#no_result_msg').show();
                        } else {
                            var serial = 1;
                            $('#tableContents').empty();
                            $('#no_result_msg').hide();
                            $.each(response, function(index, payroll) {
                                var row = '<tr>' +
                                    '<td>' + serial + '</td>' +
                                    '<td>' + (payroll.categories === 'Addition' ?
                                        'Addition' : 'Deduction') + '</td>' +
                                    '<td>' + payroll.parents + '</td>' +
                                    '<td>' + payroll.heads + '</td>' +
                                    '<td>' + payroll.payroll_code + '</td>' +
                                    '<td>' + payroll.payroll_period + '</td>' +
                                    '<td>' + (payroll.has_child == 1 ? 'Yes' : 'No') + '</td>' +
                                    '<td>' + (payroll.absent_deductions == '1' ? 'Yes' : 'No') + '</td>' +
                                    '<td>' + (payroll.status == 1 ?
                                        '<p style="color: rgb(0, 214, 114)">Active</p>' :
                                        '<p style="color: red">Inactive</p>') +
                                    '</td>' +
                                    '<td>' +
                                    '<td style="display: flex; align-items:center; border:0">' +
                                    '<a href="{{ route('view_payroll_head') }}?id=' +
                                    payroll.id +
                                    '"><i class="fa-solid fa-eye"></i></a>&nbsp&nbsp&nbsp' +
                                    '<a href="{{ route('edit_payroll_head') }}?id=' +
                                    payroll.id +
                                    '"><i class="fa-solid fa-pencil"></i></a>&nbsp&nbsp&nbsp' +
                                    '<a onclick="showDeleteModal(\'Payroll\',' + payroll
                                    .id +
                                    ')" style="background-color: transparent; color:#6b15b6"><i class="fa-solid fa-trash"></i></a>' +
                                    '</td>' +
                                    '</tr>';

                                $('#tableContents').append(row);

                                serial++;
                            });
                        } 

                        console.log(response);

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
