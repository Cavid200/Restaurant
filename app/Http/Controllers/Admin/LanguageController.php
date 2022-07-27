<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LanguageStoreRequest;
use App\Http\Requests\Admin\LanguageUpdateRequest;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(){
        $languages=Language::oldest()->get();
        return view('admin.language.index',compact('languages'));
    }

    public function create(){
        return view('admin.language.store');
    }

   
    public function store(LanguageStoreRequest $request){
        $language=new Language();
        $language->name = $request-> name;
        $language->code = $request-> code;
        $language->isActive = $request-> isActive = 1 ? : 0;
        $language->save();

        $notification = [
            'message' => 'Ugurla elave edildi',
            'alert-type' => 'success'
        ];
        return redirect()->route('admin.language.index')->with($notification);
    }

    public function edit(Language $language){
        return view('admin.language.edit',compact('language'));
    }

    public function update(LanguageUpdateRequest $request,Language $language){

        $language->name = $request-> name;
        $language->code = $request-> code;
        $language->isActive = $request-> isActive  ? 1 : 0;
        $language->save();
        
        $notification = [
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success'
        ];
        return redirect()->route('admin.language.index')->with($notification);
    }

    public function destroy(Language $language){
        $language->isActive=0;
        $language->save();

        $notification= [
            'message'=>'Ugurla silindi',
            'alert-type'=>'success'
        ];
        return redirect()->route('admin.language.index')->with($notification);
    }

    public function active(Language $language){
        $language->isActive=1;
        $language->save();

        $notification=[
            'message'=>'Uğurla aktiv edildi',
            'alert-type'=>'success'
        ];
        return redirect()->route('admin.language.index')->with($notification);
    }
    
}
