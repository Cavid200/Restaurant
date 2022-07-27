<?php

namespace App\Http\Controllers\Admin;

use PDO;
use App\Models\Personal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\PersonalStoreRequest;
use App\Http\Requests\Admin\PersonalUpdateRequest;

class PersonalController extends Controller
{
    public function index(){
        $personals=Personal::oldest()->get();
        return view('admin.personal.index',compact('personals'));
    }

    public function create(){
        return view('admin.personal.store');
    }

    public function store(PersonalStoreRequest $request){
        $personal=new Personal();
        $personal->fullname = $request->fullname;
        $personal->profession = $request->profession;
        $personal->about = $request->about;
        $personal->isActive = $request->isActive = 1 ? : 0;
        if ($request->file('image')) {
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/personal/', $file);
            $personal->image = 'storage/uploads/personal/' . $file;
        }
        $personal->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.personal.index')->with($notification);

    }

    public function edit(Personal $personal){
        return view('admin.personal.edit',compact('personal'));
    }

    public function update(PersonalUpdateRequest $request,Personal $personal){
        $personal->fullname = $request->fullname;
        $personal->profession = $request->profession;
        $personal->about = $request->about;
        $personal->isActive = $request->isActive ? 1  : 0;
        if ($request->file('image')) {
            File::delete($personal->image);
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/personal/', $file);
            $personal->image = 'storage/uploads/personal/' . $file;
        }
        $personal->save();

        $notification=[
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.personal.index')->with($notification);
    }

    public function destroy(Personal $personal){
        $personal->isActive=0;
        $personal->save();
        $notification=[
            'message'=>'Ugurla silindi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.personal.index')->with($notification);
    }

    public function active(Personal $personal){
        $personal->isActive=1;
        $personal->save();
        $notification=[
            'message'=>'Ugurla aktiv edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.personal.index')->with($notification);
    }
}
