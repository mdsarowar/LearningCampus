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
                            Message Corner
                        </h2>
                    </header>
                    @include('layouts.inc.toaster')

                    <div class="card-body table-responsive" id="institue">
{{--                        <form action="" class="es-form es-add-form">--}}
                            <a href="{{route('add_message')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>

                            <p class="text-right">Showing 1-1 of 1 item</p>
                            <!---- slide show table  ----->
                            <table class="table table-bordered mt-3 text-center">
                                <thead class="table-bordered">
                                <tr>
                                    <th scope="col">Srl</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Rank</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
{{--                                <tr>--}}
{{--                                    <th scope="row"></th>--}}
{{--                                    <td><input type="text" name="" id=""></td>--}}
{{--                                    <td><input type="text" name="" id=""></td>--}}
{{--                                    <td></td>--}}
{{--                                    <td><input type="text" name="" id="" style="width: 60px;"></td>--}}
{{--                                    <td>--}}
{{--                                        <select name="" id="">--}}
{{--                                            <option value="">All &nbsp;&nbsp;&nbsp;</option>--}}
{{--                                            <option value="">Active</option>--}}
{{--                                            <option value="">Inactive</option>--}}
{{--                                        </select>--}}
{{--                                    </td>--}}
{{--                                    <td></td>--}}
{{--                                </tr>--}}

                                @foreach($messages as $message)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$message->name}}</td>
                                        <td>{{$message->designation}}</td>
                                        <td><img src="{{asset($message->photo)}}" class="slide_pic" alt=""></td>
                                        <td>{{$message->rank}}</td>
                                        <td>{{$message->status}}</td>
                                        <td>
                                            <a href="{{route('view_message',$message->id)}}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                            <a href="{{route('edit_message',$message->id)}}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                            <a href="{{route('delete_message',$message->id)}}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                            <!---- /slide show table ----->


{{--                        </form>--}}
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
