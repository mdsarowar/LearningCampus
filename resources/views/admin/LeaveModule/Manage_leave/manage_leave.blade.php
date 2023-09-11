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
                                Manage Leaves
                            </h2>
                        </header>

                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Leave Module</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Manage Leaves</a></li>
                        </ul>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">
                                <a href="{{ route('leave.entry') }}" class="btn btn-primary"><i
                                        class="fa-solid fa-plus"></i></a>
                                <p class="text-right">Showing 1-1 of 1 item</p>
                                <!---- session table  ----->
                                <table class="table table-bordered mt-3 text-center branch_table">
                                    <thead class="table-bordered">
                                        <tr>
                                            <th scope="col">Srl</th>
                                            <th scope="col">Employee Type</th>
                                            <th scope="col">Employee</th>
                                            <th scope="col">Leave Type</th>
                                            <th scope="col">From Date</th>
                                            <th scope="col">End Date</th>
                                            <th scope="col">Total Days</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">All</option>
                                                    <option value="">Full-time</option>
                                                    <option value="">Half-time</option>
                                                    <option value="">Casual</option>
                                                    <option value="">Parmanant</option>
                                                    <option value="">Fixed-term</option>
                                                    <option value="">Shift-worker</option>
                                                    <option value="">Outworkers</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">All</option>
                                                    <option value="">Full-time</option>
                                                    <option value="">Half-time</option>
                                                    <option value="">Casual</option>
                                                    <option value="">Parmanant</option>
                                                    <option value="">Fixed-term</option>
                                                    <option value="">Shift-worker</option>
                                                    <option value="">Outworkers</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="leave_type_id" id="">
                                                    @foreach ($leave as $leave_type)
                                                        <option value="{{ $leave_type->id }}">{{ $leave_type->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>

                                            <td>
                                                <input type="text" name="" id="">
                                            </td>

                                            <td>
                                                <input type="text" name="" id="">
                                            </td>

                                            <td></td>
                                        </tr>
                                        @foreach ($manage as $sl => $manage_leave)
                                            <tr>
                                                <td>{{ $sl + 1 }}</td>
                                                <td>{{ $manage_leave->rel_to_employeetype->type }}</td>
                                                <td>{{ $manage_leave->rel_to_employeetype->name }}</td>
                                                <td>{{ $manage_leave->rel_to_leave_type->title }}</td>
                                                <td>{{ $manage_leave->from_date }}</td>
                                                <td>{{ $manage_leave->end_date }}</td>
                                                <td>{{ $manage_leave->total_days }}</td>
                                                <td>
                                                    <a href="{{ route('view.manage.leave', $manage_leave->id) }}"><i
                                                            class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                                    <a href="{{ route('edit.manage.leave', $manage_leave->id) }}"><i
                                                            class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                                    <a href="{{ route('manage.leave.delete', $manage_leave->id) }}"><i
                                                            class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>

                                <!---- /session table ----->

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
