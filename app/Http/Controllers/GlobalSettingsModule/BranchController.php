<?php

namespace App\Http\Controllers\GlobalSettingsModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GlobalSettingsModule\BranchDetails;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{
    public function branch()
    {
        // $branch_details = BranchDetails::all();
        // return view('admin.GlobalSettingsModule.branch',compact('branch_details'));

        $branchsData = DB::select('select * from branch_details');
        $branchsArray = json_decode(json_encode($branchsData), true);
        return view('admin.GlobalSettingsModule.branch', ['branchsData' => $branchsArray]);
    }
    public function addBranch()
    {
        return view('admin.GlobalSettingsModule.add_branch');
    }
    public function insertBranch(Request $request)
    {
        // $validator =   $request->validate([
        //     'short_name' => 'required',
        //     'branch_name' => 'required',

        // ]);
        $branch_details = new BranchDetails();
        if ($request->hasFile('signature')) {
            $file = $request->file('signature');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/branch', $filename);
            $branch_details->signature = $filename;
        }
        $branch_details->short_name = $request->short_name;
        $branch_details->branch_name = $request->branch_name;
        $branch_details->address = $request->address;
        $branch_details->city = $request->city;
        $branch_details->zip_code = $request->zip_code;
        $branch_details->phone = $request->phone;
        $branch_details->fax = $request->fax;
        $branch_details->email = $request->email;
        $branch_details->holiday = $request->holiday;
        $branch_details->map_iframe = $request->map_iframe;
        $branch_details->status = $request->status;
        $branch_details->save();
        return redirect()->route('branch')->with('success', 'Branch Insert Successfully');
    }


    public function viewBranch (Request $request)
    {
        $id = $request->id;

        $branch_details = DB::select('SELECT * FROM branch_details WHERE id = ?', [$id]);
        $branchArray = json_decode(json_encode($branch_details), true);

        return view('admin.GlobalSettingsModule.view_branch', ['branch_details' => $branchArray]);
    }


    public function editBranch(Request $request)
    {
        $id = $request->id;

        $branch_details = DB::select('SELECT * FROM branch_details WHERE id = ?', [$id]);
        $branchArray = json_decode(json_encode($branch_details), true);

        return view('admin.GlobalSettingsModule.edit_branch', ['branch_details' => $branchArray]);
    }


    public function updateBranch(Request $request)
    {

        $id = $request->id;
        
        $short_name = $request->short_name ?? $request->current_short_name;
        $branch_name = $request->branch_name ?? $request->current_branch_name;
        $address = $request->address ?? $request->current_address;
        $city = $request->city ?? $request->current_city;
        $zip_code = $request->zip_code ?? $request->current_zip_code;
        $phone = $request->phone ?? $request->current_phone;
        $fax = $request->fax ?? $request->current_fax;
        $email = $request->email ?? $request->current_email;
        $signature = $request->signature ?? $request->current_signature;
        $map_iframe = $request->map_iframe ?? $request->current_map_iframe;
        $status = $request->status ?? $request->current_status;

        $updateData = [
            'short_name' => $short_name,
            'branch_name' => $branch_name,
            'address' => $address,
            'city' => $city,
            'zip_code' => $zip_code,
            'phone' => $phone,
            'fax' => $fax,
            'email' => $email,
            'signature' => $signature,
            'map_iframe' => $map_iframe,
            'status' => $status,
        ];

        $numUpdated = DB::table('branch_details')
        ->where('id', $id)
            ->update($updateData);

        if ($numUpdated > 0) {
            return redirect()->back()->with('success', 'Branch updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update Branch');
        }
    }


    public function deleteBranch(Request $request)
    {
        $id = $request->label_id;

        $query = DB::table('branch_details')->where('id', $id)->delete();
        if ($query) {
            return redirect()->back()->with('success', 'Branch deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete Branch');
        }
    }

    public function branchSearch(Request $request)
    {
        $short_name = $request->input('short_name');
        $branch_name = $request->input('branch_name');
        $address = $request->input('address');
        $city = $request->input('city');
        $zip_code = $request->input('zip_code');
        $status = $request->input('status');

        $query = "SELECT * FROM branch_details WHERE 1=1";


        if (!empty($short_name)) {
            $query .= " AND short_name = '$short_name'";
        }

        if (!empty($branch_name)) {
            $query .= " AND branch_name = '$branch_name'";
        }

        if (!empty($address)) {
            $query .= " AND address = '$address'";
        }

        if (!empty($city)) {
            $query .= " AND city = '$city'";
        }

        if (!empty($zip_code)) {
            $query .= " AND zip_code = '$zip_code'";
        }

        if ($status !== 'all') {
            $query .= " AND status = '$status'";
        }

        $selectedData = DB::select($query);
        return response()->json($selectedData);
    }


}
