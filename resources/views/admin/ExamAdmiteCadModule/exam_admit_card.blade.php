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
                    <h2 class="text-white mb-0">Exam Admit Card</h2>
                </header>
                
<div class="academic_info">
<h5>
    
</h5>

<div class="container">

 
    <form action="{{route("exam.admit.card.search")}}" method="post">
        @csrf
    <div class="row mt-3 mb-4">
        <div class="col-6 col-md-6">
            <label for="">Class <span class="text-danger">*</span></label>
            <select name="student_class" id="" required>
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

        <div class="col-6 col-md-6">
            <label for="">Shift<span class="text-danger">*</span></label>
            <select name="shift_name" id="class_shift" required>
                <option value="">Select Shift</option>
                @foreach ($shiftsList as $shift)
                    <option value="{{ $shift['shift_name'] }}">
                        {{ $shift['shift_name'] }}</option>
                @endforeach
            </select>
        </div>

    </div>

    <div class="row mt-3 mb-4">
        <div class="col-6 col-md-6">
            <label for="">Section <span class="text-danger">*</span></label>
            <select name="section" id="section" required>
                <option value="">Select Section</option>
                @foreach ($sectionsList as $section)
                    <option value="{{ $section['section_name'] }}">
                        {{ $section['section_name'] }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-6 col-md-6">
            <label for="">Term <span class="text-danger">*</span></label>
            <select name="exam_terem" id="">
                <option value="">Select Exam Term</option>
                <option value="Half Yearly Exam">Half Yearly Exam</option>
                <option value="Annual Exam">Annual Exam</option>
                <option value="Monthly Exam">Monthly Exam</option>
            </select>
        </div>

    </div>

    <div class="row mt-3 mb-4">

        <div class="col-6 col-md-6">
            <label for="">Part <span class="text-danger">*</span></label>
            <select name="exam_part" id="">
                <option value="">Select Exam Part</option>
                <option value="Class Test">Class Test</option>
                <option value="Tutorial">Tutorial</option>
                <option value="Written">Written</option>
                <option value="MCQ">MCQ</option>
                <option value="CT">CT</option>
            </select>
        </div>

        <div class="col-6 col-md-6">
            <label for="">Student <span class="text-danger">*</span></label>
            
                
                <select name="student_name" id="" required>
                    <option value="">Select Student</option>
                    @foreach ($studentsLests as $studentsLest)
                        <option value="{{$studentsLest['NameEnglish']}}">{{$studentsLest['NameEnglish']}}</option>
                    @endforeach
                </select>
            
        </div>

    </div>

    <div class="row mt-3 mb-4">
      
        <div class="col-6 col-md-6">
           <button type="submit" class="btn bg-gradient border-0 text-white">Submit</button>
        </div>

    </div>
</form>
    


</div>

</div>    
</section>

</div>
</div>



</main>

<!-- Global Vendor -->


@include('layouts.inc.footer')
<script>
    $().button('toggle')
</script>

</body>
</html>