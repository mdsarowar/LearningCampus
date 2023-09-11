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
                            <h2 class="text-white mb-0">Add Assign Exam</h2>
                        </header>
                        <div class="session_add">
                            <div class="newrow">
                                <form action="{{ route('assign.exam.post') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-10 mb-3">
                                        <label for="">Session <span>*</span></label>
                                        <select name="exam_term_id" id="">
                                            @foreach($ex_term as $terms)
                                                <option value="{{ $terms->id }}">{{ $terms->session }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                
                                    <div class="col-md-10 mb-3">
                                        <label for="">Exam Term <span>*</span></label>
                                        <select name="exam_term_id" id="">
                                            @foreach($ex_term as $terms)
                                                <option value="{{ $terms->id }}">{{ $terms->term_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Exam Part <span>*</span></label>
                                        <select name="exam_part_id" id="">
                                            @foreach($ex_part as $exam_part)
                                                <option value="{{ $exam_part->id }}">{{ $exam_part->exam_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Individual Pass ? <span>*</span></label>
                                        <select name="indi_pass" id="">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Consider Fail on Absent ? <span>*</span></label>
                                        <select name="abesent_fail" id="">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>

                                    
                                    <div class="col-md-10 mb-3">
                                        <label for="">Marks for Term (%) <span>*</span></label>
                                        <select name="exam_term_id" id="">
                                            @foreach($ex_term as $terms)
                                                <option value="{{ $terms->id }}">{{ $terms->marks_final }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col-md-10 mb-3">
                                        <label for="">Class <span>*</span></label>
                                        <select name="class_name" id="">
                                            <option data-display="Select">Select Class</option>
                                                <optgroup label="Bangla Medium" class="bold_text">
                                                    @foreach ($classesList as $class)
                                                        @if ($class['class_type'] === 'Bangla')
                                                            <option
                                                                value="{{ $class['class_type'] . '_' . $class['class_name'] }}">
                                                                {{ $class['class_name'] }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </optgroup>
                                                <optgroup label="English Medium" class="bold_text">
                                                    @foreach ($classesList as $class)
                                                        @if ($class['class_type'] === 'English')
                                                            <option
                                                                value="{{ $class['class_type'] . '_' . $class['class_name'] }}">
                                                                {{ $class['class_name'] }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </optgroup>
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