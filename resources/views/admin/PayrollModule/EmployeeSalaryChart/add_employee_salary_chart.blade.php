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
                <h2 class="text-white mb-0">Add Employee Salary</h2>
            </header>
            {{-- form submission message start --}}
            @if (session('error'))
                <div class="alert alert-danger col-8 m-auto">
                    {{ session('error') }}
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success col-8 m-auto">
                    {{ session('success') }}
                </div>
            @endif
            {{-- form submission message end --}}
            <form action="{{ route('insert_employee_salary_chart') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="branch_edit">

                    <div class="row">

                        <div class="col-md-10 mb-3">
                            <label for="">Employee Type <span>*</span></label>
                             <select name="employee_type" id="employee_type" required>
                                 <option value="">Select Employee Type </option>
                                 <option value="Casual">Casual</option>
                                 <option value="Contractual">Contractual</option>
                                 <option value="Full-time">Full-time</option>
                                 <option value="Half-time">Half-time</option>
                                 <option value="Part-time">Part-time</option>
                             </select>
                         </div>


                         <div class="col-md-10 mb-3">
                            <label for="">Payrolls Head <span>*</span></label>
                             <select name="payroll_head" id="payroll_head" required>
                                 <option value="">Select Payrolls Head</option>
                                 <option value="Demo1">Demo1</option>
                                 <option value="Demo2">Demo2</option>
                                 <option value="Demo3">Demo3</option>
                                 <option value="Demo4">Demo4</option>
                                 <option value="Demo5">Demo5</option>
                             </select>
                         </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Status <span>*</span></label>
                            <select name="status" id="status" required>
                                <option value="">Select Status</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>

                        <div class="col-md-10 mt-4 mb-3">
                            <p>
                                <button type="submit"
                                    class="btn bg-gradient border-0 text-white">Create</button>
                                    <a href="" class="btn  border-0 text-white">Cancel</a>
                            </p>
                        </div>
                    </div>

                </div>
            </form>
        </div>    
    </section>
    
        </div>
    </div>

       
    </main>

    <!-- Global Vendor -->
    <script>
        selectImage.onchange = evt => {
            preview = document.getElementById('preview');
            preview.style.display = 'block';
            const [file] = selectImage.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
    </script>

    @include('layouts.inc.footer')
</body>

</html>
