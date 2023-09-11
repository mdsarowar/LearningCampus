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
                            Message View
                        </h2>
                    </header>

                    <div class="card-body table-responsive" id="institue">
                        <form action="" class="es-form es-add-form">
                            <div class="session_view_link mt-2 mb-5">
                                <a href="{{route('add_message')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                                <a href="{{route('edit_message',$message->id)}}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                            </div>
                            <!---- Session View table  ----->
                            <table class="table table-bordered table-striped mt-3 branch_view_table">
                                <tbody >
                                <tr>
                                    <th>Name</th>
                                    <td>{{$message->name}}</td>
                                </tr>
                                <tr>
                                    <th>Designation	</th>
                                    <td>{{$message->designation}}</td>
                                </tr>
                                <tr>
                                    <th>Photo	</th>
                                    <td><img src="{{asset($message->photo)}}" class="slide_pic" alt=""></td>
                                </tr>
                                <tr>
                                    <th>Message	</th>
                                    <td>{{$message->message}}</td>
                                </tr>
                                <tr>
                                    <th>Rank</th>
                                    <td>{{$message->rank}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$message->status==0?'Inactive':'Active'}}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>2021-12-19 07:39:06</td>
                                </tr>
                                <tr>
                                    <th>Created By</th>
                                    <td>Learning Campus</td>
                                </tr>
                                <tr>
                                    <th>Modified At</th>
                                    <td>2022-02-03 04:58:07</td>
                                </tr>
                                <tr>
                                    <th>Modified By</th>
                                    <td>Learning Campus</td>
                                </tr>

                                </tbody>
                            </table>

                            <!---- /session View table ----->
                        </form>
                    </div>

                </div>
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
