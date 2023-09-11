<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    @include('layouts.inc.head')
</head>
<!-- End Head -->
<body>
    <style type="text/css">
        @media print {
            #routineData {
                -webkit-print-color-adjust: exact !important;
                color-adjust: exact !important;
                margin: 0 !important;
            }

            .card {
                position: absolute !important;
                transform: translate(-5%, 0) !important;
                width: 100% !important;
                margin: 0 auto !important;
                box-shadow: 0 !important;
                border: 0 !important;
            }

            .search_result {
                border: 0 !important;
            }

            .no-print {
                display: none !important;
            }
      }
</style>
<!----- preloader ----->
@include('layouts.inc.preloader')
<!----- /preloader ----->



<!-- Header (Topbar) -->
    <header class="u-header no-print">
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
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center no-print">
                    <h2 class="text-white mb-0">Exam Admit Card</h2>
                </header>
                
<div class="academic_info">
<h5>
    
</h5>

<div class="container">

 
    <form action="{{route("exam.admit.card.search")}}" method="post" class="no-print">
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
    
   
<div class="d-flex justify-content-between mt-5 mb-3">
    <button class="print_btn no-print" onclick="printRoutine()"><i class="fa-solid fa-print"></i>
        Print</button>
</div>

    <div class="seatCard">
        <div class="seatCardBox">
            <div class="seatCardTop">
                <div>
                    <img src="Logo _ Icon/logo.png" alt="">
                </div>
                <div>
                    <div class="text-center">
                       <h2>Learning Campus School</h2>
                       <a href="#">www.learningcampus.com</a>
                       <p>Uttara, Dhaka</p>
                       @foreach ($students as $student)
                       <h5>{{$student->exam_terem}}</h5>
                       <h3><span>Admit Card</span> </h3>
                    </div>
                </div>
                <div>
                    <img src="assets/img/student.png" alt="">
                </div>
            </div>
            <div class="seatCardMid">
                <div class="row">
                   
                        
                    <div class="col-md-6">
                        <div class="seatCardMidBox">
                            <label for="">Name </label>
                            <p> :  {{$student->student_name}}</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                       <div class="seatCardMidBox">
                           <label for="">Class-Medium</label>
                           <p> :  {{$student->student_class}}</p>
                       </div>
                   </div>

                   <div class="col-md-6">
                       <div class="seatCardMidBox">
                           <label for="">Id No </label>
                           <p> :  {{$student->student_id}}</p>
                       </div>
                   </div>

                   <div class="col-md-6">
                       <div class="seatCardMidBox">
                           <label for="">Roll </label>
                           <p> :  {{$student->student_roll}}</p>
                       </div>
                   </div>

                   <div class="col-md-6">
                       <div class="seatCardMidBox">
                           <label for="">Shift </label>
                           <p> :  {{$student->shift_name}}</p>
                       </div>
                   </div>

                   <div class="col-md-6">
                       <div class="seatCardMidBox">
                           <label for="">Section </label>
                           <p> :  {{$student->section}}</p>
                       </div>
                   </div>
                    
                   @endforeach
                </div>
            </div>
            <div class="seatCardBot">
                <h6><span>Signature Of Account Officer</span></h6>
                <h6><span>Signature Of Principal</span></h6>
            </div>
        </div>
   </div>

</div>

</div>

</div>    
</section>

</div>
</div>



</main>

<!-- Global Vendor -->
<script>
    function printRoutine() {
        window.print();
}
</script>

@include('layouts.inc.footer')
<script>
    $().button('toggle')
</script>

</body>
</html>