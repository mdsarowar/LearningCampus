<?php

namespace App\Http\Controllers\GlobalSettingsModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GlobalSettingsModule\InstituteSetting;
use App\Models\GlobalSettingsModule\GeneralInformation;
use Illuminate\Support\Facades\DB;

class InstituteController extends Controller
{
    public function instituteAdd()
    {
        return view('admin.GlobalSettingsModule.institute');
    }

    public function instituteSettingInsert(Request $request)
    {
        // $validator =   $request->validate([
        //     'admin_theme' => 'required',
        //     'website_theme' => 'required',

        // ]);
        $institute_settings = new InstituteSetting();
        $institute_settings->facebook_page = $request->input('facebook_page');
        $institute_settings->youtube_video = $request->input('youtube_video');
        $institute_settings->admin_theme   = $request->input('admin_theme');
        $institute_settings->website_theme = $request->input('website_theme');
        $institute_settings->save();
        return redirect()->route('institute_add')->with('success', 'Institute Setting Insert Successfully');
    }
    public function instituteInformationInsert(Request $request)
    {
        // $validator =   $request->validate([
        //     'admin_theme' => 'required',
        //     'website_theme' => 'required',

        // ]);
        $general_infos = new GeneralInformation();
        if ($request->hasFile('favicon')) {
            $file = $request->file('favicon');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/general-info', $filename);
            $general_infos->favicon = $filename;
        }
        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/general-info', $filename);
            $general_infos->banner = $filename;
        }
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/general-info', $filename);
            $general_infos->logo = $filename;
        }
        $general_infos->institute_id = '1';
        $general_infos->eiin_no = $request->input('eiin_no');
        $general_infos->institue_name = $request->input('institue_name');
        $general_infos->slogan = $request->input('slogan');
        $general_infos->email = $request->input('email');
        $general_infos->short_description = $request->input('short_description');
        $general_infos->why_choose_institute = $request->input('why_choose_institute');
        return $general_infos;
        $general_infos->save();
        return redirect()->route('institute_add')->with('success', 'General Information Add Successfully');
    }
}
