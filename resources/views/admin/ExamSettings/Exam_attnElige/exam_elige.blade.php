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
                    <h2 class="text-white mb-0">Exam Eligibilities</h2>
                </header>
<div class="academic_info">
<h5>
    
</h5>

<div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div class="row mt-3 mb-4">

            <div class="col-6 col-md-6">
            <label for="">Class <span>*</span></label>
                <select name="seat_plan_id" id="">
                    <option data-display="Select">Select Class</option>
                    <optgroup label="Bangla Medium" class="bold_text">
                        @foreach ($seat as $class)
                            @if ($class['class_type'] === 'Bangla')
                                <option value="{{ $class['class_type'] . '_' . $class['class_name'] }}">{{ $class['class_name'] }}</option>
                            @endif
                        @endforeach
                    </optgroup>
                    <optgroup label="English Medium" class="bold_text">
                        @foreach ($seat as $class)
                            @if ($class['class_type'] === 'English')
                                <option value="{{ $class['class_type'] . '_' . $class['class_name'] }}">{{ $class['class_name'] }}</option>
                            @endif
                        @endforeach
                    </optgroup>
                </select> 
            </div>


            <div class="col-6 col-md-6">
                <label for="">Shift<span class="text-danger">*</span></label>
                <select name="shift" id="">
                    <option value="">Select Shift</option>
                    <option value="">Morning</option>
                    <option value="">Day</option>
                </select>
            </div>

        </div>



        <div class="row mt-3 mb-4">

            <div class="col-6 col-md-6">
                <label for="">Section <span class="text-danger">*</span></label>
                <select name="section" id="">
                    <option value="">Select Section</option>
                    <option value="">A</option>
                    <option value="">B</option>
                </select>
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
                <label for="">Student ID <span>*</span></label>
                    <select name="seat_plan_id" id="">
                        @foreach($seat as $std_id)
                            <option value="{{ $std_id->id }}">{{ $std_id->student_id }}</option>
                        @endforeach
                    </select>
            </div>

        <br>
            <div class="col-6 col-md-6">
            <button type="submit" class="btn bg-gradient border-0 text-white">Search</button>
            </div>  
        </div>
    </form>

    <div class="table-responsive attendenceTable">
    <p><i class="fa-solid fa-users"></i>  Students List for Exam Eligibility</p>
    <table class="table table-bordered table-striped">
        <thead>
          <tr class="th_color">
            <th scope="col">Roll</th>
            <th scope="col">Name</th>
            <th scope="col">Group</th>
            <th scope="col">Religion</th>
            <th scope="col">

                <input type="checkbox" name="" id="check">
            </th>
            <th scope="col">

               <input type="checkbox" name="" id="check">
            </th>
            <th scope="col">

               <input type="checkbox" name="" id="check">
            </th>
            <th scope="col">

               <input type="checkbox" name="" id="check">
            </th>
            <th scope="col">

               <input type="checkbox" name="" id="check">
            </th>
            <th scope="col">

               <input type="checkbox" name="" id="check">
            </th>
            <th scope="col">

               <input type="checkbox" name="" id="check">
            </th>
            <th scope="col">

               <input type="checkbox" name="" id="check">
            </th>
            <th scope="col">

               <input type="checkbox" name="" id="check">
            </th>
            <th scope="col">

               <input type="checkbox" name="" id="check">
            </th>
          </tr>
        </thead>
        <!-- <tbody>

          <tr>
            <th scope="row">1</th>
            <td>Rohi Das</td>

            <td class="text-center">
                Bangla 1st Paper <hr class="attendenceHr">
                
            </td>
            <td class="text-center">
                Bangla 2nd Paper <hr class="attendenceHr">
                
            </td>
            <td class="text-center">
                English 1st Paper <hr class="attendenceHr">
                
            </td>
            <td class="text-center">
                English 2nd Paper  <hr class="attendenceHr">
                
            </td>
            <td class="text-center">
                Mathematics  <hr class="attendenceHr">
                
            </td>
            <td class="text-center">
                Islam and Moral Education  <hr class="attendenceHr">
                
            </td>
            <td class="text-center">
                Science  <hr class="attendenceHr">
                
            </td>
            <td class="text-center">
                Agricultural Studies <hr class="attendenceHr">
               
            </td>
            <td class="text-center">
                Bangladesh And Global Studies  <hr class="attendenceHr">
                
            </td>
            <td class="text-center">
                Information & Communication Technology <hr class="attendenceHr">
                
            </td>

          </tr>

         
        </tbody> -->
      </table>

      <p class="text-center">
        <a href="" class="btn bg-gradient border-0 text-white">Submit</a>
      </p>
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
