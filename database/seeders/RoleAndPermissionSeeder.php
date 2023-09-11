<?php

namespace Database\Seeders;

use App\Models\User;
use CreatePermissionTables;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating permissions
        $permissions = [
            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard'
                ]
            ],
            [
                'group_name' => 'global_settings_module',
                'permissions' => [
                    'institute',
                    'branch',
                    'sms_setting',
                    'academic_holiday'
                ]
            ],
            [
                'group_name' => 'academic_module',
                'permissions' => [
                    'all_session',
                    'all_medium',
                    'all_shift',
                    'all_class',
                    'all_section',
                    'all_group',
                    'all_subject',
                    'academic_calender'
                ]
            ],
            [
                'group_name' => 'student_module',
                'permissions' => [
                    'student_admission',
                    'print_admission_form',
                    'current_student_list',
                    'archive_student_list',
                    'current_student_search',
                    'archive_student_search',
                    'student_switch_process',
                    'student_migration_process',
                    'print_student_id_card',
                    'student_biometric_export',
                    'print_student_testimonial',
                ]
            ],
            [
                'group_name' => 'routine_module',
                'permissions' => [
                    'general_routine',
                    'dynamic_routine',
                    'view_routine'
                ]
            ],
            [
                'group_name' => 'student_attendence_module',
                'permissions' => [
                    'todays_attendence_student',
                    'manual_attendence_student',
                    'absent_student_list_student',
                    'daily_attendence_summery_student',
                    'monthly_attendence_summery_student',
                ]
            ],
            [
                'group_name' => 'employee_attendence_module',
                'permissions' => [
                    'todays_attendence_employee',
                    'manual_attendence_employee',
                    'attendence_details_employee',
                    'daily_attendence_summery_employee',
                    'monthly_attendence_summery_employee',
                ]
            ],
            [
                'group_name' => 'hr_module',
                'permissions' => [
                    'employee_type',
                    'employee_category',
                    'all_designation',
                    'working_shift',
                    'add_employee',
                    'all_employee_list',
                    'employee_search',
                    'employee_id_card',
                    'employee_export',
                ]
            ],
            [
                'group_name' => 'leave_module',
                'permissions' => [
                    'leave_types',
                    'leave_entry',
                    'manage_leaves',
                ]
            ],
            [
                'group_name' => 'payroll_module',
                'permissions' => [
                    'payroll_head',
                    'employee_payscale',
                    'employee_salary_chart',
                    'generate_salary_chart',
                    'employee_salary_payment',
                    'employee_salary_report',
                    'employee_payslip_print',
                ]
            ],
            [
                'group_name' => 'exam_setting_module',
                'permissions' => [
                    'grade_points_exam',
                    'exam_terms',
                    'exam_part',
                    'assign_exam',
                    'exam_routine',
                    'exam_eligibilities',
                    'exam_seat_plan',
                    'exam_admit_card',
                    'exam_attendence_blank',
                    'exam_attendence_subject',
                    'exam_attendence_exam',
                    'manage_working_days',
                ]
            ],
            [
                'group_name' => 'result_module',
                'permissions' => [
                    'grade_points_result',
                    'marks_blank_sheet',
                    'marks_entry_subject',
                    'marks_entry_exam',
                ]
            ],
            [
                'group_name' => 'result_reports_module',
                'permissions' => [
                    'students_merit_list',
                    'students_report_card',
                    'students_wise_transcript',
                ]
            ],
            [
                'group_name' => 'finance_module',
                'permissions' => [
                    'account_head',
                    'add_account_head',
                ]
            ],
            [
                'group_name' => 'student_accounts_module',
                'permissions' => [
                    'admission_fee',
                    'monthly_fee',
                    'student_fee',
                    'student_waiver',
                    'fee_collection',
                    'fee_recollection',
                    'print_collection_invoice',
                ]
            ],
            [
                'group_name' => 'accounts_voucher_module',
                'permissions' => [
                    'receive_voucher',
                    'payment_voucher',
                ]
            ],
            [
                'group_name' => 'finance_reports_module',
                'permissions' => [
                    'daily_collection',
                    'fees_collection',
                    'student_dues',
                    'student_ledger',
                    'student_weiver',
                    'accounts_ledger',
                    'trial_balance',
                    'cash_book',
                    'bank_book',
                    'balance_sheet',
                    'payable_or_receivable'
                ]
            ],
            [
                'group_name' => 'learning_module',
                'permissions' => [
                    'live_class',
                    'home_work_list',
                    'hw_submit',
                    'submitted_hw_list',
                    'leason_plan_list',
                    'academic_syllabus',
                ]
            ],
            [
                'group_name' => 'website_module',
                'permissions' => [
                    'slideshow_list',
                    'message_corner',
                    'all_menu_list',
                    'all_content_list',
                    'breaking_news',
                    'all_album_list',
                    'all_gallery_list',
                    'all_news_list',
                    'all_events_list',
                    'all_notice_list',
                    'all_career_list',
                    'board_result_list',
                    'usefull_link_list',
                    'social_media_list'
                ]
            ],
            [
                'group_name' => 'user_management_module',
                'permissions' => [
                    'all_user_list',
                    'manage_user_role',
                    'sms_user_student',
                    'sms_user_employee',
                ]
            ],
            [
                'group_name' => 'promotional_module',
                'permissions' => [
                    'my_groups',
                    'my_contacts',
                    'import_contacts',
                    'send_custom_sms',
                    'send_details_report',
                ]
            ]
        ];

        // Check if the 'super_admin' role already exists
        $superAdminRole = Role::where('name', 'super_admin')->first();

        // If 'super_admin' role doesn't exist, create it
        if (!$superAdminRole) {
            $superAdminRole = Role::create(['name' => 'super_admin']);
        }

        $allPermissions = [];

        // Iterate through permission groups
        for ($i = 0; $i < count($permissions); $i++) {
            $permission_group = $permissions[$i]['group_name'];

            // Iterate through permissions within the group
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                $permission = Permission::create([
                    'name' => $permissions[$i]['permissions'][$j],
                    'group_name' => $permission_group
                ]);

                $allPermissions[] = $permission;
            }
        }

        // Sync all accumulated permissions to super admin role
        $superAdminRole->syncPermissions($allPermissions);

        // Assign super_admin role to super_admin user
        $superAdminRole = Role::findById(1);
        $user = User::find(1);
        $user->assignRole($superAdminRole);
    }
}
