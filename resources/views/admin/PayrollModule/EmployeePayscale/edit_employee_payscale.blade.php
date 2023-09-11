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
                <h3 class="text-white mb-0">
                    <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0)" onclick="institue()">General Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="javascript:void(0)" onclick="general()">Chart Information</a>
                        </li>
                    </ul>
                </h3>
            </header>
    
            <div class="card-body" id="institue">
                <form action="{{ route('insert_general_info') }}" class="es-form es-add-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
    
                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="subject">Pay Scale Title <span>*</span></label>
                            <input type="text" placeholder="" value="{{ $general_infos->pay_scale_title }}" name="pay_scale_title" id="pay_scale_title" required>
                        </div>
    
                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="day">Employee Type<span>*</span></label>
                            <select id="day" name="employee_type" value="{{ $general_infos->employee_type }}" class="es-add-select" style="display: none;" required>
                                <option value="">Select Employee Type</option>
                                <option value="Casual">Casual</option>
                                <option value="Contractual">Contractual</option>
                                <option value="Half-time">Half-time</option>
                                <option value="Full-time">Full-time</option>
                                <option value="Part-time">Part-time</option>
                            </select>
                        </div>
    
                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="day">Basic Salary <span>*</span></label>
                            <input type="number" name="basic_salary" id="basic_salary" required>
                        </div>
    
                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="day">Status  <span>*</span></label>
                            <select name="status" value="{{ $general_infos->status }}" id="" required>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                        </div>
    
                    </div>
                    
                    <div class="col-md-8 mt-4 mb-3">
                        <p>
                            <button type="submit"
                                class="btn bg-gradient border-0 text-white">Save</button>
                            <button type="clear"
                                class="btn cancel_btn border-0 text-white">Cancel</button>
                        </p>
                    </div>
    
                </form> 
            </div>
    
            <div class="card-body" id="general">
                <form action="{{ route('insert_chat_info') }}" class="es-form es-add-form" method="POST" enctype="multipart/form-data">
    
                    <div class="row">
                          
                          <table class="table">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">Fee Type</th>
                                <th scope="col">Head Type</th>
                                <th scope="col">Amount</th>
                              </tr>
                            </thead>
                            <tbody>
    
                              <tr>
                                <th scope="row"><input type="hidden" placeholder="0.00" name="fee_type">14.00 House Rent</th>
                                <td style="color: green;"><input type="hidden" placeholder="0.00" name="head_type">Addition</td>
                                <td><input type="text" placeholder="0.00" name="amount"></td>
                              </tr>
                              
                              
                            
                            </tbody>
                          </table>
                    </div>
                    
                    <div class="col-md-8 mt-4 mb-3">
                        <p>
                            <button type="submit"
                                class="btn bg-gradient border-0 text-white">Save</button>
                            <button type="clear"
                                class="btn cancel_btn border-0 text-white">Cancel</button>
                        </p>
                    </div>
    
                </form> 
            </div>
    
        </div>    
    </section>
    
        </div>
    </div>
    </main>
    
    
    <script>
        function institue()
        {
          var institue = document.getElementById("institue");
          var general = document.getElementById("general");
    
          institue.style.display = "block";
          general.style.display = "none";
        }
        function general()
        {
          var institue = document.getElementById("institue");
          var general = document.getElementById("general");
    
          general.style.display = "block";
          institue.style.display = "none";
        }
    </script>
    

@include('layouts.inc.footer')
    </body>
    </html>
