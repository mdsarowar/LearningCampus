<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\ProfileController;

/* ---- Global Module Start----  */

use App\Http\Controllers\GlobalSettingsModule\InstituteController;
use App\Http\Controllers\GlobalSettingsModule\BranchController;
use App\Http\Controllers\GlobalSettingsModule\SMSController;
use App\Http\Controllers\GlobalSettingsModule\AcademicHolidayController;
/* ---- Global Module End----  */

/* ---- Academic Module Start----  */
use App\Http\Controllers\AcademicModule\AllSessionController;
use App\Http\Controllers\AcademicModule\AllMediumController;
use App\Http\Controllers\AcademicModule\AllShiftListController;
use App\Http\Controllers\AcademicModule\AllClassListController;
use App\Http\Controllers\AcademicModule\AllSectionListController;
use App\Http\Controllers\AcademicModule\AllGroupListController;
use App\Http\Controllers\AcademicModule\AllSubjectListController;
use App\Http\Controllers\AcademicModule\AcademicCalenderController;
use App\Http\Controllers\AuthorizationController;
/* ---- Academic Module End----  */

/* ---- HR Module Start----  */
use App\Http\Controllers\HrModule\EmployeeTypeController;
use App\Http\Controllers\HrModule\EmployeeCategories;
use App\Http\Controllers\HrModule\DesignationController;
use App\Http\Controllers\HrModule\WorkingShiftController;
use App\Http\Controllers\HrModule\EmployeeController;
/* ---- HR Module End----  */

/* ---- Payroll Module Start----  */
use App\Http\Controllers\PayrollModule\PayrollHeadController;
use App\Http\Controllers\PayrollModule\EmployeePayscaleController;
use App\Http\Controllers\PayrollModule\EmployeeSalaryChartController;
use App\Http\Controllers\PayrollModule\EmployeeSalaryPaymentController;
use App\Http\Controllers\PayrollModule\EmployeeSalaryReportController;
use App\Http\Controllers\PayrollModule\EmployeePaySlipPrintController;
use App\Http\Controllers\PayrollModule\GenerateSalarySheetController;
/* ---- Payroll Module End----  */

/* ---- Student Module Start----  */
use App\Http\Controllers\StudentModule\StudentModuleController;
use App\Http\Controllers\StudentModule\AddNewStudent;
use App\Http\Controllers\StudentModule\ArchiveStudentList;
use App\Http\Controllers\StudentModule\ArchiveStudentSearch;
use App\Http\Controllers\StudentModule\CurrentStudentAdd;
use App\Http\Controllers\StudentModule\CurrentStudentList;
use App\Http\Controllers\StudentModule\PrintStudentID;
use App\Http\Controllers\StudentModule\StudentEdit;
use App\Http\Controllers\StudentModule\StudentMigration;
use App\Http\Controllers\StudentModule\StudentView;
use App\Http\Controllers\StudentModule\Testimonial;
/* ---- Student Module Start----  */

/* ---- Student Account Module Start----  */
use App\Http\Controllers\StudentAccounts\StudentAccountsController;
/* ---- Student Account Module Start----  */

/* ---- Student Attendence Module Start----  */
use App\Http\Controllers\StudentAttendenceModule\StudentAttendenceController;
/* ---- Student Attendence Module Start----  */

/* ---- Routine Module Start----  */
use App\Http\Controllers\RoutineModule\DynamicRoutineController;
use App\Http\Controllers\RoutineModule\GeneralRoutineController;
use App\Http\Controllers\RoutineModule\PrintRoutineController;
/* ---- Routine Module Start----  */

/* ---- Finance Module Start----  */
use App\Http\Controllers\FinanceModule\AccountHeadController;
use App\Http\Controllers\FinanceModule\AddAccountHeadController;
use App\Http\Controllers\FinanceModule\EditAccountHeadController;
use App\Http\Controllers\FinanceModule\ViewAccountHeadController;
/* ---- Finance Module Start----  */

/* ---- Learning Module Start----  */
use App\Http\Controllers\LearningModule\LearningController;
/* ---- Learning Module Start----  */

/* ---- Leave Module Start----  */
use App\Http\Controllers\LeaveModule\LeaveController;
/* ---- Leave Module Start----  */

/* ---- Promotional Module Start----  */
use App\Http\Controllers\PromotionalModule\PromotionalContactsController;
use App\Http\Controllers\PromotionalModule\PromotionalSMSController;

/* result module */
use App\Http\Controllers\ResultModule\AddExamGrade;
use App\Http\Controllers\ResultModule\EditExamGrade;
use App\Http\Controllers\ResultModule\ExamGrade;
use App\Http\Controllers\ResultModule\MarksEntryBlank;
use App\Http\Controllers\ResultModule\MarksEntryExam;
use App\Http\Controllers\ResultModule\MarksEntrySubject;
use App\Http\Controllers\ResultModule\ViewExamGrade;
use App\Http\Controllers\ResultReports\StudentMeritList;
use App\Http\Controllers\ResultReports\StudentReportCard;
use App\Http\Controllers\ResultReports\StudentWiseTranscipt;

use App\Http\Controllers\smsProxyController;

/* user management module */
use App\Http\Controllers\UserManagementModule\UserMangementController;

/* account voucher */
use App\Http\Controllers\AccountBoucher\BoucherController;

use App\Http\Controllers\EmployeAttendenceModule\EmployeAttendenceController;
use App\Http\Controllers\ExamSettings\ExamSettingController;
/* website module */
use App\Http\Controllers\Website\SlideController;
use App\Http\Controllers\Website\MessageController;
use App\Http\Controllers\Website\AlbumController;
use App\Http\Controllers\Website\BoardResultController;
use App\Http\Controllers\Website\BreakingNewsController;
use App\Http\Controllers\Website\CareerController;
use App\Http\Controllers\Website\ContentController;
use App\Http\Controllers\Website\EventController;
use App\Http\Controllers\Website\GalleryController;
use App\Http\Controllers\Website\LinkController;
use App\Http\Controllers\Website\MenuController;
use App\Http\Controllers\Website\NewsController;
use App\Http\Controllers\Website\NoticeController;
use App\Http\Controllers\Website\SocialMediaController;
use App\Http\Controllers\Frontend\FrontHomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\StudentModule\AddCurrentStudent;
use App\Http\Controllers\StudentModule\PrintAdmissionForm;
use App\Http\Controllers\Website\SubMenuController;
use App\Http\Controllers\ExamAdmiteCadModule\ExamAdmiteCadController;
use App\Http\Controllers\StudentModule\BiometricExport;

/* ============================================================================== */

/* frontend start */

Route::get('/home', [FrontHomeController::class, 'index'])->name('home_index');
Route::get('/front_breaking_news', [FrontHomeController::class, 'front_breaking_news'])->name('front_breaking_news');
Route::get('/front_content', [FrontHomeController::class, 'front_content'])->name('front_content');
Route::get('/album_event/{id}', [FrontHomeController::class, 'album_event'])->name('album_event');
Route::get('/album_photo/{id}', [FrontHomeController::class, 'album_photo'])->name('album_photo');
Route::get('/album_video/{id}', [FrontHomeController::class, 'album_video'])->name('album_video');
Route::get('/notice', [FrontHomeController::class, 'notice'])->name('notice');
Route::get('/about', [FrontHomeController::class, 'about'])->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
/* frontend end */

/* custom error */
Route::get('error', function () {
    return view('layouts.inc.error');
})->name('error');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
/* auth start*/
require __DIR__ . '/auth.php';
/* auth end*/
/* ---- Admin Dashboard End----  */

