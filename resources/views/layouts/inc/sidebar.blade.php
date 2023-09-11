@php
    $userRole = Auth::guard('web')->user();
    $userMgmt_nav = Route::is('all.users') || Route::is('create.role') || Route::is('add.users') || Route::is('manage.user.role') ? 'u-sidebar-nav--opened' : '';
@endphp
<div class="u-sidebar-inner bg-gradient bdrs-30">
    <header class="u-sidebar-header">
        <a class="u-sidebar-logo" href="{{ route('home') }}">
            <img class="img-fluid" src="Logo _ Icon/preload.png" width="124px" alt="Stream Dashboard">
        </a>
    </header>

    <nav class="u-sidebar-nav">
        <ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
            <!-- Dashboard -->
            @if ($userRole->can('dashboard'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link {{ Route::is('home') ? 'active' : '' }}"
                        href="{{ route('home') }}">
                        <i class="fas fa-tachometer-alt u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Dashboard</span>
                    </a>
                </li>
            @endif
            <!-- End Dashboard -->

            <!-- Global Settings -->
            @if (
                $userRole->can('institute') ||
                    $userRole->can('branch') ||
                    $userRole->can('sms_setting') ||
                    $userRole->can('academic_holiday'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#attendances">
                        <i class="fa-solid fa-earth-africa u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Global Settings</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="attendances" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('institute')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('institute_add') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Institute</span>
                                </a>
                            </li>
                        @endcan
                        @can('branch')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('branch') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Branch</span>
                                </a>
                            </li>
                        @endcan
                        @can('sms_setting')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('sms_settings') }}">
                                    <span class="u-sidebar-nav-menu__item-title">SMS Settings</span>
                                </a>
                            </li>
                        @endcan
                        
                    </ul>
                </li>
            @endif
            <!-- End Global Settings -->

            <!-- Academic Module -->
            @if (
                $userRole->can('all_session') ||
                    $userRole->can('all_medium') ||
                    $userRole->can('all_shift') ||
                    $userRole->can('all_class') ||
                    $userRole->can('all_section') ||
                    $userRole->can('all_group') ||
                    $userRole->can('all_subject') ||
                    $userRole->can('academic_calender'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#subMenu1">
                        <i class="fa-solid fa-school u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Academic Module</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="subMenu1" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('all_session')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('all_session') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All Session</span>
                                </a>
                            </li>
                        @endcan
                        @can('all_medium')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('all_medium') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All Medium</span>
                                </a>
                            </li>
                        @endcan
                        @can('all_shift')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('all_shift_list') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All Shift List</span>
                                </a>
                            </li>
                        @endcan
                        @can('all_class')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('all_class_list') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All Class List</span>
                                </a>
                            </li>
                        @endcan
                        @can('all_section')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('all_section_list') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All Section List</span>
                                </a>
                            </li>
                        @endcan
                        @can('all_group')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('all_group_list') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All Group List</span>
                                </a>
                            </li>
                        @endcan
                        @can('all_subject')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('all_subject_list') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All Subject List</span>
                                </a>
                            </li>
                        @endcan
                        @can('academic_calender')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('academic.calender') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Academic Calendar</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!-- End Academic Module -->

            <!-- Student Module -->
            @if (
                $userRole->can('student_admission') ||
                    $userRole->can('print_admission_form') ||
                    $userRole->can('current_student_list') ||
                    $userRole->can('archive_student_list') ||
                    $userRole->can('current_student_search') ||
                    $userRole->can('archive_student_search') ||
                    $userRole->can('student_switch_process') ||
                    $userRole->can('student_migration_process') ||
                    $userRole->can('print_student_id_card') ||
                    $userRole->can('student_biometric_export') ||
                    $userRole->can('print_student_testimonial'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#studentModule">
                        <i class="fa-solid fa-child u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Student Module</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="studentModule" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('student_admission')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('student.admission') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Student Admission</span>
                                </a>
                            </li>
                        @endcan

                        @can('print_admission_form')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('print-admission.form') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Print Admission Form</span>
                                </a>
                            </li>
                        @endcan

                        @can('current_student_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('current.student') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Current Student List</span>
                                </a>
                            </li>
                        @endcan

                        @can('archive_student_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('archive.student') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Archive Student List</span>
                                </a>
                            </li>
                        @endcan

                        {{-- @can('current_student_search')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('current.student') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Current Student Search</span>
                                </a>
                            </li>
                        @endcan

                        @can('archive_student_search')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('archivesearch.student') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Archive Student Search</span>
                                </a>
                            </li>
                        @endcan --}}

                        {{-- @can('student_switch_process')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('switch.student') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Student Switch Process</span>
                                </a>
                            </li>
                        @endcan --}}

                        @can('student_migration_process')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('migration.student') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Student Migration Process</span>
                                </a>
                            </li>
                        @endcan

                        @can('print_student_id_card')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('printid.student') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Print Student ID Card</span>
                                </a>
                            </li>
                        @endcan

                        @can('student_biometric_export')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('biometricexport.student') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Student Biometric Export</span>
                                </a>
                            </li>
                        @endcan

                        @can('print_student_testimonial')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('testimonial') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Print Student Testimonial</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!-- End Student Module -->

            <!-- Routine Module -->
            @if ($userRole->can('general_routine') || $userRole->can('dynamic_routine') || $userRole->can('view_routine'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#questions">
                        <i class="fa-solid fa-table u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Routine Module</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="questions" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('general_routine')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('general.routine') }}">
                                    <span class="u-sidebar-nav-menu__item-title">General Routine</span>
                                </a>
                            </li>
                        @endcan

                        @can('dynamic_routine')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('dynamic.routine') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Dynamic Routine</span>
                                </a>
                            </li>
                        @endcan

                        @can('view_routine')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('print.routine') }}">
                                    <span class="u-sidebar-nav-menu__item-title">View/Print Routine</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!-- Routine Module -->

            <!-- Student Attendence -->
            @if (
                $userRole->can('todays_attendence_student') ||
                    $userRole->can('manual_attendence_student') ||
                    $userRole->can('absent_student_list_student') ||
                    $userRole->can('daily_attendence_summery_student') ||
                    $userRole->can('monthly_attendence_summery_student'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#student-attendance">
                        <i class="fa-solid fa-child u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Student Attendance</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="student-attendance" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('todays_attendence_student')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('todays.attendence') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Today's Attendance</span>
                                </a>
                            </li>
                        @endcan

                        @can('manual_attendence_student')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manual.attendence') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Manual Attendance</span>
                                </a>
                            </li>
                        @endcan

                        @can('absent_student_list_student')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('student.absent') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Absent Student List</span>
                                </a>
                            </li>
                        @endcan

                        @can('daily_attendence_summery_student')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('daily.attendence') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Daily Attendance Summary</span>
                                </a>
                            </li>
                        @endcan

                        @can('monthly_attendence_summery_student')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('montly.attendence') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Monthly Attendance Summary</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!-- End  Student Attendence Module -->

            <!-- Employee Attendence -->
            @if (
                $userRole->can('todays_attendence_employee') ||
                    $userRole->can('manual_attendence_employee') ||
                    $userRole->can('attendence_details_employee') ||
                    $userRole->can('daily_attendence_summery_employee') ||
                    $userRole->can('monthly_attendence_summery_employee'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#employee-attendance">
                        <i class="fa-solid fa-person u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Employee Attendance</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="employee-attendance" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('todays_attendence_employee')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('employe.today.attendence') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Today's Attendance</span>
                                </a>
                            </li>
                        @endcan

                        @can('manual_attendence_employee')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('employe.manual.attendence') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Manual Attendance</span>
                                </a>
                            </li>
                        @endcan

                        @can('attendence_details_employee')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('employe.attendence.details') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Attendance Details</span>
                                </a>
                            </li>
                        @endcan

                        @can('daily_attendence_summery_employee')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link"
                                    href="{{ route('employee.daily.attendence.summary') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Daily Attendance Summary</span>
                                </a>
                            </li>
                        @endcan

                        @can('monthly_attendence_summery_employee')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link"
                                    href="{{ route('employee.monthly.attendence.summary') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Monthly Attendance Summary</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!-- End  Employee Module -->

            <!-- Hr Module -->
            @if (
                $userRole->can('employee_type') ||
                    $userRole->can('all_designation') ||
                    $userRole->can('working_shift') ||
                    $userRole->can('add_employee') ||
                    $userRole->can('all_employee_list') ||
                    $userRole->can('employee_search') ||
                    $userRole->can('employee_id_card') ||
                    $userRole->can('employee_export'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#hr-module">
                        <i class="far fa-clipboard u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">HR Module</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="hr-module" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('employee_type')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_employee_type') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Employee Type</span>
                                </a>
                            </li>
                        @endcan

                        @can('employee_category')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_employee_category') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Employee Category</span>
                                </a>
                            </li>
                        @endcan

                        @can('all_designation')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_designation') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All Designation</span>
                                </a>
                            </li>
                        @endcan

                        @can('working_shift')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_workingshift') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Working Shift</span>
                                </a>
                            </li>
                        @endcan

                        @can('add_employee')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('add_employee') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Add Employee</span>
                                </a>
                            </li>
                        @endcan

                        @can('all_employee_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_employee') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All Employee List</span>
                                </a>
                            </li>
                        @endcan

                        @can('employee_search')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('search_employee') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Employee's Search</span>
                                </a>
                            </li>
                        @endcan

                        @can('employee_id_card')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('employee_id_card') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Employee's ID Card</span>
                                </a>
                            </li>
                        @endcan

                        @can('employee_export')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('employee_export') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Employee's Export(Att.)</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!-- Hr Module -->

            <!-- Leave Module  -->
            @if ($userRole->can('leave_types') || $userRole->can('leave_entry') || $userRole->can('manage_leaves'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#leave-module">
                        <i class="fa-solid fa-right-from-bracket u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Leave Module</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="leave-module" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('leave_types')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('leave.type') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Leave Types</span>
                                </a>
                            </li>
                        @endcan

                        @can('leave_entry')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('leave.entry') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Leave Entry</span>
                                </a>
                            </li>
                        @endcan

                        @can('manage_leaves')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage.leave') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Manage Leaves</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!-- End Leave Module -->

            <!-- Pay roll Module -->
            @if (
                $userRole->can('payroll_head') ||
                    $userRole->can('employee_payscale') ||
                    $userRole->can('employee_salary_chart') ||
                    $userRole->can('generate_salary_chart') ||
                    $userRole->can('employee_salary_payment') ||
                    $userRole->can('employee_salary_report') ||
                    $userRole->can('employee_payslip_print'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#payroll">
                        <i class="fa-solid fa-dollar-sign u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Payroll Module</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="payroll" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('payroll_head')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('payroll_head') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Payroll Head</span>
                                </a>
                            </li>
                        @endcan

                        @can('employee_payscale')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('employee_payscale') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Employee Payscale</span>
                                </a>
                            </li>
                        @endcan

                        @can('employee_salary_chart')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('employee_salary_chart') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Employees Salary Chart</span>
                                </a>
                            </li>
                        @endcan

                        @can('generate_salary_chart')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('generate_salary_sheet') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Generate Salary Sheet</span>
                                </a>
                            </li>
                        @endcan

                        @can('employee_salary_payment')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('employee_salary_payment') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Employees Salary Payment</span>
                                </a>
                            </li>
                        @endcan

                        @can('employee_salary_report')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('employee_salary_report') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Employees Salary Report</span>
                                </a>
                            </li>
                        @endcan

                        @can('employee_payslip_print')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('employee_pay_slip_print') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Employees Pay Slip Print</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!--  Pay roll Module -->

            <!-- Exam Settings -->
            @if (
                $userRole->can('grade_points_exam') ||
                    $userRole->can('exam_terms') ||
                    $userRole->can('exam_part') ||
                    $userRole->can('assign_exam') ||
                    $userRole->can('exam_routine') ||
                    $userRole->can('exam_eligibilities') ||
                    $userRole->can('exam_seat_plan') ||
                    $userRole->can('exam_admit_card') ||
                    $userRole->can('exam_attendence_blank') ||
                    $userRole->can('exam_attendence_subject') ||
                    $userRole->can('exam_attendence_exam') ||
                    $userRole->can('manage_working_days'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#exam">
                        <i class="fa-solid fa-copy u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Exam Settings</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="exam" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('grade_points_exam')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('exam.grade') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Grade Points</span>
                                </a>
                            </li>
                        @endcan
                        @can('exam_terms')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('exam.terms') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Exam Terms</span>
                                </a>
                            </li>
                        @endcan
                        @can('exam_part')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('exam.part') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Exam Part</span>
                                </a>
                            </li>
                        @endcan
                        @can('assign_exam')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('assign.exam') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Assign Exam</span>
                                </a>
                            </li>
                        @endcan
                        @can('exam_routine')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('exam.routine') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Exam Routine</span>
                                </a>
                            </li>
                        @endcan

                        @can('exam_eligibilities')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('exam.elige') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Exam Eligibilities</span>
                                </a>
                            </li>
                        @endcan

                        @can('exam_seat_plan')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('add.seat.plan') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Add Exam Seat Plan</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('view.seat.plan') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Exam Seat Plan</span>
                                </a>
                            </li>
                        @endcan
                        @can('exam_admit_card')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('exam.admit.card') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Exam Admit Card</span>
                                </a>
                            </li>
                        @endcan

                        @can('exam_attendence_subject')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('exam.attn') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Exam Attn.(Subject)</span>
                                </a>
                            </li>
                        @endcan

                        @can('manage_working_days')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('working.days') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Working Days</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!--  Exam Settings -->

            <!-- Result Module Start-->
            @if (
                $userRole->can('grade_points_result') ||
                    $userRole->can('marks_blank_sheet') ||
                    $userRole->can('marks_entry_subject') ||
                    $userRole->can('marks_entry_exam'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#result">
                        <i class="fa-solid fa-table u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Result Module</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="result" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('grade_points_result')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('exam.grade') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Grade Points</span>
                                </a>
                            </li>
                        @endcan

                        @can('marks_blank_sheet')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('marks.entry.blank') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Marks Blank Sheet</span>
                                </a>
                            </li>
                        @endcan

                        @can('marks_entry_subject')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('marks.entry.subject') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Marks Entry (Subject)</span>
                                </a>
                            </li>
                        @endcan

                        @can('marks_entry_exam')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('marks.entry.exam') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Marks Entry (Exam)</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!--  Result Module End-->

            <!--  Result Reports Start-->
            @if (
                $userRole->can('students_merit_list') ||
                    $userRole->can('students_report_card') ||
                    $userRole->can('students_wise_transcript'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#reports">
                        <i class="fa-solid fa-flag u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Result Reports</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="reports" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('students_merit_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('student.merit.list') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Students Merit List</span>
                                </a>
                            </li>
                        @endcan

                        @can('students_report_card')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('student.report.card') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Students Report Card</span>
                                </a>
                            </li>
                        @endcan

                        @can('students_wise_transcript')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('student.wise.transcript') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Students Wise Transcript</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!--  Result Reports End-->

            <!--  Finance Module -->
            @if ($userRole->can('account_head') || $userRole->can('add_account_head'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#finance">
                        <i class="fa-solid fa-dollar-sign u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Finance Module</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="finance" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('account_head')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('account.head') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Account Head</span>
                                </a>
                            </li>
                        @endcan

                        @can('add_account_head')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('account.head.add') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Add Account Head</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!--  Finance Module -->

            <!--  Student Accounts -->
            @if (
                $userRole->can('admission_fee') ||
                    $userRole->can('monthly_fee') ||
                    $userRole->can('student_fee') ||
                    $userRole->can('student_waiver') ||
                    $userRole->can('fee_collection') ||
                    $userRole->can('fee_recollection') ||
                    $userRole->can('print_collection_invoice'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#stuAccount">
                        <i class="fa fa-user u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Student Accounts</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="stuAccount" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('admission_fee')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('admission.fee') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Admission Fees</span>
                                </a>
                            </li>
                        @endcan
                        @can('monthly_fee')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('admission.monthly.fee') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Monthly Fees</span>
                                </a>
                            </li>
                        @endcan
                        @can('student_fee')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('student.fee') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Student Fees</span>
                                </a>
                            </li>
                        @endcan
                        @can('student_waiver')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('student.wavier') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Student Waiver</span>
                                </a>
                            </li>
                        @endcan
                        @can('fee_collection')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('add.fees') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Fees Collection</span>
                                </a>
                            </li>
                        @endcan
                        @can('fee_recollection')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('fees.recollection') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Fees ReCollection</span>
                                </a>
                            </li>
                        @endcan
                        @can('print_collection_invoice')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('print.invoice') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Print Collection Invoice</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!--  Student Accounts -->

            <!--  Account Boucher -->
            @if ($userRole->can('receive_voucher') || $userRole->can('payment_voucher'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#boucher">
                        <i class="fa-solid fa-money-check-dollar u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Accounts Boucher</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="boucher" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('receive_voucher')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('recive_boucher') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Recive Boucher(+)</span>
                                </a>
                            </li>
                        @endcan
                        @can('payment_voucher')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('payment_boucher') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Payment Boucher(-)</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!--  Account Boucher -->

            <!--  Finance Reports -->
            @if (
                $userRole->can('daily_collection') ||
                    $userRole->can('fees_collection') ||
                    $userRole->can('student_dues') ||
                    $userRole->can('student_ledger') ||
                    $userRole->can('student_weiver') ||
                    $userRole->can('accounts_ledger') ||
                    $userRole->can('trial_balance') ||
                    $userRole->can('cash_book') ||
                    $userRole->can('bank_book') ||
                    $userRole->can('balance_sheet') ||
                    $userRole->can('payable_or_receivable'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#fireport">
                        <i class="fa-solid fa-flag u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Finance Reports</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="fireport" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('daily_collection')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="daily_collection.html">
                                    <span class="u-sidebar-nav-menu__item-title">Daily Collection</span>
                                </a>
                            </li>
                        @endcan
                        @can('fees_collection')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="fees_collection.html">
                                    <span class="u-sidebar-nav-menu__item-title">Fees Collection</span>
                                </a>
                            </li>
                        @endcan
                        @can('student_dues')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="student_dues.html">
                                    <span class="u-sidebar-nav-menu__item-title">Student Dues</span>
                                </a>
                            </li>
                        @endcan
                        @can('student_ledger')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="student_ledger.html">
                                    <span class="u-sidebar-nav-menu__item-title">Students Ledger</span>
                                </a>
                            </li>
                        @endcan
                        @can('student_weiver')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="student_wavier_report.html">
                                    <span class="u-sidebar-nav-menu__item-title">Students Waiver</span>
                                </a>
                            </li>
                        @endcan
                        @can('accounts_ledger')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="account_ledger.html">
                                    <span class="u-sidebar-nav-menu__item-title">Accounts Ledger</span>
                                </a>
                            </li>
                        @endcan
                        @can('trial_balance')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="trial_balance.html">
                                    <span class="u-sidebar-nav-menu__item-title">Trial Balance</span>
                                </a>
                            </li>
                        @endcan
                        @can('cash_book')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="cash_book.html">
                                    <span class="u-sidebar-nav-menu__item-title">Cash Book</span>
                                </a>
                            </li>
                        @endcan
                        @can('bank_book')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="bank_book.html">
                                    <span class="u-sidebar-nav-menu__item-title">Bank Book</span>
                                </a>
                            </li>
                        @endcan
                        @can('balance_sheet')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="balance_sheet.html">
                                    <span class="u-sidebar-nav-menu__item-title">Balance Sheet</span>
                                </a>
                            </li>
                        @endcan
                        @can('payable_or_receivable')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="payable_recivable.html">
                                    <span class="u-sidebar-nav-menu__item-title">Payable/Receivable</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!--  Finance Reports -->

            <!--  Learning Module -->
            @if (
                $userRole->can('live_class') ||
                    $userRole->can('home_work_list') ||
                    $userRole->can('hw_submit') ||
                    $userRole->can('submitted_hw_list') ||
                    $userRole->can('class_work_list') ||
                    $userRole->can('cw_submitted') ||
                    $userRole->can('leason_plan_list') ||
                    $userRole->can('academic_syllabus'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#learning">
                        <i class="fa-brands fa-leanpub u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Learning Module</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="learning" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('live_class')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage.live.classes') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Live Classes</span>
                                </a>
                            </li>
                        @endcan

                        @can('home_work_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage.home.work') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Home Work List</span>
                                </a>
                            </li>
                        @endcan

                        @can('hw_submit')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('hw.submit') }}">
                                    <span class="u-sidebar-nav-menu__item-title">H.W Submit</span>
                                </a>
                            </li>
                        @endcan

                        @can('submitted_hw_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage.hw.submit') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Submitted H.W List</span>
                                </a>
                            </li>
                        @endcan

                        {{-- @can('class_work_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage.class.work') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Class Work List</span>
                                </a>
                            </li>
                        @endcan

                        @can('cw_submitted')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="cw_submitted.html">
                                    <span class="u-sidebar-nav-menu__item-title">C.W Submitted</span>
                                </a>
                            </li>
                        @endcan --}}

                        @can('leason_plan_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage.leason.plan') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Leason Plan List</span>
                                </a>
                            </li>
                        @endcan

                        @can('academic_syllabus')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage.academic.syllabus') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Academic Syllabus</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!--  Learning Module -->

            <!--  Website Module -->
            @if (
                $userRole->can('slideshow_list') ||
                    $userRole->can('message_corner') ||
                    $userRole->can('all_menu_list') ||
                    $userRole->can('all_content_list') ||
                    $userRole->can('breaking_news') ||
                    $userRole->can('all_album_list') ||
                    $userRole->can('all_gallery_list') ||
                    $userRole->can('all_news_list') ||
                    $userRole->can('all_events_list') ||
                    $userRole->can('all_notice_list') ||
                    $userRole->can('all_career_list') ||
                    $userRole->can('board_result_list') ||
                    $userRole->can('usefull_link_list') ||
                    $userRole->can('social_media_list'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#website">
                        <i class="fa-solid fa-globe u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Website Module</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="website" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('slideshow_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_slide') }}">
                                    <span class="u-sidebar-nav-menu__item-title">SlideShow List</span>
                                </a>
                            </li>
                        @endcan

                        @can('message_corner')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_message') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Message Corner</span>
                                </a>
                            </li>
                        @endcan

                        @can('all_menu_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_menu') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All Menu List</span>
                                </a>
                            </li>
                        @endcan

                        @can('all_sub_menu')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_submenu') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Sub Menu List</span>
                                </a>
                            </li>
                        @endcan

                        @can('all_content_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_content') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All Content List</span>
                                </a>
                            </li>
                        @endcan

                        @can('breaking_news')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_breaking_news') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Breaking News</span>
                                </a>
                            </li>
                        @endcan

                        @can('all_album_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_album') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All Album List</span>
                                </a>
                            </li>
                        @endcan

                        @can('all_gallery_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_gallery') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All Gallery List</span>
                                </a>
                            </li>
                        @endcan

                        @can('all_news_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_news') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All News List</span>
                                </a>
                            </li>
                        @endcan

                        @can('all_events_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_event') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All Events List</span>
                                </a>
                            </li>
                        @endcan

                        @can('all_notice_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_notice') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All Notice List</span>
                                </a>
                            </li>
                        @endcan

                        @can('all_career_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_career') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All Career List</span>
                                </a>
                            </li>
                        @endcan

                        @can('board_result_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_board_result') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Board Result List</span>
                                </a>
                            </li>
                        @endcan

                        @can('usefull_link_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_link') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Usefull Link List</span>
                                </a>
                            </li>
                        @endcan

                        @can('social_media_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage_social_media') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Social Media List</span>
                                </a>
                            </li>
                        @endcan

                    </ul>
                </li>
            @endif
            <!--  Website Module -->

            <!-- User Managment -->
            @if (
                $userRole->can('all_user_list') ||
                    $userRole->can('manage_user_role') ||
                    $userRole->can('sms_user_student') ||
                    $userRole->can('sms_user_employee'))
                <li class="u-sidebar-nav-menu__item {{ $userMgmt_nav }}">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#user">
                        <i class="fa-solid fa-users u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title"> User Management</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="user" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('all_user_list')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('all.users') }}">
                                    <span class="u-sidebar-nav-menu__item-title">All User List</span>
                                </a>
                            </li>
                        @endcan

                        @can('manage_user_role')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('manage.user.role') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Manage User Role</span>
                                </a>
                            </li>
                        @endcan

                        @can('sms_user_student')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('sms.student') }}">
                                    <span class="u-sidebar-nav-menu__item-title">SMS User(Students)</span>
                                </a>
                            </li>
                        @endcan

                        @can('sms_user_employee')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('sms.employee') }}">
                                    <span class="u-sidebar-nav-menu__item-title">SMS User(Employees)</span>
                                </a>
                            </li>
                        @endcan

                    </ul>
                </li>
            @endif
            <!--  User Managment -->

            <!-- Promotional Module-->
            @if (
                $userRole->can('my_groups') ||
                    $userRole->can('my_contacts') ||
                    $userRole->can('import_contacts') ||
                    $userRole->can('send_custom_sms') ||
                    $userRole->can('send_details_report'))
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#promotion">
                        <i class="fa-solid fa-splotch u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Promotional Module</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="promotion" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                        style="display: none;">
                        @can('my_groups')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('my.groups') }}">
                                    <span class="u-sidebar-nav-menu__item-title">My Groups</span>
                                </a>
                            </li>
                        @endcan

                        @can('my_contacts')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('my.contacts') }}">
                                    <span class="u-sidebar-nav-menu__item-title">My Contacts</span>
                                </a>
                            </li>
                        @endcan

                        @can('import_contacts')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('import.contact') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Import Contacts</span>
                                </a>
                            </li>
                        @endcan

                        @can('send_custom_sms')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('custom.sms') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Send Custom SMS</span>
                                </a>
                            </li>
                        @endcan

                        @can('send_details_report')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('sms.details') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Send Details Reports</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!--  Promotional Module -->

        </ul>
    </nav>
</div>
