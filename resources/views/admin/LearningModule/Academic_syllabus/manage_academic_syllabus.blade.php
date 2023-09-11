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
                                Academic Syllabus
                            </h2>
                        </header>

                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Learning Module</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Academic Syllabus</a></li>
                        </ul>

                        <div class="card-body " id="institue">
                            <a href="{{ route('add.academic.syllabus') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                            @if(session('delete'))
                                <span style="color:red; font-size:30px; padding-left: 100px;">{{ session('delete') }}</span>
                            @endif
                            <form action="" class="es-form es-add-form">

                                <p class="text-right">Showing 1-1 of 1 item</p>
                                <!---- syllabus table  ----->
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-3 text-center ">
                                        <thead class="table-bordered">
                                            <tr>
                                                <th scope="col">Srl</th>
                                                <th scope="col">Class Name</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">File</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>
                                                    <select name="" id="">
                                                        <option value="">All</option>
                                                        <option value="" class="bold_text">Bangla Medium</option>
                                                        <option value="">Play</option>
                                                        <option value="">Nursary</option>
                                                        <option value="">KG</option>
                                                        <option value="">One</option>
                                                        <option value="">Two</option>
                                                        <option value="">Three</option>
                                                        <option value="">Four</option>
                                                        <option value="">Five</option>
                                                        <option value="">Six</option>
                                                        <option value="">Seven</option>
                                                        <option value="">Eight</option>
                                                        <option value="">Nine</option>
                                                        <option value="">Ten</option>
                                                        <option value="">Eleven</option>
                                                        <option value="">Tweleve</option>
                                                        <option value="" class="bold_text">English Medium</option>
                                                        <option value="">Play</option>
                                                        <option value="">Nursary</option>
                                                        <option value="">KG</option>
                                                        <option value="">One</option>
                                                        <option value="">Two</option>
                                                        <option value="">Three</option>
                                                        <option value="">Four</option>
                                                        <option value="">Five</option>
                                                        <option value="">Six</option>
                                                        <option value="">Seven</option>
                                                        <option value="">Eight</option>
                                                        <option value="">Nine</option>
                                                        <option value="">Ten</option>
                                                        <option value="">Eleven</option>
                                                        <option value="">Tweleve</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" name="" id="">
                                                </td>
                                                <td>

                                                </td>
                                                <td>
                                                    <select name="" id="">
                                                        <option value="">Active</option>
                                                        <option value="">Inactive</option>
                                                    </select>
                                                </td>
                                                <td></td>
                                            </tr>
                                            @foreach ($academic as $sl => $academic_syllabus)
                                                <tr>
                                                    <td>{{ $sl + 1 }}</td>
                                                    <td>{{ $academic_syllabus->class }}</td>
                                                    <td>{{ $academic_syllabus->title }}</td>
                                                    <td>{{ $academic_syllabus->file }}</td>
                                                    <td>
                                                        @if($academic_syllabus->status==1) 
                                                        <button class="btn btn-success">Active</button>
                                                        @else
                                                        <button class="btn btn-danger">Inactive</button>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a
                                                            href="{{ route('view.academic.syllabus', $academic_syllabus->id) }}"><i
                                                                class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                                        <a
                                                            href="{{ route('edit.academic.syllabus', $academic_syllabus->id) }}"><i
                                                                class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                                        <a
                                                            href="{{ route('academic.syllabus.delete', $academic_syllabus->id) }}"><i
                                                                class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <!---- /syllabus table ----->

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