Route::middleware('auth')->group(function () {

    Route::middleware('dashboardGuard')->group(function () {
        /* ---- User Management Start ---- */
        Route::get('users-list', [UserMangementController::class, 'allUserList'])->name('all.users');
        /* add user */
        Route::get('add-user', [UserMangementController::class, 'addUser'])->name('add.users');
        Route::post('add-user-submit', [UserMangementController::class, 'addUserSubmit'])->name('add.users.submit');
        /* edit user */
        Route::get('edit-user', [UserMangementController::class, 'editUser'])->name('edit.users');
        Route::post('edit-user-submit', [UserMangementController::class, 'editUserSubmit'])->name('edit.users.submit');
        /* view user */
        Route::get('view-user', [UserMangementController::class, 'viewUser'])->name('view.users');
        /* delete user */
        Route::post('delete-user', [UserMangementController::class, 'deleteUser'])->name('delete.users');
        /* create role */
        Route::get('create-role', [UserMangementController::class, 'createRole'])->name('create.role');
        Route::post('create-role-submit', [UserMangementController::class, 'createRoleSubmit'])->name('create.role.submit');
        /* manage role */
        Route::get('manage-user-role', [UserMangementController::class, 'manageUserRole'])->name('manage.user.role');
        /* update role */
        Route::get('update-role', [UserMangementController::class, 'updateRole'])->name('update.role');
        Route::post('update-role-submit', [UserMangementController::class, 'updateRoleSubmit'])->name('update.role.submit');
        /* delete role */
        Route::post('delete-role', [UserMangementController::class, 'deleteRole'])->name('delete.role');
        /* get users based on user type */
        Route::post('get-users', [UserMangementController::class, 'getUsers'])->name('get.users');
        /* sms users */
        Route::get('sms-student', [UserMangementController::class, 'sms_student'])->name('sms.student');
        Route::get('sms-employee', [UserMangementController::class, 'sms_employee'])->name('sms.employee');
        /* ---- User Management End ---- */
    });

    /* ---- Global Settings Module Start----  */
    Route::middleware('dashboardGuard')->group(function () {
        /* ---- Institute----  */
        Route::get('/institute', [InstituteController::class, 'instituteAdd'])->name('institute_add');
        Route::post('/institute-setting-insert', [InstituteController::class, 'instituteSettingInsert'])->name('institute_setting_insert');
        Route::post('/general-info-insert', [InstituteController::class, 'instituteInformationInsert'])->name('institute_info_insert');
        /* ---- Branch----  */
        Route::get('/branch', [BranchController::class, 'branch'])->name('branch');
        Route::get('/add-branch', [BranchController::class, 'addBranch'])->name('add_branch');
        Route::post('/insert-branch', [BranchController::class, 'insertBranch'])->name('insert_branch');
        Route::get('/view-branch', [BranchController::class, 'viewBranch'])->name('view_branch');
        Route::get('/edit-branch', [BranchController::class, 'editBranch'])->name('edit_branch');
        Route::post('/update-branch', [BranchController::class, 'updateBranch'])->name('update_branch');
        Route::post('/delete-branch', [BranchController::class, 'deleteBranch'])->name('delete_branch');
        Route::post('/branch-search', [BranchController::class, 'branchSearch'])->name('branch_search');
        /* ---- SMS Settings----  */
        Route::get('/sms-settings', [SMSController::class, 'smsSettings'])->name('sms_settings');
        /* Academic Holiday */
        Route::get('/academic-holiday', [AcademicHolidayController::class, 'academicHoliday'])->name('academic_holiday');
        Route::get('/add-academic-holiday', [AcademicHolidayController::class, 'addAcademicHoliday'])->name('add_academic_holiday');
        Route::post('/insert-academic-holiday', [AcademicHolidayController::class, 'insertAcademicHoliday'])->name('insert_academic_holiday');
        Route::get('/edit-academic-holiday', [AcademicHolidayController::class, 'editAcademicHoliday'])->name('edit_academic_holiday');
        Route::post('/update-academic-holiday', [AcademicHolidayController::class, 'updateAcademicHoliday'])->name('update_academic_holiday');
        Route::post('/delete-academic-holiday', [AcademicHolidayController::class, 'deleteAcademicHoliday'])->name('delete_academic_holiday');
    });
    /* ---- Academic Holiday----  */
    Route::get('/view-academic-holiday', [AcademicHolidayController::class, 'viewAcademicHoliday'])->name('view_academic_holiday');
    Route::post('/academic-holiday-search', [AcademicHolidayController::class, 'academicHolidaySearch'])->name('academic_holiday_search');
    /* ---- Global Settings Module End----  */


    /* ---- Payroll Module Start----  */
    Route::get('/payroll-head', [PayrollHeadController::class, 'payrollHead'])->name('payroll_head');
    Route::post('/delete-payroll-head', [PayrollHeadController::class, 'deletePayrolHead'])->name('delete_payroll_head');
    Route::post('/payroll-head-search', [PayrollHeadController::class, 'payrollHeadSearch'])->name('payroll_head_search');
    Route::get('/add-payroll-head', [PayrollHeadController::class, 'addPayrollHead'])->name('add_payroll_head');
    Route::post('/insert-payroll-head', [PayrollHeadController::class, 'addPayrollSubmit'])->name('insert_payroll_head');
    Route::get('/view-payroll-head', [PayrollHeadController::class, 'viewPayrollHead'])->name('view_payroll_head');
    Route::get('/edit-payroll-head', [PayrollHeadController::class, 'editPayrollHead'])->name('edit_payroll_head');
    Route::post('/update-payroll-head', [PayrollHeadController::class, 'updatePayrollHeadSubmit'])->name('update_payroll_head');
    /* ---- Payroll Module End----  */


    /* ---- Employee Payscale Start----  */
    Route::get('/employee-payscale', [EmployeePayscaleController::class, 'employeePayscale'])->name('employee_payscale');
    Route::get('/add-employee-payscale', [EmployeePayscaleController::class, 'addemployeePayscale'])->name('add_employee_payscale');
    Route::post('/insert-general-info', [EmployeePayscaleController::class, 'insertGeneralInfo'])->name('insert_general_info');
    Route::post('/insert-chat-info', [EmployeePayscaleController::class, 'insertChatInfo'])->name('insert_chat_info');
    Route::get('/view-employee-payscale{id}', [EmployeePayscaleController::class, 'viewemployeePayscale'])->name('view_employee_payscale');
    Route::get('/edit-general-info/{id}', [EmployeePayscaleController::class, 'editGeneralInfo'])->name('edit_chat_info');
    Route::get('/delete-employee-payscale/{id}', [EmployeePayscaleController::class, 'deleteEmployeePayscale'])->name('delete_employee_payscale');
    /* ---- Employee Salary Chart----  */
    Route::get('/employee-salary-chart', [EmployeeSalaryChartController::class, 'employeeSalaryChart'])->name('employee_salary_chart');
    Route::get('/add-employee-salary-chart', [EmployeeSalaryChartController::class, 'addEmployeeSalaryChart'])->name('add_employee_salary_chart');
    Route::post('/insert-employee-salary-chart', [EmployeeSalaryChartController::class, 'insertEmployeeSalaryChart'])->name('insert_employee_salary_chart');
    Route::get('/delete-employee-salary-chart{id}', [EmployeePayscaleController::class, 'deleteEmployeeSalaryChart'])->name('delete_employee_salary_chart');
    /* ---- Employee Salary Payment----  */
    Route::get('/employee-salary-payment', [EmployeeSalaryPaymentController::class, 'employeeSalaryPayment'])->name('employee_salary_payment');
    Route::post('/insert-employee-salary-payment', [EmployeeSalaryPaymentController::class, 'insertEmployeeSalaryPayment'])->name('insert_employee_salary_payment');
    /* ---- Employee Salary Report----  */
    Route::get('/employee-salary-report', [EmployeeSalaryReportController::class, 'employeeSalaryReport'])->name('employee_salary_report');
    Route::post('/employee-salary-report', [EmployeeSalaryReportController::class, 'insertEmployeeSalaryReport'])->name('insert_employee_salary_report');
    /* ---- Employee Pay Slip Print----  */
    Route::get('/employee-pay-slip-print', [EmployeePaySlipPrintController::class, 'employeePaySlipPrint'])->name('employee_pay_slip_print');
    Route::post('/employee-pay-slip-print', [EmployeePaySlipPrintController::class, 'insertEmployeePaySlipPrint'])->name('insert_employee_pay_slip_print');
    /* ---- Generate Salary Sheet----  */
    Route::get('/generate-salary-sheet', [GenerateSalarySheetController::class, 'generateSalarySheet'])->name('generate_salary_sheet');
    /* ---- Employee Payscale End----  */


    /* ---- Academic Module Start----  */

    /* ---- All Session----  */
    Route::get('/all-session', [AllSessionController::class, 'allSession'])->name('all_session');
    Route::post('/all-session-search', [AllSessionController::class, 'allSessionSearch'])->name('all_session_search');
    Route::get('/edit-session', [AllSessionController::class, 'editSession'])->name('edit_session');
    Route::post('/edit-session-submit', [AllSessionController::class, 'editSessionSubmit'])->name('edit_session_submit');
    Route::get('/view-session', [AllSessionController::class, 'viewSession'])->name('view_session');
    Route::get('/add-session', [AllSessionController::class, 'addSession'])->name('add_session');
    Route::post('/add-session-submit', [AllSessionController::class, 'addSessionSubmit'])->name('add_session_submit');
    Route::post('/delete-session', [AllSessionController::class, 'deleteSession'])->name('delete_session');
    /* ---- All Medium----  */
    Route::get('/all-medium', [AllMediumController::class, 'allMedium'])->name('all_medium');
    Route::post('/all-medium-search', [AllMediumController::class, 'allMediumSearch'])->name('all_medium_search');
    Route::get('/edit-medium', [AllMediumController::class, 'editMedium'])->name('edit_medium');
    Route::post('/edit-medium-submit', [AllMediumController::class, 'editMediumSubmit'])->name('edit_medium_submit');
    Route::get('/view-medium', [AllMediumController::class, 'viewMedium'])->name('view_medium');
    Route::get('/add-medium', [AllMediumController::class, 'addMedium'])->name('add_medium');
    Route::post('/add-medium-submit', [AllMediumController::class, 'addMediumSubmit'])->name('add_medium_submit');
    Route::post('/delete-medium', [AllMediumController::class, 'deleteMedium'])->name('delete_medium');
    /* ---- All Shift List----  */
    Route::get('/all-shift-list', [AllShiftListController::class, 'allShiftList'])->name('all_shift_list');
    Route::post('/all-shift-search', [AllShiftListController::class, 'allShiftSearch'])->name('all_shift_search');
    Route::get('/edit-shift', [AllShiftListController::class, 'editShift'])->name('edit_shift');
    Route::post('/edit-shift-submit', [AllShiftListController::class, 'editShiftSubmit'])->name('edit_shift_submit');
    Route::get('/view-shift', [AllShiftListController::class, 'viewShift'])->name('view_shift');
    Route::get('/add-shift', [AllShiftListController::class, 'addShift'])->name('add_shift');
    Route::post('/add-shift-submit', [AllShiftListController::class, 'addShiftSubmit'])->name('add_shift_submit');
    Route::post('/delete-shift', [AllShiftListController::class, 'deleteShift'])->name('delete_shift');
    /* ---- All Class List----  */
    Route::get('/all-class-list', [AllClassListController::class, 'allClassList'])->name('all_class_list');
    Route::post('/all-class-search', [AllClassListController::class, 'allClassSearch'])->name('all_class_search');
    Route::get('/edit-class', [AllClassListController::class, 'editCLass'])->name('edit_class');
    Route::post('/edit-class-submit', [AllClassListController::class, 'editCLassSubmit'])->name('edit_class_submit');
    Route::get('/view-class', [AllClassListController::class, 'viewCLass'])->name('view_class');
    Route::get('/add-class', [AllClassListController::class, 'addCLass'])->name('add_class');
    Route::post('/add-class-submit', [AllClassListController::class, 'addCLassSubmit'])->name('add_class_submit');
    Route::post('/delete-class', [AllClassListController::class, 'deleteCLass'])->name('delete_class');
    /* ---- All Section List----  */
    Route::get('/all-section-list', [AllSectionListController::class, 'allSectionList'])->name('all_section_list');
    Route::post('/all-section-search', [AllSectionListController::class, 'allSectionSearch'])->name('all_section_search');
    Route::get('/edit-section', [AllSectionListController::class, 'editSection'])->name('edit_section');
    Route::post('/edit-section-submit', [AllSectionListController::class, 'editSectionSubmit'])->name('edit_section_submit');
    Route::get('/view-section', [AllSectionListController::class, 'viewSection'])->name('view_section');
    Route::get('/add-section', [AllSectionListController::class, 'addSection'])->name('add_section');
    Route::post('/add-section-submit', [AllSectionListController::class, 'addSectionSubmit'])->name('add_section_submit');
    Route::post('/delete-section', [AllSectionListController::class, 'deleteSection'])->name('delete_section');
    /* ---- All Group List----  */
    Route::get('/all-group-list', [AllGroupListController::class, 'allGroupList'])->name('all_group_list');
    Route::post('/all-group-search', [AllGroupListController::class, 'allGroupSearch'])->name('all_group_search');
    Route::get('/edit-group', [AllGroupListController::class, 'editGroup'])->name('edit_group');
    Route::post('/edit-group-submit', [AllGroupListController::class, 'editGroupSubmit'])->name('edit_group_submit');
    Route::get('/view-group', [AllGroupListController::class, 'viewGroup'])->name('view_group');
    Route::get('/add-group', [AllGroupListController::class, 'addGroup'])->name('add_group');
    Route::post('/delete-group', [AllGroupListController::class, 'deleteGroup'])->name('delete_group');
    Route::post('/add-group-submit', [AllGroupListController::class, 'addGroupSubmit'])->name('add_group_submit');
    /* ---- All Subject List----  */
    Route::get('/all-subject-list', [AllSubjectListController::class, 'allSubjectList'])->name('all_subject_list');
    Route::post('/all-subject-search', [AllSubjectListController::class, 'allSubjectSearch'])->name('all_subject_search');
    Route::get('/edit-subject', [AllSubjectListController::class, 'editSubject'])->name('edit_subject');
    Route::post('/edit-subject-submit', [AllSubjectListController::class, 'editSubjectSubmit'])->name('edit_subject_submit');
    Route::get('/view-subject', [AllSubjectListController::class, 'viewSubject'])->name('view_subject');
    Route::get('/add-subject', [AllSubjectListController::class, 'addSubject'])->name('add_subject');
    Route::post('/add-subject-submit', [AllSubjectListController::class, 'addSubjectSubmit'])->name('add_subject_submit');
    Route::post('/delete-subject', [AllSubjectListController::class, 'deleteSubject'])->name('delete_subject');
    /* ---- Academic Calender----  */
    Route::get('/academic_calender', [AcademicCalenderController::class, 'academicCalender'])->name('academic.calender');
    Route::get('/academic_calender_delete{event_details_id}', [AcademicCalenderController::class, 'eventdelete'])->name('academic.calender.delete');
    Route::post('/academic_calender_store', [AcademicCalenderController::class, 'academicCalenderStore'])->name('academic.calender.store');    /* ---- Academic Module End----  */


    /* ---- HR Module Start----  */
    //Employee type
    Route::get('manage_employee_type', [EmployeeTypeController::class, 'index'])->name('manage_employee_type');
    Route::get('add_employee_type', [EmployeeTypeController::class, 'create'])->name('add_employee_type');
    Route::post('store_employee_type', [EmployeeTypeController::class, 'store'])->name('store_employee_type');
    Route::get('edit_employee_type/{id}', [EmployeeTypeController::class, 'edit'])->name('edit_employee_type');
    Route::get('view_employee_type/{id}', [EmployeeTypeController::class, 'show'])->name('view_employee_type');
    Route::post('update_employee_type/{id}', [EmployeeTypeController::class, 'update'])->name('update_employee_type');
    Route::get('delete_employee_type/{id}', [EmployeeTypeController::class, 'destroy'])->name('delete_employee_type');

    //Employee category
    Route::get('manage_employee_category', [EmployeeCategories::class, 'index'])->name('manage_employee_category');
    Route::get('add_employee_category', [EmployeeCategories::class, 'create'])->name('add_employee_category');
    Route::post('store_employee_category', [EmployeeCategories::class, 'store'])->name('store_employee_category');
    Route::get('edit_employee_category/{id}', [EmployeeCategories::class, 'edit'])->name('edit_employee_category');
    Route::get('view_employee_category/{id}', [EmployeeCategories::class, 'show'])->name('view_employee_category');
    Route::post('update_employee_category/{id}', [EmployeeCategories::class, 'update'])->name('update_employee_category');
    Route::get('delete_employee_category/{id}', [EmployeeCategories::class, 'destroy'])->name('delete_employee_category');

    //Employee designation
    Route::get('manage_designation', [DesignationController::class, 'index'])->name('manage_designation');
    Route::get('add_designation', [DesignationController::class, 'create'])->name('add_designation');
    Route::post('store_designation', [DesignationController::class, 'store'])->name('store_designation');
    Route::get('edit_designation/{id}', [DesignationController::class, 'edit'])->name('edit_designation');
    Route::get('view_designation/{id}', [DesignationController::class, 'show'])->name('view_designation');
    Route::post('update_designation/{id}', [DesignationController::class, 'update'])->name('update_designation');
    Route::get('delete_designation/{id}', [DesignationController::class, 'destroy'])->name('delete_designation');

    //Working shift
    Route::get('manage_workingshift', [WorkingShiftController::class, 'index'])->name('manage_workingshift');
    Route::get('add_workingshift', [WorkingShiftController::class, 'create'])->name('add_workingshift');
    Route::post('store_workingshift', [WorkingShiftController::class, 'store'])->name('store_workingshift');
    Route::get('edit_workingshift/{id}', [WorkingShiftController::class, 'edit'])->name('edit_workingshift');
    Route::get('view_workingshift/{id}', [WorkingShiftController::class, 'show'])->name('view_workingshift');
    Route::post('update_workingshift/{id}', [WorkingShiftController::class, 'update'])->name('update_workingshift');
    Route::get('delete_workingshift/{id}', [WorkingShiftController::class, 'destroy'])->name('delete_workingshift');

    //employee
       Route::get('manage_employee', [EmployeeController::class, 'index'])->name('manage_employee');
    Route::get('add_employee', [EmployeeController::class, 'create'])->name('add_employee');
    Route::post('store_employee', [EmployeeController::class, 'store'])->name('store_employee');
    Route::get('delete_employee/{id}', [EmployeeController::class, 'destroy'])->name('delete_employee');
    Route::get('view_employee/{id}', [EmployeeController::class, 'show'])->name('view_employee');
    Route::get('print_employee/{id}', [EmployeeController::class, 'print_employee'])->name('print_employee');
    Route::get('edit_employee/{id}', [EmployeeController::class, 'edit'])->name('edit_employee');
    Route::post('update_employee/{id}', [EmployeeController::class, 'update'])->name('update_employee');

    Route::get('search_employee', [EmployeeController::class, 'search'])->name('search_employee');
    Route::get('employee_id_card', [EmployeeController::class, 'idCard'])->name('employee_id_card');
    Route::post('view_id_card', [EmployeeController::class, 'viewIdCard'])->name('view_id_card');
    Route::get('employee_export', [EmployeeController::class, 'employeeExport'])->name('employee_export');
    /* ---- HR Module End----  */


    /* -----Exam Settings Module Start------ */
    Route::get('/exam_grade', [ExamSettingController::class, 'exam_grade'])->name('exam.grade');
    Route::get('/exam_terms', [ExamSettingController::class, 'exam_terms'])->name('exam.terms');
    Route::get('/exam_part', [ExamSettingController::class, 'exam_part'])->name('exam.part');
    Route::get('/assign_exam', [ExamSettingController::class, 'assign_exam'])->name('assign.exam');
    Route::get('/working_days', [ExamSettingController::class, 'working_days'])->name('working.days');
    Route::get('/view_seat_plan', [ExamSettingController::class, 'view_seat_plan'])->name('view.seat.plan');
    Route::get('/exam_routine', [ExamSettingController::class, 'exam_routine'])->name('exam.routine');
    Route::get('/exam_attn', [ExamSettingController::class, 'exam_attn'])->name('exam.attn');
    Route::get('/exam_elige', [ExamSettingController::class, 'exam_elige'])->name('exam.elige');


    Route::get('/add_exam_grade', [ExamSettingController::class, 'add_exam_grade'])->name('add.exam.grade');
    Route::get('/add_exam_terms', [ExamSettingController::class, 'add_exam_terms'])->name('add.exam.terms');
    Route::get('/add_exam_part', [ExamSettingController::class, 'add_exam_part'])->name('add.exam.part');
    Route::get('/add_assign_exam', [ExamSettingController::class, 'add_assign_exam'])->name('add.assign.exam');
    Route::get('/add_working_days', [ExamSettingController::class, 'add_working_days'])->name('add.working.days');
    Route::get('/add_seat_plan', [ExamSettingController::class, 'add_seat_plan'])->name('add.seat.plan');


    Route::post('/exam_grade_post', [ExamSettingController::class, 'exam_grade_post'])->name('exam.grade.post');
    Route::post('/exam_terms_post', [ExamSettingController::class, 'exam_terms_post'])->name('exam.terms.post');
    Route::post('/exam_part_post', [ExamSettingController::class, 'exam_part_post'])->name('exam.part.post');
    Route::post('/assign_exam_post', [ExamSettingController::class, 'assign_exam_post'])->name('assign.exam.post');
    Route::post('/working_days_post', [ExamSettingController::class, 'working_days_post'])->name('working.days.post');
    Route::post('/seat_plan_post', [ExamSettingController::class, 'seat_plan_post'])->name('seat.plan.post');
    Route::post('/exam_routine_upper_post', [ExamSettingController::class, 'exam_routine_upper_post'])->name('exam.routine.upper.post');
    Route::post('/exam_routine_lower_post', [ExamSettingController::class, 'exam_routine_lower_post'])->name('exam.routine.lower.post');
    Route::post('/marks_entry_exam_post', [ExamSettingController::class, 'marks_entry_exam_post'])->name('marks.entry.exam.post');


    Route::get('/view_exam_grade{exam_grade_id}', [ExamSettingController::class, 'view_exam_grade'])->name('view.exam.grade');
    Route::get('/view_exam_terms{exam_term_id}', [ExamSettingController::class, 'view_exam_terms'])->name('view.exam.terms');
    Route::get('/view_exam_part{exam_part_id}', [ExamSettingController::class, 'view_exam_part'])->name('view.exam.part');
    Route::get('/view_assign_exam{assign_id}', [ExamSettingController::class, 'view_assign_exam'])->name('view.assign.exam');
    Route::get('/view_working_days{work_id}', [ExamSettingController::class, 'view_working_days'])->name('view.working.days');

    Route::get('/delete_exam_grade{exam_grade_id}', [ExamSettingController::class, 'delete_exam_grade'])->name('delete.exam.grade');
    Route::get('/delete_exam_terms{exam_term_id}', [ExamSettingController::class, 'delete_exam_terms'])->name('delete.exam.terms');
    Route::get('/delete_exam_part{exam_part_id}', [ExamSettingController::class, 'delete_exam_part'])->name('delete.exam.part');
    Route::get('/delete_assign_exam{assign_id}', [ExamSettingController::class, 'delete_assign_exam'])->name('delete.assign.exam');
    Route::get('/delete_working_days{work_id}', [ExamSettingController::class, 'delete_working_days'])->name('delete.working.days');

    /* -----Exam Settings Module End------ */


    /* ---- Student Module Start----  */
    Route::get('/student-admission', [AddNewStudent::class, 'index'])->name('student.admission');
    Route::post('/student-admission', [AddNewStudent::class, 'store'])->name('student.admission.submit');
    Route::get('/print_admission_form', [PrintAdmissionForm::class, 'index'])->name('print-admission.form');

    Route::get('/students-add', [CurrentStudentAdd::class, 'index'])->name('students.add');

    Route::get('/current_student', [CurrentStudentList::class, 'index'])->name('current.student');
    Route::get('/current_student_add', [AddCurrentStudent::class, 'index'])->name('current.student.add');
    Route::post('/current_student_add', [AddCurrentStudent::class, 'store'])->name('current.student.add.submit');
    Route::get('/current_student_view{id}', [AddCurrentStudent::class, 'show'])->name('current.student.view');
    Route::get('/current_student_edit{id}', [AddCurrentStudent::class, 'edit'])->name('current.student.edit');
    Route::put('/current_student_edit{id}', [AddCurrentStudent::class, 'update'])->name('current.student.edit.update');
    Route::post('/current_student_delete', [AddCurrentStudent::class, 'destroy'])->name('current.student.delete');

    Route::get('/archive_student', [ArchiveStudentList::class, 'index'])->name('archive.student');
    Route::get('/archive_students_add', [AddArchiveStudent::class, 'index'])->name('archive.students.add');
    Route::post('/archive_students_add', [AddArchiveStudent::class, 'store'])->name('archive.students.add.submit');
    Route::get('/archive_student_view{id}', [AddArchiveStudent::class, 'show'])->name('archive.student.view');
    Route::get('/archive_student_edit{id}', [AddArchiveStudent::class, 'edit'])->name('archive.student.edit');
    Route::put('/archive_student_edit{id}', [AddArchiveStudent::class, 'update'])->name('archive.student.edit.update');
    Route::get('/archive_student_search', [ArchiveStudentSearch::class, 'index'])->name('archivesearch.student');

    Route::post('/archive_student_delete', [AddArchiveStudent::class, 'destroy'])->name('archive.student.delete');

    Route::get('/student_view{id}', [StudentView::class, 'show'])->name('student.view');
    Route::get('/student_edit{id}', [StudentEdit::class, 'edit'])->name('student.edit');
    Route::put('/student_edit{id}', [StudentEdit::class, 'update'])->name('student.edit.update');
    Route::post('/student_delete', [StudentEdit::class, 'destroy'])->name('student.delete');

    Route::get('/student_switch', [StudentModuleController::class, 'studentSwitchProcess'])->name('switch.student');
    Route::get('/student_migration', [StudentMigration::class, 'index'])->name('migration.student');
    Route::post('/student_migration', [StudentMigration::class, 'update'])->name('migration.student.update');
    Route::get('/print_student_id', [PrintStudentID::class, 'index'])->name('printid.student');
    Route::post('/print_student_id', [PrintStudentID::class, 'Search'])->name('printid.student.search');
    Route::get('/student_biometric_export', [BiometricExport::class, 'index'])->name('biometricexport.student');
    Route::get('/testomonial', [Testimonial::class, 'index'])->name('testimonial');
    Route::post('/testomonial', [Testimonial::class, 'Search'])->name('testimonial.search');

    Route::get('/process_student_view{id}', [HomeController::class, 'show'])->name('process.student.view');
    Route::get('/process_student_edit{id}', [HomeController::class, 'edit'])->name('process.student.edit');
    Route::put('/process_student_edit{id}', [HomeController::class, 'update'])->name('process.student.edit.update');
    /* ---- Student Module End----  */

    /* ---- Result Reports Start---- */
    Route::get('/student_merit_list', [StudentMeritList::class, 'index'])->name('student.merit.list');
    Route::get('/student_report_card', [StudentReportCard::class, 'index'])->name('student.report.card');
    Route::get('/student_wise_transcript', [StudentWiseTranscipt::class, 'index'])->name('student.wise.transcript');
    /* ---- Result Reports End ---- */

    /* ---- Result Module Start ---- */
    Route::get('/add_grade', [AddExamGrade::class, 'index'])->name('add.grade');
    Route::post('/add_grade', [AddExamGrade::class, 'store'])->name('add.grade.submit');
    Route::get('/exam_grade', [ExamGrade::class, 'index'])->name('exam.grade');
    Route::get('/edit_grade', [EditExamGrade::class, 'index',])->name('edit.grade');
    Route::get('/view_grade', [ViewExamGrade::class, 'index',])->name('view.grade');
    Route::get('/view_grade{id}', [ViewExamGrade::class, 'show'])->name('view.grade.show');

    Route::get('/marks_entry_blank', [MarksEntryBlank::class, 'index'])->name('marks.entry.blank');
    Route::post('/marks_entry_blank', [MarksEntryBlank::class, 'store'])->name('marks.entry.blank.submit');

    Route::get('/marks_entry_exam', [MarksEntryExam::class, 'index'])->name('marks.entry.exam');
    Route::post('/marks_entry_exam', [MarksEntryExam::class, 'store'])->name('marks.entry.exam.submit');

    Route::get('/marks_entry_subject', [MarksEntrySubject::class, 'index'])->name('marks.entry.subject');
    Route::post('/marks_entry_subject', [MarksEntrySubject::class, 'store'])->name('marks.entry.subject.submit');
    /* ---- Result Module End ---- */


    /* Account Voucher Module Start */
    Route::get('recive_boucher', [BoucherController::class, 'createReciveBoucher'])->name('recive_boucher');
    Route::post('store_recive_boucher', [BoucherController::class, 'storeReciveBoucher'])->name('store_recive_boucher');

    Route::get('payment_boucher', [BoucherController::class, 'createPaymentBoucher'])->name('payment_boucher');
    Route::post('store_payment_boucher', [BoucherController::class, 'storePaymentBoucher'])->name('store_payment_boucher');
    /* Account Voucher Module End */


    /* ---- Student Accounts Module Start----  */
    Route::get('/admission-fee', [StudentAccountsController::class, 'admissionFee'])->name('admission.fee');
    Route::post('/add-admission-fee', [StudentAccountsController::class, 'addAdmissionFee'])->name('add.admission.fee');
    Route::get('/cancel-admission-fee', [StudentAccountsController::class, 'cancelAdmissionFee'])->name('cancel.admission.fee');
    Route::get('/admission-monthly-fee', [StudentAccountsController::class, 'monthlyFee'])->name('admission.monthly.fee');
    Route::post('/add-monthly-fee', [StudentAccountsController::class, 'addMonthlyFee'])->name('add.monthly.fee');
    Route::get('/cancel-monthly-fee', [StudentAccountsController::class, 'cancelmonthlyFee'])->name('cancel.monthly.fee');
    Route::get('/cancel-student-fee', [StudentAccountsController::class, 'cancelStudentFee'])->name('cancel.student.fee');
    Route::get('/student-fee', [StudentAccountsController::class, 'studentFee'])->name('student.fee');
    Route::post('/student-fee-store', [StudentAccountsController::class, 'studentFeeStore'])->name('student.fee.store');
    Route::get('/cancel-student-wavier', [StudentAccountsController::class, 'studentWavierCancel'])->name('student.wavier.cancel');
    Route::get('/student-wavier', [StudentAccountsController::class, 'studentWavier'])->name('student.wavier');
    Route::post('/student-wavier-store', [StudentAccountsController::class, 'studentWavierStore'])->name('student.wavier.store');
    Route::get('/quick-collection', [StudentAccountsController::class, 'quickCollection'])->name('quick.collection');
    Route::post(
        '/quick-collection-search',
        [StudentAccountsController::class, 'quickCollectionSearch']
    )->name('quick.collection.search');
    Route::get('/add-fees', [StudentAccountsController::class, 'addFees'])->name('add.fees');
    Route::get('/view-all-detail', [StudentAccountsController::class, 'detail'])->name('view.all.detail');
    Route::post('/view-search-detail', [StudentAccountsController::class, 'detailSearch'])->name('view.search.detail');
    Route::post('/add-fees-store', [StudentAccountsController::class, 'addFeesStore'])->name('add.fees.store');
    Route::get('/fees-recollection', [StudentAccountsController::class, 'feesRecollection'])->name('fees.recollection');
    Route::post('/fees-recollection-search', [StudentAccountsController::class, 'search'])->name('fees.recollection.search');
    Route::get('/fees-recollection-edit{folio_no}', [StudentAccountsController::class, 'feesRecollectionEdit'])->name('fees.recollection.edit');
    Route::get('/print-invoice', [StudentAccountsController::class, 'printInvoice'])->name('print.invoice');
    Route::post('/invoice-search', [StudentAccountsController::class, 'invoiceSearch'])->name('invoice.search');
    Route::get('/print-invoice-file{id}', [StudentAccountsController::class, 'printInvoiceFile'])->name('print.invoice.file');
    Route::get(
        '/quick-collection-details',
        [StudentAccountsController::class, 'quickCollectionDetails']
    )->name('quick.collection.details');

    /* ---- Student Accounts Module End----  */


    /* ---- Employee Attendence Module Start----  */
    Route::get('/employe-today-attendence', [EmployeAttendenceController::class, 'todayAttendence'])->name('employe.today.attendence');
    Route::get('/employe-manual-attendence-search', [EmployeAttendenceController::class, 'manulAttendence'])->name('employe.manual.attendence');
    Route::post('/employe-manual-attendence-search', [EmployeAttendenceController::class, 'manulAttendenceSearch'])->name('employe.manual.search');
    Route::get('/employe-attendence-details-search', [EmployeAttendenceController::class, 'attendenceDetails'])->name('employe.attendence.details');
    Route::post('/employe-attendence-details-search', [EmployeAttendenceController::class, 'attendenceDetailsSearch'])->name('employe.attendence.details.search');
    Route::get('/employee-daily-attendence-search', [EmployeAttendenceController::class, 'dailyAttendenceSummary'])->name('employee.daily.attendence.summary');
    Route::post('/employee-daily-attendence-search', [EmployeAttendenceController::class, 'dailyAttendenceSearch'])->name('employee.daily.attendence.search');
    Route::get('/employee-monthly-attendence-search', [EmployeAttendenceController::class, 'monthlyAttendenceSummary'])->name('employee.monthly.attendence.summary');
    Route::post('/employee-monthly-attendence-search', [EmployeAttendenceController::class, 'monthlyAttendenceSearch'])->name('employee.monthly.attendence.search');
    Route::get('/employee-monthly-attendence-download', [EmployeAttendenceController::class, 'monthlyAttendenceDownload'])->name('employee.monthly.attendence.download');
    Route::get('/employee-daily-attendence-download', [EmployeAttendenceController::class, 'dailyAttendenceDownload'])->name('employee.daily.attendence.download');
    Route::get('/employee-details-attendence-download', [EmployeAttendenceController::class, 'detailsAttendenceDownload'])->name('employee.details.attendence.download');
    /* ---- Employee Attendence Module End----  */
    /*Exam Admite Card Start*/
    Route::get('/exam-admit-card-search', [ExamAdmiteCadController::class, 'index'])->name('exam.admit.card');
    Route::post('/exam-admit-card-search', [ExamAdmiteCadController::class, 'admitCardSearch'])->name('exam.admit.card.search');
/*Exam Admite Card End*/


    /* ---- Student Attendence Module Start----  */
    Route::get('/student-attendence', [StudentAttendenceController::class, 'index'])->name('student.attendence');
    Route::get('/todays-attendence', [StudentAttendenceController::class, 'todaysAttendence'])->name('todays.attendence');
    Route::get('/manual-attendence-search', [StudentAttendenceController::class, 'manualAttendence'])->name('manual.attendence');
    Route::get('/student-absent', [StudentAttendenceController::class, 'studentAbsent'])->name('student.absent');
    Route::get('/send-sms-proses', [StudentAttendenceController::class, 'sendSmsProses'])->name('send.sms.proses');
    Route::get('/details-attendence-search', [StudentAttendenceController::class, 'detailsAttendence'])->name('details.attendence');
    Route::get('/daily-attendence-search', [StudentAttendenceController::class, 'dailyAttendence'])->name('daily.attendence');
    Route::get('/montly-attendence-search', [StudentAttendenceController::class, 'montlyAttendence'])->name('montly.attendence');
    Route::post('/manual-attendence-search', [StudentAttendenceController::class, 'search'])->name('manual.attendence.search');
    Route::post('/montly-attendence-search', [StudentAttendenceController::class, 'montlySearch'])->name('montly.attendence.search');
    Route::post('/daily-attendence-search', [StudentAttendenceController::class, 'dailySearch'])->name('daily.attendence.search');
    Route::post('/details-attendence-search', [StudentAttendenceController::class, 'detailsSearch'])->name('details.attendence.search');
    Route::post('/manual-attendence-status', [StudentAttendenceController::class, 'status'])->name('manual.attendence.status');
    Route::get('/manual-attendence-status-all', [StudentAttendenceController::class, 'statusAll'])->name('manual.attendence.status.all');
    Route::get('/details-daily-attendence', [StudentAttendenceController::class, 'detailsDaily'])->name('details.daily.attendence');
    Route::get('/student-daily-attendence-download', [StudentAttendenceController::class, 'dailyAttendenceDownload'])->name('student.daily.attendence.download');
    Route::get('/student-monthly-attendence-download', [StudentAttendenceController::class, 'monthlyAttendenceDownload'])->name('student.monthly.attendence.download');
/* ---- Student Attendence Module End----  */


    /* ---- Routine Module Start----  */
    Route::get('/general-routine', [GeneralRoutineController::class, 'generalRoutine'])->name('general.routine');
    Route::post('/general-routine', [GeneralRoutineController::class, 'generalRoutineSubmit'])->name('general.routine.submit');
    Route::get('/dynamic-routine', [DynamicRoutineController::class, 'dynamicRoutine'])->name('dynamic.routine');
    Route::post('/dynamic-routine', [DynamicRoutineController::class, 'dynamicRoutineSubmit'])->name('dynamic.routine.submit');
    Route::get('/print-routine', [PrintRoutineController::class, 'printRoutine'])->name('print.routine');
    Route::post('/print-routine', [PrintRoutineController::class, 'printRoutineSubmit'])->name('print.routine.submit');
    /* ---- Routine Module End----  */


    /* ---- Finance Module Start----  */
    Route::get('/account-head', [AccountHeadController::class, 'accountHead'])->name('account.head');
    Route::post('/account-head-search', [AccountHeadController::class, 'accountHeadSearch'])->name('account.head.search');
    Route::get('/account-head-add', [AddAccountHeadController::class, 'addAccount'])->name('account.head.add');
    Route::post('/account-head-add', [AddAccountHeadController::class, 'addAccountSubmit'])->name('account.head.add.submit');
    Route::get('/account-head-view', [ViewAccountHeadController::class, 'viewAccount'])->name('account.head.view');
    Route::get('/account-head-edit', [EditAccountHeadController::class, 'editAccount'])->name('account.head.edit');
    Route::post('/account-head-edit', [EditAccountHeadController::class, 'editAccountSubmit'])->name('account.head.edit.submit');
    Route::post('/account-head-delete', [AccountHeadController::class, 'accountHeadDelete'])->name('accound.head.delete');
    /* ---- Finance Module Start----  */


    /* ---- Promotional Module Start----  */
    /* create group */
    Route::view('/my-groups', 'admin.PromotionalModule.groups')->name('my.groups');
    Route::post('/my-groups', [PromotionalContactsController::class, 'createGroup'])->name('create.group');
    Route::get('/my-contacts', [PromotionalContactsController::class, 'getGroupList'])->name('my.contacts');
    Route::post('/my-contacts', [PromotionalContactsController::class, 'createContact'])->name('create.contact');
    /* import contacts */
    Route::get('/import-contacts', [PromotionalContactsController::class, 'importGroups'])->name('import.contact');
    Route::post('/import-contacts-submit', [PromotionalContactsController::class, 'importContacts']);
    /* custom sms */
    Route::get('/custom-sms', [PromotionalSMSController::class, 'getInfo'])->name('custom.sms');
    Route::post('/custom-sms-student', [PromotionalSMSController::class, 'sendSMS_Student'])->name('send.sms.student');
    Route::post('/custom-sms-employee', [PromotionalSMSController::class, 'sendSMS_Employee'])->name('send.sms.employee');
    Route::post('/send-group-sms', [PromotionalSMSController::class, 'sendSMS_Group'])->name('send.group.sms');
    Route::post('/custom-sms-send', [PromotionalSMSController::class, 'sendSMS_Custom'])->name('send.sms.custom');

    Route::post('/send-sms', [smsProxyController::class, 'sendSms'])->name('sendSMS');
    /* sms details */
    Route::get('/sms-details', [PromotionalSMSController::class, 'smsDetails'])->name('sms.details');
    Route::post('/sms-details-report', [PromotionalSMSController::class, 'getDetailsReport'])->name('sms.details.report');
    /* ---- Promotional Module End----  */


    /* -----Leave Module------ */
    Route::get('/leave_entry', [LeaveController::class, 'leave_entry'])->name('leave.entry');
    Route::get('/leave_type', [LeaveController::class, 'leave_type'])->name('leave.type');
    Route::get('/add_leave_type', [LeaveController::class, 'add_leave_type'])->name('add.leave.type');
    Route::get('/view_leave_type{leave_type_id}', [LeaveController::class, 'view_leave_type'])->name('view.leave.type');
    Route::get('/view_manage_leave{manage_leave_id}', [LeaveController::class, 'view_manage_leave'])->name('view.manage.leave');
    Route::get('/edit_leave_type{leave_type_id}', [LeaveController::class, 'edit_leave_type'])->name('edit.leave.type');
    Route::get('/edit_manage_leave{manage_leave_id}', [LeaveController::class, 'edit_manage_leave'])->name('edit.manage.leave');
    Route::post('/update_leave_type', [LeaveController::class, 'update_leave_type'])->name('update.leave.type');
    Route::post('/update_manage_leave', [LeaveController::class, 'update_manage_leave'])->name('update.manage.leave');
    Route::post('/leave_type_store', [LeaveController::class, 'leave_type_store'])->name('leave.type.store');
    Route::post('/leave_store', [LeaveController::class, 'leave_store'])->name('leave.store');
    Route::get('/leave_type_delete{leave_type_id}', [LeaveController::class, 'leave_type_delete'])->name('leave.type.delete');
    Route::get('/manage_leave_delete{manage_leave_id}', [LeaveController::class, 'manage_leave_delete'])->name('manage.leave.delete');
    Route::get('/manage_leave', [LeaveController::class, 'manage_leave'])->name('manage.leave');
    /* -----Leave Module End------ */


    /* -----Learning Module Start------*/
    Route::get('/manage_live_classes', [LearningController::class, 'manage_live_classes'])->name('manage.live.classes');
    Route::get('/manage_home_work', [LearningController::class, 'manage_home_work'])->name('manage.home.work');
    Route::get('/manage_hw_submit', [LearningController::class, 'manage_hw_submit'])->name('manage.hw.submit');
    Route::get('/download_hw_submit{file}', [LearningController::class, 'download_hw_submit'])->name('download.hw.submit');
    Route::get('/hw_submit', [LearningController::class, 'hw_submit'])->name('hw.submit');
    Route::post('/hw__submit_post', [LearningController::class, 'hw_submit_post'])->name('hw.submit.post');
    Route::get('/manage_class_work', [LearningController::class, 'manage_class_work'])->name('manage.class.work');
    Route::get('/manage_leason_plan', [LearningController::class, 'manage_leason_plan'])->name('manage.leason.plan');
    Route::get('/manage_academic_syllabus', [LearningController::class, 'manage_academic_syllabus'])->name('manage.academic.syllabus');
    Route::get('/view_live_classes{live_class_id}', [LearningController::class, 'view_live_classes'])->name('view.live.classes');
    Route::get('/view_academic_syllabus{academic_syllabus_id}', [LearningController::class, 'view_academic_syllabus'])->name('view.academic.syllabus');
    Route::get('/download_academic_syllabus{file}', [LearningController::class, 'download_academic_syllabus'])->name('download.academic.syllabus');
    Route::get('/edit_live_classes{live_class_id}', [LearningController::class, 'edit_live_classes'])->name('edit.live.classes');
    Route::get('/edit_academic_syllabus{academic_syllabus_id}', [LearningController::class, 'edit_academic_syllabus'])->name('edit.academic.syllabus');
    Route::get('/add_live_classes', [LearningController::class, 'add_live_classes'])->name('add.live.classes');
    Route::post('/live_class_post', [LearningController::class, 'live_class_post'])->name('live.class.post');
    Route::post('/update_live_class', [LearningController::class, 'update_live_class'])->name('update.live.class');
    Route::get('/add_home_work', [LearningController::class, 'add_home_work'])->name('add.home.work');
    Route::post('/home_work_post', [LearningController::class, 'home_work_post'])->name('home.work.post');
    Route::get('/add_class_work', [LearningController::class, 'add_class_work'])->name('add.class.work');
    Route::post('/class_work_post', [LearningController::class, 'class_work_post'])->name('class.work.post');
    Route::get('/add_leason_plan', [LearningController::class, 'add_leason_plan'])->name('add.leason.plan');
    Route::post('/leason_plan_post', [LearningController::class, 'leason_plan_post'])->name('leason.plan.post');
    Route::get('/add_academic_syllabus', [LearningController::class, 'add_academic_syllabus'])->name('add.academic.syllabus');
    Route::post('/academic_syllabus_post', [LearningController::class, 'academic_syllabus_post'])->name('academic.syllabus.post');
    Route::post('/update_academic_syllabus', [LearningController::class, 'update_academic_syllabus'])->name('update.academic.syllabus');
    Route::get('/home_work_delete{home_work_id}', [LearningController::class, 'home_work_delete'])->name('home.work.delete');
    Route::get('/class_work_delete{class_work_id}', [LearningController::class, 'class_work_delete'])->name('class.work.delete');
    Route::get('/leason_plan_delete{leason_plan_id}', [LearningController::class, 'leason_plan_delete'])->name('leason.plan.delete');
    Route::get('/academic_syllabus_delete{academic_syllabus_id}', [LearningController::class, 'academic_syllabus_delete'])->name('academic.syllabus.delete');
    Route::get('/live_class_delete{live_class_id}', [LearningController::class, 'live_class_delete'])->name('live.class.delete');
    Route::get('/hw_submit_delete{hw_submit_id}', [LearningController::class, 'hw_submit_delete'])->name('hw.submit.delete');
    /* -----Learning Module End------*/
});


