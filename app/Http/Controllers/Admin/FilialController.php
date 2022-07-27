<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FilialStoreRequest;
use App\Http\Requests\Admin\FilialUpdateRequest;
use App\Models\Filial;
use Illuminate\Http\Request;

class FilialController extends Controller
{
    public function index(){
        $filials=Filial::oldest()->get();
        return view('admin.filial.index',compact('filials'));
    }

    public function create(){
        return view('admin.filial.store');
    }

    public function store(FilialStoreRequest $request){
        $filial=new Filial();
        $filial->name = $request->name;
        $filial->about = $request->about;
        $filial->location= $request->location;
        $filial->phone = $request->phone;
        $filial->email = $request->email;
        $filial->isMain = $request->isMain = 1 ? : 0;
        $filial->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.filial.index')->with($notification);
    }
    public function edit(Filial $filial){
        return view('admin.filial.edit',compact('filial'));
    }

    public function update(FilialUpdateRequest $request,Filial $filial){
        $filial->name = $request->name;
        $filial->about = $request->about;
        $filial->location= $request->location;
        $filial->phone = $request->phone;
        $filial->email = $request->email;
        $filial->isMain = $request->isMain  ? 1 : 0;
        $filial->save();

        $notification=[
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.filial.index')->with($notification);
    }
    public function destroy(Filial $filial){
        $filial->delete();
        $notification=[
            'message'=>'Ugurla silindi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.filial.index')->with($notification);
    }
}

