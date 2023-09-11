<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Learning Campus | SMS Details Report</title>
    @include('layouts.inc.head')

    <style>
        .contact_no {
            position: absolute;
            padding: 4px 8px;
            background-color: rgb(215, 221, 255);
            border-radius: 4px 0 0 4px;
        }
    </style>
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
                            <h2 class="text-white mb-0">SMS Details Report</h2>
                        </header>

                        <div class="academic_info">
                            <div class="container">

                                <div id="searchLoader" style="text-align: center; display:none">
                                    <img src="{{ asset('assets/img/dual_ball_loader.gif') }}" alt=""
                                        width="80">
                                </div>

                                <form id="smsDetailsReportForm">
                                    @csrf
                                    <div class="row mt-3 mb-4">
                                        <div class="col-6">
                                            <label for="">SMS Type <span class="text-danger">*</span></label>
                                            <select name="sms_type" id="sms_type">
                                                <option value="all">Select Type</option>
                                                <option value="Admission">Admission</option>
                                                <option value="Attendence">Attendence</option>
                                                <option value="Result">Result</option>
                                                <option value="Payroll">Payroll</option>
                                                <option value="Account">Account</option>
                                                <option value="Custom">Custom</option>
                                            </select>
                                        </div>

                                        <div class="col-6">
                                            <label for="">Start Date <span class="text-danger">*</span></label>
                                            <input type="date" name="start_date" id="start_date">
                                        </div>
                                    </div>

                                    <div class="row mt-3 mb-4">
                                        <div class="col-6">
                                            <label for="">Mobile <span>*</span></label>
                                            <div class="flex" style="position: relative">
                                                <p class="d-inline contact_no">+88</p>
                                                <input name="phoneNumber" id="phoneNumber" type="number" value=""
                                                    placeholder="01810000055" style="padding-left: 50px">
                                            </div>
                                            <p>Without country code (+88)</p>
                                        </div>

                                        <div class="col-6">
                                            <label for="">End Date <span class="text-danger">*</span></label>
                                            <input type="date" name="end_date" id="end_date">
                                        </div>
                                    </div>

                                    <div class="row mt-3 mb-4">
                                        <div class="col-12 text-center">
                                            <i id="detailsReportBtn" class="btn btn-primary px-5">Submit</i>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            <div id="reportTable" style="display: none">
                                <div class="table-responsive attendenceTable studentLedger">
                                    <div class="text-center studentDuesTop">
                                        <h2>Learning Campus School</h2>
                                        <a href="#">www.learningCampus.com</a>
                                        <p>Uttara, Dhaka</p>
                                        <p><span id="reportTime"></span></p>
                                        <p><span id="smsType"></span></p>
                                        <p><span id="total_sms"></span></p>
                                    </div>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="th_color">
                                                <th scope="col">Sl. </th>
                                                <th scope="col">Mobile No</th>
                                                <th scope="col">SMS Body</th>
                                                <th scope="col">SMS Count</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableDataContainer"></tbody>
                                    </table>

                                </div>
                            </div>


                            <p id="no_result_msg" style="display: none; text-align:center;">No SMS Found</p>
                        </div>
                </section>

            </div>
        </div>
    </main>

    <!-- Global Vendor -->

    @include('layouts.inc.footer')

    <script>
            $('#detailsReportBtn').click(function() {
            var formData = $('#smsDetailsReportForm').serialize();

            $('#searchLoader').show();
            $.ajax({
                url: '{{ route('sms.details.report') }}',
                type: 'POST',
                data: formData,
                success: function(response) {
                    $('#searchLoader').hide();

                    if (response.count === 0) {
                        $('#tableDataContainer').empty();
                        $('#reportTable').hide();
                        $('#no_result_msg').show();
                    } else {
                        var phoneNumbers = {};
                        var serial = 1;
                        $('#tableDataContainer').empty();
                        $('#reportTable').show();
                        $('#no_result_msg').hide();

                        $.each(response.data, function(index, data) {
                            if (!phoneNumbers[data.contact_no]) {
                                phoneNumbers[data.contact_no] = {
                                    count: 1,
                                    smsBody: data.sms_body,
                                    status: data.status
                                };
                            } else {
                                phoneNumbers[data.contact_no].count++;
                            }
                        });

                        $.each(phoneNumbers, function(phoneNumber, details) {
                            var statusColor = details.status === 'success' ?
                                'color: rgb(0, 200, 0)' : 'color: rgb(240, 0, 0)';
                            var row = `
                        <tr>
                            <th scope="row">${serial}</th>
                            <td>${phoneNumber}</td>
                            <td>${details.smsBody}</td>
                            <td>${details.count}</td>
                            <td>${response.data.find(item => item.contact_no === phoneNumber).created_at}</td>
                            <td style="${statusColor}">${details.status}</td>
                        </tr>
                    `;
                            $('#tableDataContainer').append(row);
                            serial++;
                        });

                        $('#total_sms').text('Total SMS: ' + response.count);
                        $('#smsType').text('SMS Type: ' + response.sms_type);
                        $('#reportTime').show();
                        $('#reportTime').text('SMS Report Date: ' + response.start_date + ' to ' +
                            response.end_date);
                    }
                },

                error: function(response) {
                    console.log(response.responseText);
                }
            });
        });
    </script>

    <script>
        $().button('toggle')
    </script>
</body>

</html>