/* Website Module Start */
//    slide Show
Route::get('add_slide', [SlideController::class, 'create'])->name('add_slide');
Route::post('store_slide', [SlideController::class, 'store'])->name('store_slide');
Route::get('manage_slide', [SlideController::class, 'index'])->name('manage_slide');
Route::get('edit_slide/{id}', [SlideController::class, 'edit'])->name('edit_slide');
Route::get('view_slide/{id}', [SlideController::class, 'show'])->name('view_slide');
Route::post('update_slide/{id}', [SlideController::class, 'update'])->name('update_slide');
Route::get('delete_slide/{id}', [SlideController::class, 'destroy'])->name('delete_slide');

//    Message
Route::get('add_message', [MessageController::class, 'create'])->name('add_message');
Route::post('store_message', [MessageController::class, 'store'])->name('store_message');
Route::get('manage_message', [MessageController::class, 'index'])->name('manage_message');
Route::get('edit_message/{id}', [MessageController::class, 'edit'])->name('edit_message');
Route::get('view_message/{id}', [MessageController::class, 'show'])->name('view_message');
Route::post('update_message/{id}', [MessageController::class, 'update'])->name('update_message');
Route::get('delete_message/{id}', [MessageController::class, 'destroy'])->name('delete_message');

//    Album
Route::get('add_album', [AlbumController::class, 'create'])->name('add_album');
Route::post('submit_album', [AlbumController::class, 'store'])->name('submit_album');
Route::get('manage_album', [AlbumController::class, 'index'])->name('manage_album');
Route::get('edit_album/{id}', [AlbumController::class, 'edit'])->name('edit_album');
Route::get('view_album/{id}', [AlbumController::class, 'show'])->name('view_album');
Route::post('update_album/{id}', [AlbumController::class, 'update'])->name('update_album');
Route::get('delete_album/{id}', [AlbumController::class, 'destroy'])->name('delete_album');

