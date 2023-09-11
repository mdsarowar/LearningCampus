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
                            <h2 class="text-white mb-0">Academic Calender</h2>
                        </header>
                        <div class="branch_edit">

                            <div class="row">
                                @if (Auth::user()->role != 'user')
                                    <div class="col-md-4">
                                        <div class="holiday_list">
                                            <h4><i class="fa-solid fa-plus"></i> Add Event </h4>


                                            <div class="container" style="margin-top:50px;">
                                                <form action="{{ route('academic.calender.store') }}" method="POST"
                                                    class="es-form es-add-form">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="offset-lg-2 col-md-12 mb-4">
                                                            <label for="" style="width:100%">Event Name
                                                                <span>*</span></label>
                                                            <input type="text" name="event_name">
                                                        </div>

                                                        <div class="offset-lg-2 col-md-12 mb-4">
                                                            <label for="" style="width:100%">Starting Date
                                                                <span>*</span></label>
                                                            <input type="date" name="starting_date">
                                                        </div>

                                                        <div class="offset-lg-2 col-md-12 mb-4">
                                                            <label for="" style="width:100%">End Date
                                                                <span>*</span></label>
                                                            <input type="date" name="end_date">
                                                        </div>

                                                        <p class="offset-lg-2 col-md-12 mb-4">
                                                            <button type="submit"
                                                                class="btn bg-gradient border-0 text-white">Create</button>

                                                            <button type="button" onclick="showDeleteModal()"
                                                                class="btn bg-gradient border-0 text-white">Events /
                                                                Event Delete</button>
                                                        </p>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                @endif

                                <div class="col-md-8">
                                    <div class="container-fluid">
                                        <div id='calendar'></div>
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

    @include('layouts.inc.footer')
    <script src="assets/js/main2.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>

    {{-- confirm popup start --}}
    <div class="modal fade" id="confirmModalBox" tabindex="-1" aria-labelledby="ConfirmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ConfirmModalLabel">Events...</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span id="label"></span>
                    <div class="table-responsive">
                        <table class="table table-bordered mt-3 text-center ">
                            <thead class="table-bordered">
                                <tr>
                                    <th scope="col">Srl</th>
                                    <th scope="col">Event</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $sl => $event_details)
                                    <tr>
                                        <td>{{ $sl + 1 }}</td>
                                        <td>{{ $event_details->event_name }}</td>
                                        <td>
                                            <a href="{{ route('academic.calender.delete', $event_details->id) }}"><i
                                                    class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" name="label_id" value="">

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showDeleteModal(label, id) {
            var modal = new bootstrap.Modal(document.getElementById("confirmModalBox"));
            var labelElement = document.getElementById("label");
            var formInput = document.querySelector("#confirmModalBox [name='label_id']");

            labelElement.textContent = label;
            formInput.value = id;
            modal.show();
        }
    </script>
    {{-- confirm popup start --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var booking = @json($events);

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                initialDate: new Date().toISOString().slice(0, 10),
                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours
                editable: true,
                selectable: true,
                selectHelper: true,
                events: booking,

            });

            calendar.render();
        });
    </script>


</body>

</html>
