<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\SettingStoreRequest;
use App\Http\Requests\Admin\SettingUpdateRequest;

class SettingController extends Controller
{
    public function index(){
        $settings=Setting::oldest()->get();
        return view('admin.setting.index',compact('settings'));
    }

    public function create(){
        return view('admin.setting.store');
    }

    public function store(SettingStoreRequest $request){
        $setting=new Setting();
        $setting->footer = $request->footer;
        $setting->about = $request->about;
        $setting->address = $request->address;
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->isfilial = $request->isfilial=1 ? : 0;
        if ($request->file('logo')) {
            $file = time() . '.' . $request->logo->extension();
            $request->logo->storeAs('public/uploads/setting/', $file);
            $setting->logo = 'storage/uploads/setting/' . $file;
        }
        $setting->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.setting.index')->with($notification);
    }

    public function  edit(Setting $setting){
        return view('admin.setting.edit',compact('setting'));
    }

    public function update(SettingUpdateRequest $request,Setting $setting){
        $setting->footer = $request->footer;
        $setting->about = $request->about;
        $setting->address = $request->address;
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->isfilial = $request->isfilial ? 1 : 0;
        if ($request->file('logo')) {
            File::delete($setting->logo);
            $file = time() . '.' . $request->logo->extension();
            $request->logo->storeAs('public/uploads/setting/', $file);
            $setting->logo = 'storage/uploads/setting/' . $file;
        }
        $setting->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.setting.index')->with($notification);
    }

    public function destroy(Setting $setting){
        $setting->delete();
        $notification=[
            'message'=>'Ugurla silindi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.setting.index')->with($notification);
    }


}
