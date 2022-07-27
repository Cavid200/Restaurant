<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PersonStoreRequest;
use App\Http\Requests\Admin\PersonUpdateRequest;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(){
        $persons=Person::oldest()->get();
        return view('admin.person.index',compact('persons'));
    }

    public function create(){
        return view('admin.person.store');
    }

    public function store(PersonStoreRequest $request){
        $person=new Person();
        $person->person = $request->person;
        $person->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'aler-type'=>'success'
        ];

        return redirect()->route('admin.person.index')->with($notification);
    }

    public function edit(Person $person){
        return view ('admin.person.edit',compact('person'));
    }

    public function update(PersonUpdateRequest $request,Person $person){
        $person->person = $request->person;
        $person->save();

        $notification=[
            'message'=>'Ugurla yenilendi',
            'aler-type'=>'success'
        ];

        return redirect()->route('admin.person.index')->with($notification);
    }
    public function destroy(Person $person){
        $person->delete();
        $notification=[
            'message'=>'Ugurla silindi',
            'aler-type'=>'success'
        ];

        return redirect()->route('admin.person.index')->with($notification);
    }
}

