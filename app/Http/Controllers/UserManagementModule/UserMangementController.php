<?php

namespace App\Http\Controllers\UserManagementModule;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserMangementController extends Controller
{
    /* user list page */
    public function allUserList()
    {
        $getUserDetails = DB::select('SELECT * FROM users');
        $usersArray = json_decode(json_encode($getUserDetails), true);

        $getBranchDetails = DB::select('SELECT * FROM branch_details');
        $branchArray = json_decode(json_encode($getBranchDetails), true);

        $getRolesList = DB::select('SELECT * FROM roles');
        $rolesArray = json_decode(json_encode($getRolesList), true);

        return view('admin.UserManagementModule.all_user_list', [
            'usersList' => $usersArray,
            'branchList' => $branchArray,
            'rolesList' => $rolesArray
        ]);
    }

    /* add new user */
    public function addUser()
    {
        $getBranchDetails = DB::select('SELECT * FROM branch_details');
        $branchArray = json_decode(json_encode($getBranchDetails), true);

        $getRolesList = DB::select('SELECT * FROM roles');
        $rolesArray = json_decode(json_encode($getRolesList), true);

        return view('admin.UserManagementModule.add_user', [
            'branchDetails' => $branchArray,
            'rolesList' => $rolesArray
        ]);
    }

    /* add user to database */
    public function addUserSubmit(Request $request)
    {
        $branch_id = $request->branch_id;
        $user_type = $request->user_type;
        $user_name = $request->name;
        $password = $request->password;
        $confirm_password = $request->confirm_password;
        $email = $request->email;
        $phoneNumber = $request->phoneNumber;

        if ($password === $confirm_password) {
            $password = Hash::make($password);

            $query = "SELECT COUNT(*) as count FROM users WHERE email = ?";
            $result = DB::select($query, [$email]);

            $rowExists = $result[0]->count > 0;

            if ($rowExists) {
                return redirect()->back()->with('error', 'Email already exists!');
            } else {
                $getBranchName = DB::select('SELECT branch_name FROM branch_details WHERE id = ?', [$branch_id]);
                $branchArray = json_decode(json_encode($getBranchName), true);
                $branch_name = $branchArray[0]['branch_name'];

                $data = [
                    'name' => $user_name,
                    'branch_id' => $branch_id,
                    'branch_name' => $branch_name,
                    'role' => $user_type,
                    'email' => $email,
                    'password' => $password,
                    'phoneNumber' => $phoneNumber
                ];

                
                $user = new User($data);
                $user->save(); 

                // Assign the role to the user
                $user->assignRole($user_type);

                return redirect()->back()->with('success', 'User created successfully!');
            }
        } else {
            return redirect()->back()->with('error', 'Password do not match');
        }
    }

    /* delete user */
    public function deleteUser(Request $request){
        $user_id = $request->user_id;

        $query = DB::table('users')->where('id', $user_id)->delete();
        if ($query) {
            return redirect()->back()->with('success', 'User deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete user');
        }
    }

    /* edit user page */
    public function editUser(Request $request)
    {
        $user_id = $request->user_id;
        $getUserDetails = DB::select('SELECT * FROM users WHERE id = ?', [$user_id]);
        $usersArray = json_decode(json_encode($getUserDetails), true);

        $getBranchDetails = DB::select('SELECT * FROM branch_details');
        $branchArray = json_decode(json_encode($getBranchDetails), true);

        $getRolesList = DB::select('SELECT * FROM roles');
        $rolesArray = json_decode(json_encode($getRolesList), true);

        return view('admin.UserManagementModule.user_edit', [
            'userData' => $usersArray,
            'branchDetails' => $branchArray,
            'rolesList' => $rolesArray
        ]);
    }