//    Board Result
Route::get('add_board_result', [BoardResultController::class, 'create'])->name('add_board_result');
Route::post('submit_board_result', [BoardResultController::class, 'store'])->name('submit_board_result');
Route::get('manage_board_result', [BoardResultController::class, 'index'])->name('manage_board_result');
Route::get('edit_board_result/{id}', [BoardResultController::class, 'edit'])->name('edit_board_result');
Route::get('view_board_result/{id}', [BoardResultController::class, 'show'])->name('view_board_result');
Route::post('update_board_result/{id}', [BoardResultController::class, 'update'])->name('update_board_result');
Route::get('delete_board_result/{id}', [BoardResultController::class, 'destroy'])->name('delete_board_result');

//    Breaking News
Route::get('add_breaking_news', [BreakingNewsController::class, 'create'])->name('add_breaking_news');
Route::post('store_breaking_news', [BreakingNewsController::class, 'store'])->name('store_breaking_news');
Route::get('manage_breaking_news', [BreakingNewsController::class, 'index'])->name('manage_breaking_news');
Route::get('edit_breaking_news/{id}', [BreakingNewsController::class, 'edit'])->name('edit_breaking_news');
Route::get('view_breaking_news/{id}', [BreakingNewsController::class, 'show'])->name('view_breaking_news');
Route::post('update_breaking_news/{id}', [BreakingNewsController::class, 'update'])->name('update_breaking_news');
Route::get('delete_breaking_news/{id}', [BreakingNewsController::class, 'destroy'])->name('delete_breaking_news');

