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
                                Archive Student
                            </h2>
                        </header>

                        <div class="card-body table-responsive" id="institue">
                            <form action="" class="es-form es-add-form">

                                <a href="{{ route('archive.students.add') }}" class="btn btn-primary"><i
                                        class="fa-solid fa-plus"></i></a>
                                <div class="studetn_count">
                                    @php
                                        $totalMale = 0;
                                        $totalFemale = 0;
                                    @endphp

                                    @foreach ($archive_studentsList as $student)
                                        @if ($student['Gender'] === 'Male')
                                            @php $totalMale++; @endphp
                                        @elseif ($student['Gender'] === 'Female')
                                            @php $totalFemale++; @endphp
                                        @endif
                                    @endforeach

                                    <h3>
                                        <p><i class="fa-solid fa-person"></i> Total Male : {{ $totalMale }}</p>
                                        <p><i class="fa-solid fa-person-dress"></i> Total Female : {{ $totalFemale }}
                                        </p>
                                    </h3>
                                </div>
                                <!---- student table  ----->
                                <table class="table table-bordered mt-3 text-center current_student_table">
                                    <thead class="table-bordered">
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Session</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Shift</th>
                                            <th scope="col">Section</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Student ID</th>
                                            <th scope="col">Roll No.</th>
                                            <th scope="col">Device Serial / MAC</th>
                                            <th scope="col">Finger ID</th>
                                            <th scope="col">RFID Card No</th>
                                            <th scope="col">Guardian's Phone</th>
                                            <th scope="col">Date of Birth</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <select name="" id="">
                                                    <option value="all">All &nbsp;&nbsp;&nbsp;</option>
                                                    @foreach ($sessionsList as $session)
                                                        <option value="{{ $session['session_name'] }}">
                                                            {{ $session['session_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <select name="class" id="">
                                                    <option value="">Select Class &nbsp;&nbsp;&nbsp;</option>
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
                                            </td>
                                            <td>
                                                <select name="shift" id="">
                                                    <option value="all">All &nbsp;&nbsp;&nbsp;</option>
                                                    @foreach ($shiftsList as $shift)
                                                        <option value="{{ $shift['shift_name'] }}">
                                                            {{ $shift['shift_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <select name="section" id="">
                                                    <option value="">Select Section &nbsp;&nbsp;&nbsp;</option>
                                                    @foreach ($sectionsList as $section)
                                                        <option value="{{ $section['section_name'] }}">
                                                            {{ $section['section_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td><input type="text" name="" id=""
                                                    placeholder="not for search"></td>
                                            <td><input type="text" name="student_id" id=""></td>
                                            <td><input type="text" name="roll_no" id=""></td>
                                            <td><input type="text" name="" id=""
                                                    placeholder="not for search"></td>
                                            <td><input type="text" name="" id=""
                                                    placeholder="not for search"></td>
                                            <td><input type="text" name="" id=""
                                                    placeholder="not for search"></td>
                                            <td><input type="text" name="" id=""
                                                    placeholder="not for search"></td>
                                            <td><input type="text" name="" id=""
                                                    placeholder="not for search"></td>

                                            <td>
                                                <select name="" id="">
                                                    <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </td>
                                            <td></td>
                                        </tr>
                                        @foreach ($archive_studentsList as $student)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $student['Session'] }}</td>
                                                <td> {{ $student['Class'] }}</td>
                                                <td>{{ $student['Shift'] }}</td>
                                                <td>{{ $student['Section'] }}</td>
                                                <td>
                                                    <img src="{{ asset($student['Photo']) }}" class="curentStuImage"
                                                        alt="Student Image">
                                                    <br><a href="#">{{ $student['NameEnglish'] }}</a>
                                                </td>
                                                <td>{{ $student['StudentId'] }}</td>
                                                <td>13</td>
                                                <td>{{ $student['DeviceSerialMAC'] }}</td>
                                                <td>(not set)</td>
                                                <td>{{ $student['RFIDCardNo'] }}</td>
                                                <td>{{ $student['GuardianPhone'] }}</td>
                                                <td>{{ $student['DateOfBirth'] }}</td>
                                                <td>
                                                    @if ($student['Status'] == 1)
                                                        <p style="color: rgb(0, 214, 114)">{{ 'Active' }}
                                                        </p>
                                                    @else
                                                        <p style="color: red">{{ 'Inactive' }}</p>
                                                    @endif
                                                </td>
                                                <td class="link_table">
                                                    {{-- <a href="#"><i class="fa-solid fa-print"></i></a>&nbsp --}}
                                                    <a
                                                        href="{{ route('archive.student.view', ['id' => $student['id']]) }}"><i
                                                            class="fa-solid fa-eye"></i></a>&nbsp
                                                    <a
                                                        href="{{ route('archive.student.edit', ['id' => $student['id']]) }}"><i
                                                            class="fa-solid fa-pencil"></i></a>&nbsp
                                                    <a onclick="showDeleteModal('Student', {{ $student['id'] }})"
                                                        style="background-color: transparent; color:#6b15b6"><i
                                                            class="fa-solid fa-trash"></i></a>&nbsp
                                                    &nbsp&nbsp
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!---- /student table ----->
                            </form>
                        </div>

                        <div class="mt-5 ml-4">
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">2 <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </main>



    <!-- Global Vendor -->

    @include('layouts.inc.footer')

    {{-- confirm popup start --}}
    <div class="modal fade" id="confirmModalBox" tabindex="-1" aria-labelledby="ConfirmModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ConfirmModalLabel">Confirm Deletion...</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this <span id="label"></span>? This action
                    cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ route('archive.student.delete') }}" method="POST">
                        @csrf
                        <input type="hidden" name="label_id" value="">
                        <button type="submit" class="btn btn-danger">Delete</button>
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

    <script src="assets/js/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });

        ClassicEditor
            .create(document.querySelector('#contents'), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>
</body>

</html>
