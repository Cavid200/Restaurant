<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HomeStoreRequest;
use App\Http\Requests\Admin\HomeUpdateRequest;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $homes=Home::oldest()->get();
        return view('admin.home.index',compact('homes'));
    }

    public function create(){
        return view('admin.home.store');
    }

    public function store(HomeStoreRequest $request){
        $home=new Home();
        $home->title = $request-> title;
        $home->subtitle = $request-> subtitle;
        $home->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.home.index')->with($notification);
    }
    public function edit(Home $home){
        return view('admin.home.edit',compact('home'));
    }

    public function update(HomeUpdateRequest $request,Home $home){
        $home->title = $request-> title;
        $home->subtitle = $request-> subtitle;
        $home->save();

        $notification=[
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.home.index')->with($notification);
    }

    public function destroy(Home $home){
        $home->delete();
        $notification=[
            'message'=>'Ugurla silindi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.home.index')->with($notification);
    }
}

