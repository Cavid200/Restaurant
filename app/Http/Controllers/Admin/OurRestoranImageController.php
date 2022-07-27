<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\OurRestoranImage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\OurRestoranImageStoreRequest;
use App\Http\Requests\Admin\OurRestoranImageUpdateRequest;

class OurRestoranImageController extends Controller
{
    public function index (){
        $our_restoran_images=OurRestoranImage::oldest()->get();
        return view('admin.our_restoran_image.index',compact('our_restoran_images'));
    }

    public function create(){
        return view('admin.our_restoran_image.store');
    }

    public function store(OurRestoranImageStoreRequest $request){
        $our_restoran_image=new OurRestoranImage();
        if ($request->file('image')) {
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/our_restoran_image/', $file);
            $our_restoran_image->image = 'storage/uploads/our_restoran_image/' . $file;
        }
        $our_restoran_image->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];
        return redirect()->route('admin.our_restoran_image.index')->with($notification);
    }

    public function edit(OurRestoranImage $our_restoran_image){
        return view('admin.our_restoran_image.edit',compact('our_restoran_image'));
    }

    public function update(OurRestoranImageUpdateRequest $request,OurRestoranImage $our_restoran_image){
        if ($request->file('image')) {
            File::delete($our_restoran_image->image);
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/our_restoran_image/', $file);
            $our_restoran_image->image = 'storage/uploads/our_restoran_image/' . $file;
        }
        $our_restoran_image->save();

        $notification=[
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success'
        ];
        return redirect()->route('admin.our_restoran_image.index')->with($notification);
    }

    public function destroy(OurRestoranImage $our_restoran_image){
        $our_restoran_image->delete();
        $notification=[
            'message'=>'Ugurla Silindi',
            'alert-type'=>'success'
        ];
        return redirect()->route('admin.our_restoran_image.index')->with($notification);

    }
}
