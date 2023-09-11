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
        <!-- Success & Error Message -->
        <div>
            @include('layouts.actionmessage')
        </div>
        <!-- Success & Error Message  End-->


        <div class="u-content">
            <div class="u-body">

                <section class="es-form-area">
                    <div class="card">
                        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                            <h2 class="text-white mb-0">
                                Branch View
                            </h2>
                        </header>


                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">
                                <div class="session_view_link mt-2 mb-5">
                                    <a href="{{ route('add_branch') }}" class="btn btn-primary"><i
                                            class="fa-solid fa-plus"></i></a>
                                    <a href="{{ route('edit_branch') }}?id={{ $branch_details[0]['id'] }}" class="btn btn-primary"><i
                                            class="fa-solid fa-pencil"></i></a>
                                </div>
                                <!---- Branch View table  ----->
                                <table class="table table-bordered table-striped mt-3 branch_view_table">
                                    <tbody>
                                        <tr>
                                            <th>Short Name</th>
                                            <td>{{ $branch_details[0]['short_name'] }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <th>Branch Name</th>
                                            <td>{{ $branch_details[0]['branch_name'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td>{{ $branch_details[0]['address'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>City</th>
                                            <td>{{ $branch_details[0]['city'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Zip Code</th>
                                            <td>{{ $branch_details[0]['zip_code'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Phone/Mobile</th>
                                            <td>{{ $branch_details[0]['phone'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Fax</th>
                                            <td>{{ $branch_details[0]['fax'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $branch_details[0]['email'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Weekly Holiday</th>
                                            <td>{{ $branch_details[0]['holiday'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>{{ $branch_details[0]['status'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Authority Signature</th>
                                            <td>
                                                <img src="Logo _ Icon/logo.png" class="signature" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Created At</th>
                                            <td>{{ $branch_details[0]['created_at'] }}</td>
                                        </tr>

                                        <tr>
                                            <th>Updated At</th>
                                            <td>{{ $branch_details[0]['updated_at'] }}</td>
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


    <script>
        function institue() {
            var institue = document.getElementById("institue");
            var general = document.getElementById("general");

            institue.style.display = "block";
            general.style.display = "none";
        }

        function general() {
            var institue = document.getElementById("institue");
            var general = document.getElementById("general");

            general.style.display = "block";
            institue.style.display = "none";
        }
    </script>

    <!-- Global Vendor -->

    @include('layouts.inc.footer')
</body>

</html>
