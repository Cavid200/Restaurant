<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\DiscoverImage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\DiscoverImageStoreRequest;
use App\Http\Requests\Admin\DiscoverImageUpdateRequest;

class DiscoverImageController extends Controller
{
    public function index(){
        $discover_images=DiscoverImage::oldest()->get();
        return view('admin.discover_image.index',compact('discover_images'));
    }

    public function create(){
        return view('admin.discover_image.store');
    }

    public function store(DiscoverImageStoreRequest $request){
        $discover_image=new DiscoverImage();
        if ($request->file('image')) {
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/discover_image/', $file);
            $discover_image->image = 'storage/uploads/discover_image/' . $file;
        }
        $discover_image->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.discover_image.index')->with($notification);
    }

    public function edit(DiscoverImage $discover_image){
        return view('admin.discover_image.edit',compact('discover_image'));
    }

    public function update(DiscoverImageUpdateRequest $request,DiscoverImage $discover_image){
        if ($request->file('image')) {
            File::delete($discover_image->image);
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/discover_image/', $file);
            $discover_image->image = 'storage/uploads/discover_image/' . $file;
        }
        $discover_image->save();

        $notification=[
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.discover_image.index')->with($notification);

    }

    public function destroy(DiscoverImage $discover_image){
        $discover_image->delete();
        
        $notification=[
            'message'=>'Ugurla Silindi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.discover_image.index')->with($notification);
    }
}
