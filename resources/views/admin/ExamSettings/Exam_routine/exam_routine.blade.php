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
                    <h2 class="text-white mb-0">Exam Routine</h2>
                </header>
                
                    <div class="academic_info">
                        <h5>
    
</h5>

<div class="container">

 
    <form action="{{ route('exam.routine.upper.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mt-3 mb-4">
            <div class="col-6 col-md-6">
            <label for="">Class <span>*</span></label>
                <select name="class_name" id="">
                    <option data-display="Select">Select Class</option>
                    <optgroup label="Bangla Medium" class="bold_text">
                        @foreach ($classesList as $class)
                            @if ($class['class_type'] === 'Bangla')
                                <option value="{{ $class['class_type'] . '_' . $class['class_name'] }}">{{ $class['class_name'] }}</option>
                            @endif
                        @endforeach
                    </optgroup>
                    <optgroup label="English Medium" class="bold_text">
                        @foreach ($classesList as $class)
                            @if ($class['class_type'] === 'English')
                                <option value="{{ $class['class_type'] . '_' . $class['class_name'] }}">{{ $class['class_name'] }}</option>
                            @endif
                        @endforeach
                    </optgroup>
                </select> 
            </div>

            <div class="col-6 col-md-6">
                <label for="">Shift <span>*</span></label>
                <input type="text" name="shift" id="">
            </div>

        </div>

        <div class="row mt-3 mb-4">
            <div class="col-6 col-md-6">
                <label for="">Section <span>*</span></label>
                <input type="text" name="section" id="">
            </div>

            <div class="col-6 col-md-6">
            <label for="">Exam Term <span>*</span></label>
                <select name="exam_term_id" id="">
                    @foreach($ex_term as $terms)
                        <option value="{{ $terms->id }}">{{ $terms->term_name }}</option>
                     @endforeach
                </select>
            </div>

        </div>

        <div class="row mt-3 mb-4">
            <div class="col-6 col-md-6">
            <label for="">Exam Part <span>*</span></label>
                <select name="exam_part_id" id="">
                    @foreach($ex_part as $exam_part)
                        <option value="{{ $exam_part->id }}">{{ $exam_part->exam_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-6 col-md-6">
            <a href="" class="btn bg-gradient border-0 text-white">Submit</a> &nbsp;&nbsp;&nbsp;&nbsp;
            <!-- <a href="" class="btn bg-gradient border-0 text-white"><i class="fa-solid fa-print"></i> Print</a> -->
            </div>
        </div>
    </form>

   
    <div class="table-responsive attendenceTable">
        <p><i class="fa-solid fa-calendar-days"></i> Exam Routine </p>
        <form action="{{ route('exam.routine.lower.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <table class="table table-bordered table-striped">
                <thead>
                <tr class="th_color">
                    <th scope="col">Subject</th>
                    <th scope="col">Date</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                </tr>
                </thead>

                <tbody>
                    <tr>

                        @foreach ($subjectsList as $subject)
                            <th scope="row" name="subject">{{ $subject['subject_name'] }}</th>
                        @endforeach
                            <td><input type="date" name="date" id=""></td>
                            <td><input type="time" name="start_time" id=""></td>
                            <td><input type="time" name="end_time" id=""></td>
                        
                    </tr>
                </tbody>

            </table>

            <p class="text-center">
                <a href="" class="btn bg-gradient border-0 text-white">Submit</a>
            </p>
        </form>
    </div>

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