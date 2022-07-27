<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OurRestorantStoreRequest;
use App\Http\Requests\Admin\OurRestorantUpdateRequest;
use App\Models\OurRestorant;
use Illuminate\Http\Request;

class OurRestorantController extends Controller
{
    public function index(){
        $our_restorants=OurRestorant::oldest()->get();
        return view('admin.our_restorant.index',compact('our_restorants'));
    }

    public function create(){
        return view('admin.our_restorant.store');
    }

    public function store(OurRestorantStoreRequest $request){
        $our_restorant=new OurRestorant();
        $our_restorant->title = $request->title;
        $our_restorant->description = $request->description;
        $our_restorant->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.our_restorant.index')->with($notification);
    }
    public function edit(OurRestorant $our_restorant){
        return view('admin.our_restorant.edit',compact('our_restorant'));
    }

    public function update(OurRestorantUpdateRequest $request,OurRestorant $our_restorant){
        $our_restorant->title = $request->title;
        $our_restorant->description = $request->description;
        $our_restorant->save();

        $notification=[
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.our_restorant.index')->with($notification);
    }
    public function destroy(OurRestorant $our_restorant){
        $our_restorant->delete();

        $notification=[
            'message'=>'Ugurla silindi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.our_restorant.index')->with($notification);
    }
}
