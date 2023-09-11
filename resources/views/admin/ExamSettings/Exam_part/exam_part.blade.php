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
                                Manage Exam Parts
                            </h2>
                        </header>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">
                                <a href="{{ route('add.exam.part') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                            <p class="text-right">Showing 1-1 of 1 item</p>
                                <!---- session table  ----->
                                    <table class="table table-bordered mt-3 text-center branch_table">
                                        <thead class="table-bordered">
                                            <tr>
                                                <th scope="col">Srl</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Rank</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row"></th>
                                                <td>
                                                    <input type="text" name="" id="">
                                                </td>
                                                <td>
                                                    <input type="text" name="" id="">
                                                </td>
                                                <td>
                                                    <select name="" id="">
                                                        <option value="">All</option>
                                                        <option value="">Active</option>
                                                        <option value="">Inactive</option>
                                                    </select>
                                                </td>
                                                <td></td>
                                            </tr>
                                            @foreach($exam as $sl=>$exam_part)
                                            <tr>
                                                <td>{{ $sl+1 }}</td>
                                                <td>{{ $exam_part->exam_name }}</td>
                                                <td>{{ $exam_part->rank }}</td>
                                                <td>
                                                    @if($exam_part->status==1) 
                                                        <button class="btn btn-success">Active</button>
                                                    @else
                                                        <button class="btn btn-danger">Inactive</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('view.exam.part', $exam_part->id) }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                                    
                                                    <a href="{{ route('delete.exam.part', $exam_part->id) }}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
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