    /* update user data to database */
    public function editUserSubmit(Request $request)
    {
        // get input data
        $user_id = $request->input('current_user_id');
        $name = $request->input('name') ?? $request->input('current_name');
        $email = $request->input('email');
        $old_email = $request->input('current_email');
        $phoneNumber = $request->input('phoneNumber') ?? $request->input('current_phoneNumber');
        $role = $request->input('user_type') ?? $request->input('current_role');
        $branch_id = $request->input('branch_id') ?? $request->input('current_branch_id');
        $branch_name = $request->input('branch_name') ?? $request->input('current_branch_name');
        $password = $request->input('password');
        $confirm_password = $request->input('confirm_password');

        // match the password
        if ($confirm_password) {
            if ($confirm_password !== $password) {
                return redirect()->back()->with('error', 'Password do not matched.');
            } else {
                // if matched, then hash it
                $password = Hash::make($password);
            }
        } else {
            // password not inputed, then assign it with old one
            $password = $request->input('current_password');
        }

        $getBranchName = DB::select('SELECT branch_name FROM branch_details WHERE id = ?', [$branch_id]);
        $branchArray = json_decode(json_encode($getBranchName), true);
        $branch_name = $branchArray[0]['branch_name'];

        // building query data
        $data = [
            'name' => $name,
            'branch_id' => $branch_id,
            'branch_name' => $branch_name,
            'role' => $role,
            'email' => $email,
            'password' => $password,
            'phoneNumber' => $phoneNumber
        ];

        try {
            $userUpdate = DB::table('users')->where('id', $user_id)->update($data);

            if ($userUpdate) {
                return redirect()->back()->with('success', 'User updated successfully!');
            } else {
                return redirect()->back()->with('error', 'Failed to update user. Email already exists');
            }
        } catch (\Illuminate\Database\QueryException $exception) {
            $errorMessage = $exception->getMessage();
            return redirect()->back()->with('error', 'Failed to update user. Error: Email already exists');
        }
    }

    /* view user page */
    public function viewUser(Request $request)
    {
        $user_id = $request->user_id;
        $getUserDetails = DB::select('SELECT * FROM users WHERE id = ?', [$user_id]);
        $usersArray = json_decode(json_encode($getUserDetails), true);

        return view('admin.UserManagementModule.user_view', ['userData' => $usersArray]);
    }

    /* manage user roles page*/
    public function manageUserRole()
    {
        $getRolesList = DB::select('SELECT * FROM roles');
        $rolesArray = json_decode(json_encode($getRolesList), true);

        return view('admin.UserManagementModule.manage_user_role', ['rolesList' => $rolesArray]);
    }

    /* create new role */
    public function createRole()
    {
        $permissions = Permission::all();
        $permission_group = DB::table('permissions')->select('group_name')->groupBy('group_name')->get();
        return view('admin.UserManagementModule.create_role', compact('permissions', 'permission_group'));
    }

    /* insert role to database */
    public function createRoleSubmit(Request $request)
    {
        $roleName = $request->role_name;
        $permissions = $request->permissions;

        $existingRole = Role::where('name', $roleName)->first();
        if ($existingRole) {
            return redirect()->back()->with('error', 'Role already exists');
        }

        $role = Role::create(['name' => $roleName]);

        if ($role) {
            if (!empty($permissions)) {
                $role->syncPermissions($permissions);
            }

            return redirect()->back()->with('success', 'Role created successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to create role');
        }
    }

    /* update role view */
    public function updateRole(Request $request)
    {
        $role_id = $request->id;

        $role = Role::findById($role_id);
        $permissions = Permission::all();
        $permission_group = DB::table('permissions')->select('group_name')->groupBy('group_name')->get();

        return view('admin.UserManagementModule.update_role', compact('role', 'permissions', 'permission_group'));
    }

    /* update role to database */
    public function updateRoleSubmit(Request $request)
    {
        $role_id = $request->role_id;
        $permissions = $request->permissions;

        $role = Role::findById($role_id);

        if ($role) {
            if (!empty($permissions)) {
                $role->syncPermissions($permissions);
            }
            return redirect()->back()->with('success', 'Role updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update role');
        }
    }

    /* delete role */
    public function deleteRole(Request $request)
    {
        $role_id = $request->role_id;
        $role = Role::findById($role_id);

        if (!is_null($role)) {
            $role->delete();
            return redirect()->back()->with('success', 'Role deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete role');
        }
    }

    /* get user info based on role */
    /* public function getUsers(Request $request)
    {
        $user_type = $request->user_type;
        $users = DB::table('users')
            ->where('role', $user_type)
            ->select('id', 'name')
            ->get();

        return response()->json($users);
    } */

    /* sms student view */
    public function sms_student()
    {
        return view('admin.UserManagementModule.sms_student');
    }

    /* sms employee view */
    public function sms_employee()
    {
        return view('admin.UserManagementModule.sms_employee');
    }
}
