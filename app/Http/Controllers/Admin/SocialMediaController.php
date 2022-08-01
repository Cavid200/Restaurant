<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SocialMediaStoreRequest;
use App\Http\Requests\Admin\SocialMediaUpdateRequest;
use App\Models\Personal;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function index(){
        $social_medias=SocialMedia::oldest()->get();
        return view('admin.social_media.index',compact('social_medias'));
    }

    public function create(){
        $personals=Personal::oldest()->where('isActive',1)->get();
        return view('admin.social_media.store',compact('personals'));
    }

    public function store(SocialMediaStoreRequest $request){
        
        $social_media=new SocialMedia();
        $social_media->name = $request ->name;
        $social_media->url = $request ->url;
        $social_media->icon = $request ->icon;
        $social_media->personal_id = $request ->personal_id;

        $social_media->save();

        $notification=[
            'message'=>'Ugurla elve edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.social_media.index')->with($notification);
        
    }

    public function edit(SocialMedia $social_media){
        $personals=Personal::oldest()->where('isActive',1)->get();
        return view('admin.social_media.edit',compact('personals','social_media'));
    }

    public function update(SocialMediaUpdateRequest $request,SocialMedia $social_media){

        $social_media->name = $request ->name;
        $social_media->url = $request ->url;
        $social_media->icon = $request ->icon;
        $social_media->personal_id = $request ->personal_id;

        $social_media->save();

        $notification=[
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.social_media.index')->with($notification);
    }

    public function destroy(SocialMedia $social_media){
        $social_media->delete();
        $notification=[
            'message'=>'Ugurla silindi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.social_media.index')->with($notification);
    }

}

