<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TimeStoreRequest;
use App\Http\Requests\Admin\TimeUpdateRequest;
use App\Models\Time;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function index(){
        $times=Time::oldest()->get();
        return view('admin.time.index',compact('times'));
    }

    public function create(){
        return view('admin.time.store');
    }

    public function store(TimeStoreRequest $request){
        $time=new Time();
        $time->time = $request->time;
        $time->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];
        return redirect()->route('admin.time.index')->with($notification);
    }
    
    public function edit(Time $time){
        return view('admin.time.edit',compact('time'));
    }

    public function update(TimeUpdateRequest $request,Time $time){
        $time->time = $request->time;
        $time->save();

        $notification=[
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success'
        ];
        return redirect()->route('admin.time.index')->with($notification);
    }
    public function destroy(Time $time){
        $time->delete();
        $notification=[
            'message'=>'Ugurla silindi',
            'alert-type'=>'success'
        ];
        return redirect()->route('admin.time.index')->with($notification);
    }
}
