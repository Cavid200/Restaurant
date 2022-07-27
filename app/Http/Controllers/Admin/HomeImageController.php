<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomeImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\HomeImageStoreRequest;
use App\Http\Requests\Admin\HomeImageUpdateRequest;

class HomeImageController extends Controller
{
    public function index(){
        $home_images=HomeImage::oldest()->get();
        return view('admin.home_image.index',compact('home_images'));
    }

    public function create(){
        return view('admin.home_image.store');
    }

    public function store(HomeImageStoreRequest $request){
        $home_image=new HomeImage();
        if ($request->file('image')) {
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/home_image/', $file);
            $home_image->image = 'storage/uploads/home_image/' . $file;
        }
        $home_image->save();

        $notification = [
            'message' => 'Ugurla elave edildi',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin.home_image.index')->with($notification);
    }

    public function edit(HomeImage $home_image){
        return view('admin.home_image.edit',compact('home_image'));
    }

    public function update(HomeImageUpdateRequest $request,HomeImage $home_image){
        if ($request->file('image')) {
            File::delete($home_image->image);
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/home_image/', $file);
            $home_image->image = 'storage/uploads/home_image/' . $file;
        }
        $home_image->save();

        $notification = [
            'message' => 'Ugurla yenilendi',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin.home_image.index')->with($notification);
    }
    
    public function destroy(HomeImage $home_image){
        $home_image->delete();
        $notification = [
            'message' => 'Ugurla silindi',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin.home_image.index')->with($notification);
    }

}
