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
                            <h2 class="text-white mb-0">Add Exam Part</h2>
                        </header>
                        <div class="branch_edit">
                            <div class="newrow">
                                <form action="{{ route('exam.part.post') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                
                                    <div class="col-md-10 mb-3">
                                        <label for="">Exam Name <span>*</span></label>
                                        <input type="text" name="exam_name" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Rank <span>*</span></label>
                                        <input type="number" name="rank" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Status <span>*</span></label>
                                        <select name="status" id="">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mt-4 mb-3">
                                        <p>
                                        <button type="submit" class="btn bg-gradient border-0 text-white">Create</button>                  
                                        </p>
                                    </div>

                                </form>
                            </div>
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