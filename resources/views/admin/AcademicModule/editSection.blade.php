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
                            <h2 class="text-white mb-0">Update Section</h2>
                        </header>

                        {{-- form submission message start --}}
                        @if (session('error'))
                            <div class="alert alert-danger col-8 m-auto text-center">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success col-8 m-auto text-center">
                                {{ session('success') }}
                            </div>
                        @endif
                        {{-- form submission message end --}}

                        <div class="session_view_link mt-5 ml-4 mb-2">
                            <a href="{{ route('add_section') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-plus"></i></a>
                            <a href="{{ route('view_section') }}?section_id={{ $sectionInfo[0]['section_id'] }}"
                                class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                        </div>

                        <form action="{{ route('edit_section_submit') }}" method="POST">
                            @csrf
                            <input type="hidden" name="section_id" value="{{ $sectionInfo[0]['section_id'] }}">
                            <input type="hidden" name="current_class_name" value="{{ $sectionInfo[0]['class_name'] }}">
                            <input type="hidden" name="current_class_type" value="{{ $sectionInfo[0]['class_type'] }}">
                            <input type="hidden" name="current_shift_name" value="{{ $sectionInfo[0]['shift_name'] }}">
                            <input type="hidden" name="current_section_name" value="{{ $sectionInfo[0]['section_name'] }}">
                            <input type="hidden" name="current_status" value="{{ $sectionInfo[0]['status'] }}">

                            <div class="branch_edit">
                                <div class="row">

                                    <div class="col-md-10 mb-3">
                                        <label for="">Class Name <span>*</span></label>
                                        <select name="class_name" id="">
                                            <option value="">Select Class</option>
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

                                    <div class="col-md-10 mb-3">
                                        <label for="">Shift Name <span>*</span></label>
                                        <select name="shift_name" id="">
                                            <option value="">Select Shift</option>
                                            @foreach ($shiftsList as $shift)
                                                <option value="{{ $shift['shift_name'] }}">
                                                    {{ $shift['shift_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Name <span>*</span></label>
                                        <input type="text" placeholder="eg: A" name="section_name" value="{{ $sectionInfo[0]['section_name'] }}" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Status <span>*</span></label>
                                        <select name="status" id="">
                                            <option value="">Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mt-4 mb-3">
                                        <p>
                                            <button type="submit" class="btn bg-gradient border-0 text-white">Update</button>
                                            <button type="clear" class="btn  cancel_btn border-0 text-white">Cancel</button>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </section>

            </div>
        </div>
    </main>

    <!-- Global Vendor -->

    @include('layouts.inc.footer')
</body>

</html>
