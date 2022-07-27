<?php

namespace App\Http\Controllers\Admin;

use App\Models\GalleryImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\GalleryImageStoreRequest;
use App\Http\Requests\Admin\GalleryImageUpdateRequest;
use App\Models\Gallery;

class GalleryImageController extends Controller
{
    public function index(){
        $gallery_images=GalleryImage::oldest()->get();
        return view('admin.gallery_image.index',compact('gallery_images'));
    }

    public function create (){
        return view('admin.gallery_image.store');
    }

    public function store(GalleryImageStoreRequest $request){
        $gallery_image=new GalleryImage();
        $gallery_image->title = $request->title;
        $gallery_image->subtitle = $request->subtitle;
        if ($request->file('image')) {
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/gallery_image/', $file);
            $gallery_image->image = 'storage/uploads/gallery_image/' . $file;
        }
        $gallery_image->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.gallery_image.index')->with($notification);

    }

    public function edit(GalleryImage $gallery_image){
        return view('admin.gallery_image.edit',compact('gallery_image'));
    }

    public function update(GalleryImageUpdateRequest $request,GalleryImage $gallery_image){
        $gallery_image->title = $request->title;
        $gallery_image->subtitle = $request->subtitle;
        if ($request->file('image')) {
            File::delete($gallery_image->image);
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/gallery_image/', $file);
            $gallery_image->image = 'storage/uploads/gallery_image/' . $file;
        }
        $gallery_image->save();


        $notification=[
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.gallery_image.index')->with($notification);
    }

    public function destroy(GalleryImage $gallery_image){
        $gallery_image->delete();
        $notification=[
            'message'=>'Ugurla silindi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.gallery_image.index')->with($notification);
    }
}