//    Career
Route::get('add_career', [CareerController::class, 'create'])->name('add_career');
Route::post('store_career', [CareerController::class, 'store'])->name('store_career');
Route::get('manage_career', [CareerController::class, 'index'])->name('manage_career');
Route::get('edit_career/{id}', [CareerController::class, 'edit'])->name('edit_career');
Route::get('view_career/{id}', [CareerController::class, 'show'])->name('view_career');
Route::post('update_career/{id}', [CareerController::class, 'update'])->name('update_career');
Route::get('delete_career/{id}', [CareerController::class, 'destroy'])->name('delete_career');

//    Content
Route::get('add_content', [ContentController::class, 'create'])->name('add_content');
Route::post('store_content', [ContentController::class, 'store'])->name('store_content');
Route::get('manage_content', [ContentController::class, 'index'])->name('manage_content');
Route::get('edit_content/{id}', [ContentController::class, 'edit'])->name('edit_content');
Route::get('view_content/{id}', [ContentController::class, 'show'])->name('view_content');
Route::post('update_content/{id}', [ContentController::class, 'update'])->name('update_content');
Route::get('delete_content/{id}', [ContentController::class, 'destroy'])->name('delete_content');

//    Event
Route::get('add_event', [EventController::class, 'create'])->name('add_event');
Route::post('store_event', [EventController::class, 'store'])->name('store_event');
Route::get('manage_event', [EventController::class, 'index'])->name('manage_event');
Route::get('edit_event/{id}', [EventController::class, 'edit'])->name('edit_event');
Route::get('view_event/{id}', [EventController::class, 'show'])->name('view_event');
Route::post('update_event/{id}', [EventController::class, 'update'])->name('update_event');
Route::get('delete_event/{id}', [EventController::class, 'destroy'])->name('delete_event');

