<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\BlogStoreRequest;
use App\Http\Requests\Admin\BlogUpdateRequest;

class BlogController extends Controller
{
    public function index(){
        $blogs=Blog::oldest()->get();
        return view('admin.blog.index',compact('blogs'));
    }

    public function create(){
        $tags=Tag::oldest()->get();
        $categories=Category::oldest()->where('isActive',1)->get();
        return view('admin.blog.store',compact('tags','categories'));
    }

    public function store(BlogStoreRequest $request){
        $tags=Tag::whereIn('id',$request->tags)->get();
       
        $blog=new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->views=0;
        $blog->isActive = $request->isActive ?   1 : 0;
        $blog->user_id = auth()->user()->id;
        $blog->category_id = $request -> category_id;
        if ($request->file('image')) {
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/blog/', $file);
            $blog->image = 'storage/uploads/blog/' . $file;
        }

        $blog->save();

        $blog->tags()->attach($tags);
        
        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.blog.index')->with($notification);

    }

    public  function edit(Blog $blog){
        $tags=Tag::oldest()->get();
        $categories=Category::oldest()->where('isActive',1)->get();
        return view('admin.blog.edit',compact('tags','categories','blog'));
    }


    public function update(Request $request,Blog $blog){

        $tags=Tag::whereIn('id',$request->tags)->get();
        
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->views=0;
        $blog->isActive = $request->isActive ?   1 : 0;
        $blog->user_id = auth()->user()->id;
        $blog->category_id = $request -> category_id;
        if ($request->file('image')) {
            File::delete($blog->image);
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/blog/', $file);
            $blog->image = 'storage/uploads/blog/' . $file;
        }

        $blog->save();

        $blog->tags()->sync($tags);
        
        $notification=[
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.blog.index')->with($notification);
    }

    public function destroy(Blog $blog){
        $blog->isActive=0;
        $blog->save();

        $notification=[
            'message'=>'Ugurla silindi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.blog.index')->with($notification);

    }
    

    public function active(Blog $blog){
        $blog->isActive=1;
        $blog->save();

        $notification=[
            'message'=>'Ugurla aktiv edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.blog.index')->with($notification);
    }

    
}
