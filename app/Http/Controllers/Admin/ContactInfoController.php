<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactInfoStoreRequest;
use App\Http\Requests\Admin\ContactInfoUpdateRequest;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function index(){
        $contact_infos=ContactInfo::oldest()->get();
        return view('admin.contact_info.index',compact('contact_infos'));
    }

    public function create(){
        return view('admin.contact_info.store');
    }

    public function store(ContactInfoStoreRequest $request){
        $contact_info=new ContactInfo();
        $contact_info->title = $request->title;
        $contact_info->about = $request->about;
        $contact_info->save();

        $notification= [
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.contact_info.index')->with($notification);

    }

    public function edit(ContactInfo $contact_info){
        return view('admin.contact_info.edit',compact('contact_info'));
    }

    public function update(ContactInfoUpdateRequest $request,ContactInfo $contact_info){
        $contact_info->title = $request->title;
        $contact_info->about = $request->about;
        $contact_info->save();

        $notification= [
            'message'=>'Ugurla yenilende',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.contact_info.index')->with($notification);
    }

    public function destroy(ContactInfo $contact_info){
        $contact_info->delete();
        $notification= [
            'message'=>'Ugurla Silindi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.contact_info.index')->with($notification);
    }
}
