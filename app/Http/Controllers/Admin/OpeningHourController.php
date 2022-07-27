<?php

namespace App\Http\Controllers\Admin;

use App\Models\OpeningHour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\OpeningHourStoreRequest;
use App\Http\Requests\Admin\OpeningHourUpdateRequest;

class OpeningHourController extends Controller
{
    public function index(){
        $opening_hours=OpeningHour::oldest()->get();
        return view('admin.opening_hour.index',compact('opening_hours'));
    }

    public function create(){
        return view('admin.opening_hour.store');
    }

    public function store(OpeningHourStoreRequest $request){
        $opening_hour=new OpeningHour();
        $opening_hour->title = $request->title;
        $opening_hour->subtitle = $request->subtitle;
        $opening_hour->week_day1 = $request->week_day1;
        $opening_hour->start_time1 = $request->start_time1;
        $opening_hour->end_time1 = $request->end_time1;
        $opening_hour->week_day2 = $request->week_day2;
        $opening_hour->start_time2 = $request->start_time2;
        $opening_hour->end_time2 = $request->end_time2;
        $opening_hour->phone = $request->phone;
        if ($request->file('video')) {
            $file = time() . '.' . $request->video->extension();
            $request->video->storeAs('public/uploads/opening_hour/', $file);
            $opening_hour->video = 'storage/uploads/opening_hour/' . $file;
        }

        $opening_hour->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.opening_hour.index')->with($notification);
        
    }

    public function edit(OpeningHour $opening_hour){
        return view('admin.opening_hour.edit',compact('opening_hour'));
    }

    public function update(OpeningHourUpdateRequest $request,OpeningHour $opening_hour){
        $opening_hour->title = $request->title;
        $opening_hour->subtitle = $request->subtitle;
        $opening_hour->week_day1 = $request->week_day1;
        $opening_hour->start_time1 = $request->start_time1;
        $opening_hour->end_time1 = $request->end_time1;
        $opening_hour->week_day2 = $request->week_day2;
        $opening_hour->start_time2 = $request->start_time2;
        $opening_hour->end_time2 = $request->end_time2;
        $opening_hour->phone = $request->phone;
        if ($request->file('video')) {
            File::delete($opening_hour->video);
            $file = time() . '.' . $request->video->extension();
            $request->video->storeAs('public/uploads/opening_hour/', $file);
            $opening_hour->video = 'storage/uploads/opening_hour/' . $file;
        }

        $opening_hour->save();

        $notification=[
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.opening_hour.index')->with($notification);
    }

    public function destroy(OpeningHour $opening_hour){
        $opening_hour->delete();
        $notification=[
            'message'=>'Ugurla silindi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.opening_hour.index')->with($notification);
    }

}
