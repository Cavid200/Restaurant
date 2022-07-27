<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\ContactImageStoreRequest;
use App\Http\Requests\Admin\ContactImageUpdateRequest;

class ContactImageController extends Controller
{
    public function index(){
        $contact_images=ContactImage::oldest()->get();
        return view('admin.contact_image.index',compact('contact_images'));
    }

    public function create(){
        return view('admin.contact_image.store');
    }

    public function store(ContactImageStoreRequest $request){
        $contact_image=new ContactImage();
        $contact_image->title = $request->title;
        $contact_image->subtitle = $request->subtitle;
        if ($request->file('image')) {
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/contact_image/', $file);
            $contact_image->image = 'storage/uploads/contact_image/' . $file;
        }
        $contact_image->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.contact_image.index')->with($notification);
    }

    public function edit(ContactImage $contact_image){
        return view('admin.contact_image.edit',compact('contact_image'));
    }

    public function update(ContactImageUpdateRequest $request,ContactImage $contact_image){
        $contact_image->title = $request->title;
        $contact_image->subtitle = $request->subtitle;
        if ($request->file('image')) {
            File::delete($contact_image->image);
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/contact_image/', $file);
            $contact_image->image = 'storage/uploads/contact_image/' . $file;
        }
        $contact_image->save();

        $notification=[
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.contact_image.index')->with($notification);
    }

    public function destroy(ContactImage $contact_image){
        $contact_image->delete();
        $notification=[
            'message'=>'Ugurla silindi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.contact_image.index')->with($notification);
    }
}
