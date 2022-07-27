<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SocialNetworkStoreRequest;
use App\Http\Requests\Admin\SocialNetworkUpdateRequest;
use App\Models\SocialMedia;
use App\Models\SocialNetwork;
use Illuminate\Http\Request;

class SocialNetworkController extends Controller
{
    public function index(){
        $social_networks=SocialNetwork::oldest()->get();
        return view('admin.social_network.index',compact('social_networks'));
    }

    public function create(){
        return view('admin.social_network.store');
    }

    public function store(SocialNetworkStoreRequest $request){
        $social_network=new SocialNetwork();
        $social_network->name =$request->name;
        $social_network->url =$request->url;
        $social_network->icon =$request->icon;
        $social_network->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'aler-type'=>'success'
        ];

        return redirect()->route('admin.social_network.index')->with($notification);
    }

    public function edit(SocialNetwork $social_network){
        return view('admin.social_network.edit',compact('social_network'));
    }

    public function update(SocialNetworkUpdateRequest $request,SocialNetwork $social_network){
        $social_network->name =$request->name;
        $social_network->url =$request->url;
        $social_network->icon =$request->icon;
        $social_network->save();

        $notification=[
            'message'=>'Ugurla yenilendi',
            'aler-type'=>'success'
        ];

        return redirect()->route('admin.social_network.index')->with($notification);
    }

    public function destroy (SocialNetwork $social_network){
        $social_network->delete();
        $notification=[
            'message'=>'Ugurla silindi',
            'aler-type'=>'success'
        ];

        return redirect()->route('admin.social_network.index')->with($notification);
    }
}
