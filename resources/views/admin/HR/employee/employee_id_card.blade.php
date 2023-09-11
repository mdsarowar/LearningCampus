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
                <form action="{{route('view_id_card')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                            <h2 class="text-white mb-0">Employee ID Card</h2>
                        </header>

                        <div class="academic_info student_search">


                            <div class="container">

                                <div class="row mt-3 mb-4">

                                    <div class="col-12 col-md-6 col-lg-4">
                                        <label for="">Type <span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            <option value="">All</option>
                                            <option value="">Casual</option>
                                            <option value="">Contractual</option>
                                            <option value="">Full-time</option>
                                            <option value="">Half-time</option>
                                            <option value="">Part-time</option>
                                        </select>
                                    </div><br><br>

                                    <div class="col-12 col-md-6 col-lg-4">
                                        <label for=""> Shift <span class="text-danger">*</span></label>
                                        <select name="" id="">
                                            <option value="">Casual</option>
                                            <option value="">Contractual</option>
                                            <option value="">Full-time</option>
                                            <option value="">Half-time</option>
                                            <option value="">Part-time</option>
                                        </select>
                                    </div><br><br>

                                    <div class="col-12 col-md-6 col-lg-4">
                                        <label for="">Employee<span class="text-danger">*</span></label>
                                        <select name="employee_id" id="emp">
                                            <option value="">Select Employee</option>
                                            @foreach($employees as $employee)
                                                <option value="{{$employee->id}}"> {{$employee->name}}</option>
                                                {{--                                            <option value="{{$employee->id}}" {{$errors->any()&& old('library_book_category_id')==$book->id ? 'selected': (isset($libraryBook) && $libraryBook->library_book_category_id==$book->id? 'selected':'')}}> {{$book->name}}</option>--}}
                                            @endforeach
                                        </select>
                                    </div><br><br>

                                </div>


                            </div>

                        </div>


                        <p class="text-center">
                            <button type="submit" class="btn btn-primary px-5">Search</button>
                        </p>


                    </div>
                </form>

            </section>

        </div>
    </div>
</main>

<!-- Global Vendor -->


<script>
    function fillRoutineDay(day) {
        var routineDayInput = document.getElementById("routine_day");
        var selectedClass = document.querySelector('.class');
        var selectedClassShift = document.querySelector('.class_shift');
        var selectedSection = document.querySelector('.section');

        // Assuming you want to set the values of the hidden inputs
        document.getElementById("class").value = selectedClass.value;
        document.getElementById("class_shift").value = selectedClassShift.value;
        document.getElementById("section").value = selectedSection.value;

        routineDayInput.value = day;
    }
</script>

@include('layouts.inc.footer');
</body>
