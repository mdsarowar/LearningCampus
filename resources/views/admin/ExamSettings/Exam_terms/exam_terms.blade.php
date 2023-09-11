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
                                Manage Exam Terms
                            </h2>
                        </header>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">
                                <a href="{{ route('add.exam.terms') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                            <p class="text-right">Showing 1-1 of 1 item</p>
                                <!---- session table  ----->
                                    <table class="table table-bordered mt-3 text-center branch_table">
                                        <thead class="table-bordered">
                                            <tr>
                                                <th scope="col">Srl</th>
                                                <th scope="col">Session</th>
                                                <th scope="col">Term Name</th>
                                                <th scope="col">Marks For Final (%)</th>
                                                <th scope="col">Related to Final Term ?	</th>
                                                <th scope="col">Final Term ?</th>
                                                <th scope="col">Exam Routine With Instruction ?</th>
                                                <th scope="col">Website Result Publish ?</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row"></th>
                                                <td>
                                                    <select name="" id="">
                                                        <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                                        <option value="">2022</option>
                                                        <option value="">2021</option>
                                                        <option value="">2020</option>
                                                        <option value="">2019</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" name="" id="">
                                                </td>
                                                <td>
                                                    <input type="text" name="" id="">
                                                </td>
                                                <td>
                                                    <select name="" id="">
                                                        <option value="">All </option>
                                                        <option value="">Yes</option>
                                                        <option value="">No</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="" id="">
                                                        <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                                        <option value="">Yes</option>
                                                        <option value="">No</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="" id="">
                                                        <option value="">All </option>
                                                        <option value="">Yes</option>
                                                        <option value="">No</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="" id="">
                                                        <option value="">All</option>
                                                        <option value="">Yes</option>
                                                        <option value="">No</option>
                                                    </select>
                                                </td>


                                                <td></td>
                                            </tr>

                                            @foreach($terms as $sl=>$exam_term)
                                            <tr>
                                                <td>{{ $sl+1 }}</td>
                                                <td>{{ $exam_term->session }}</td>
                                                <td>{{ $exam_term->term_name }}</td>
                                                <td>{{ $exam_term->marks_final }}%</td>
                                                <td>
                                                    @if($exam_term->relate_final_term==1) 
                                                        <button class="btn btn-success">Yes</button>
                                                    @else
                                                        <button class="btn btn-danger">No</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($exam_term->final_term==1) 
                                                        <button class="btn btn-success">Yes</button>
                                                    @else
                                                        <button class="btn btn-danger">No</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($exam_term->exam_ins=1) 
                                                        <button class="btn btn-success">Yes</button>
                                                    @else
                                                        <button class="btn btn-danger">No</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($exam_term->web_result_publish==1) 
                                                        <button class="btn btn-success">Yes</button>
                                                    @else
                                                        <button class="btn btn-danger">No</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('view.exam.terms', $exam_term->id) }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                                    <!-- <a href="exam_terms_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp -->
                                                    <a href="{{ route('delete.exam.terms', $exam_term->id) }}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
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