//    Gallery
Route::get('add_gallery', [GalleryController::class, 'create'])->name('add_gallery');
Route::post('store_gallery', [GalleryController::class, 'store'])->name('store_gallery');
Route::get('manage_gallery', [GalleryController::class, 'index'])->name('manage_gallery');
Route::get('edit_gallery/{id}', [GalleryController::class, 'edit'])->name('edit_gallery');
Route::get('view_gallery/{id}', [GalleryController::class, 'show'])->name('view_gallery');
Route::post('update_gallery/{id}', [GalleryController::class, 'update'])->name('update_gallery');
Route::get('delete_gallery/{id}', [GalleryController::class, 'destroy'])->name('delete_gallery');

//    Link
Route::get('add_link', [LinkController::class, 'create'])->name('add_link');
Route::post('store_link', [LinkController::class, 'store'])->name('store_link');
Route::get('manage_link', [LinkController::class, 'index'])->name('manage_link');
//Route::get('edit_message',[LinkController::class,'edit_slide'])->name('edit_message');
//Route::get('view_message',[LinkController::class,'view_slide'])->name('view_message');
//Route::post('update_social_media',[LinkController::class,'update'])->name('update_social_media');
Route::get('edit_link/{id}', [LinkController::class, 'edit'])->name('edit_link');
Route::get('view_link/{id}', [LinkController::class, 'show'])->name('view_link');
Route::post('update_link/{id}', [LinkController::class, 'update'])->name('update_link');
Route::get('delete_link/{id}', [LinkController::class, 'destroy'])->name('delete_link');

