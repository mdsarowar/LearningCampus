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
                    Employee's Salary Chart
                </h2>
            </header>
                <!-- Success & Error Message -->
                <div>
                    @include('layouts.actionmessage')
                </div>
                <!-- Success & Error Message  End-->
            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <a href="{{ route('add_employee_salary_chart') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                   <p class="text-right">Showing 1-1 of 1 item</p>
                    <!---- session table  ----->
                        <table class="table table-bordered mt-3 text-center branch_table">
                            <thead class="table-bordered">
                                <tr>
                                    <th scope="col">Srl</th>
                                    <th scope="col">Employee Type</th>
                                    <th scope="col">Payrolls Head</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
    
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <select name="" id="">
                                            <option value="">All</option>
                                            <option value="">Casual</option>
                                            <option value="">Contractual</option>
                                            <option value="">Full-time</option>
                                            <option value="">Half-time</option>
                                            <option value="">Shift-Worker</option>
                                        </select>
                                    </td>
                                  
                                    <td> </td>
                
                                    <td></td>
                                </tr>
                                @foreach ($emp_salary_charts as $item)
                                <tr>
                                    <td>{{ $item->id ?? null }}</td>
                                    <td>{{ $item->employee_type ?? null }}</td>
                                    <td>{{ $item->payroll_head ?? null }}</td>
                                    <td>
                                        <a href="employee_salary_chart_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="employee_salary_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href="{{ route('delete_employee_salary_chart', [$item->id]) }}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
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
    
    @include('layouts.inc.footer')
    </body>
    </html>
