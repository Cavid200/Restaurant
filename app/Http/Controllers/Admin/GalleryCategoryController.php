<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GalleryCategoryStoreRequest;
use App\Http\Requests\Admin\GalleryCategoryUpdateRequest;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryCategoryController extends Controller
{
    public function index(){
        $gallery_categories=GalleryCategory::oldest()->get();
        return view('admin.gallery_category.index',compact('gallery_categories'));
    }
    public function create(){
        return view('admin.gallery_category.store');
    }
    public function store(GalleryCategoryStoreRequest $request){
        $gallery_category=new GalleryCategory();
        $gallery_category->name = $request->name;
        $gallery_category->isActive = $request->isActive = 1 ? : 0;
        $gallery_category->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.gallery_category.index')->with($notification);
    }
    public function edit(GalleryCategory $gallery_category){
        return view('admin.gallery_category.edit',compact('gallery_category'));
    }

    public function update(GalleryCategoryUpdateRequest $request,GalleryCategory $gallery_category){
        $gallery_category->name = $request->name;
        $gallery_category->isActive = $request->isActive ? 1 : 0;
        $gallery_category->save();

        $notification=[
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.gallery_category.index')->with($notification);
    }
    public function destroy(GalleryCategory $gallery_category){
        $gallery_category->isActive=0;
        $gallery_category->save();

        $notification=[
            'message'=>'Ugurla silindi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.gallery_category.index')->with($notification);
    }

    public function active(GalleryCategory $gallery_category){
        $gallery_category->isActive=1;
        $gallery_category->save();

        $notification=[
            'message'=>'Ugurla aktiv edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.gallery_category.index')->with($notification);
    }


}