//    Menu
Route::get('add_menu', [MenuController::class, 'create'])->name('add_menu');
Route::post('store_menu', [MenuController::class, 'store'])->name('store_menu');
Route::get('manage_menu', [MenuController::class, 'index'])->name('manage_menu');
Route::get('edit_menu/{id}', [MenuController::class, 'edit'])->name('edit_menu');
Route::get('view_menu/{id}', [MenuController::class, 'show'])->name('view_menu');
Route::post('update_menu/{id}', [MenuController::class, 'update'])->name('update_menu');
Route::get('delete_menu/{id}', [MenuController::class, 'destroy'])->name('delete_menu');

//    Sub Menu
Route::get('add_submenu', [SubMenuController::class, 'create'])->name('add_submenu');
Route::post('store_submenu', [SubMenuController::class, 'store'])->name('store_submenu');
Route::get('manage_submenu', [SubMenuController::class, 'index'])->name('manage_submenu');
Route::get('edit_submenu/{id}', [SubMenuController::class, 'edit'])->name('edit_submenu');
Route::get('view_submenu/{id}', [SubMenuController::class, 'show'])->name('view_submenu');
Route::post('update_submenu/{id}', [SubMenuController::class, 'update'])->name('update_submenu');
Route::get('delete_submenu/{id}', [SubMenuController::class, 'destroy'])->name('delete_submenu');

