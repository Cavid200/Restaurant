<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Http\Requests\Admin\CategoryUpdateRequest;

class CategoryController extends Controller
{
    public function index(){
        $categories=Category::oldest()->get();
        return view('admin.category.index',compact('categories'));
    }

    public function create(){
        return view('admin.category.store');
    }

    public function store(CategoryStoreRequest $request,Category $category){
        $category=new Category();
        $category->title = $request->title;
        $category->subtitle = $request->subtitle;
        $category->isActive = $request->isActive = 1 ? : 0 ;
        if ($request->file('image')) {
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/category/', $file);
            $category->image = 'storage/uploads/category/' . $file;
        }
        $category->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.category.index')->with($notification);

    }
    public function edit(Category $category){
        return view ('admin.category.edit',compact('category'));
    }

    public function update(CategoryUpdateRequest $request,Category $category){
        $category->title = $request->title;
        $category->subtitle = $request->subtitle;
        $category->isActive = $request->isActive ? 1 : 0 ;
        if ($request->file('image')) {
            File::delete($category->image);
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/category/', $file);
            $category->image = 'storage/uploads/category/' . $file;
        }
        $category->save();

        $notification=[
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.category.index')->with($notification);
    }

    public function destroy(Category $category){
        $category->isActive=0;
        $category->save();
        $notification=[
            'message'=>'Ugurla silindi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.category.index')->with($notification);
    }

    public function active(Category $category){
        $category->isActive=1;
        $category->save();
        $notification=[
            'message'=>'Ugurla aktiv edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.category.index')->with($notification);
    }
}
