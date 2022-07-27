<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DiscoverStoreRequest;
use App\Http\Requests\Admin\DiscoverUpdateRequest;
use App\Models\Discover;
use Illuminate\Http\Request;

class DiscoverController extends Controller
{
    public function index(){
        $discovers=Discover::oldest()->get();
        return view('admin.discover.index',compact('discovers'));
    }

    public function create(){
        return view('admin.discover.store');
    }

    public function store(DiscoverStoreRequest $request){
        $discover=new Discover();
        $discover->title = $request->title;
        $discover->description = $request->description;
        $discover->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success',
        ];

        return redirect()->route('admin.discover.index')->with($notification);
    }

    public function edit(Discover $discover){
        return view('admin.discover.edit',compact('discover'));
    }

    public function update(DiscoverUpdateRequest $request,Discover $discover){
        $discover->title=$request->title;
        $discover->description = $request->description;
        $discover->save();

        $notification=[
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success',
        ];

        return redirect()->route('admin.discover.index')->with($notification);
    }

    public function destroy(Discover $discover){
        $discover->delete();
        $notification=[
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success',
        ];

        return redirect()->route('admin.discover.index')->with($notification);

    }
}