//    News
Route::get('add_news', [NewsController::class, 'create'])->name('add_news');
Route::post('store_news', [NewsController::class, 'store'])->name('store_news');
Route::get('manage_news', [NewsController::class, 'index'])->name('manage_news');
Route::get('edit_news/{id}', [NewsController::class, 'edit'])->name('edit_news');
Route::get('view_news/{id}', [NewsController::class, 'show'])->name('view_news');
Route::post('update_news/{id}', [NewsController::class, 'update'])->name('update_news');
Route::get('delete_news/{id}', [NewsController::class, 'destroy'])->name('delete_news');

//    Notice
Route::get('add_notice', [NoticeController::class, 'create'])->name('add_notice');
Route::post('store_notice', [NoticeController::class, 'store'])->name('store_notice');
Route::get('manage_notice', [NoticeController::class, 'index'])->name('manage_notice');
Route::get('edit_notice/{id}', [NoticeController::class, 'edit'])->name('edit_notice');
Route::get('view_notice/{id}', [NoticeController::class, 'show'])->name('view_notice');
Route::post('update_notice/{id}', [NoticeController::class, 'update'])->name('update_notice');
Route::get('delete_notice/{id}', [NoticeController::class, 'destroy'])->name('delete_notice');

//    Social Media
Route::get('add_social_media', [SocialMediaController::class, 'create'])->name('add_social_media');
Route::post('store_social_media', [SocialMediaController::class, 'store'])->name('store_social_media');
Route::post('update_social_media', [SocialMediaController::class, 'update'])->name('update_social_media');
Route::get('manage_social_media', [SocialMediaController::class, 'index'])->name('manage_social_media');
Route::get('edit_social_media/{id}', [SocialMediaController::class, 'edit_social_media'])->name('edit_social_media');
Route::get('update_social_media/{id}', [SocialMediaController::class, 'update'])->name('update_social_media');
Route::get('show_social_media/{id}', [SocialMediaController::class, 'show'])->name('show_social_media');
Route::get('delete_social_media/{id}', [SocialMediaController::class, 'destroy'])->name('delete_social_media');
/* Website Module End */
