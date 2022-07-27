<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OurTeamStoreRequest;
use App\Http\Requests\Admin\OurTeamUpdateRequest;
use App\Models\OurTeam;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index(){
        $our_teams=OurTeam::oldest()->get();
        return view ('admin.our_team.index',compact('our_teams'));
    }

    public function create (){
        return view ('admin.our_team.store');
    }

    public function store(OurTeamStoreRequest $request){
        $our_team=new OurTeam();
        $our_team->title = $request->title;
        $our_team->about = $request->about;
        $our_team->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.our_team.index')->with($notification);
    
    }

    public function edit(OurTeam $our_team){
        return view('admin.our_team.edit',compact('our_team'));
    }

    public function update(OurTeamUpdateRequest $request,OurTeam $our_team){
        $our_team->title = $request->title;
        $our_team->about = $request->about;
        $our_team->save();

        $notification=[
            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.our_team.index')->with($notification);
    }

    public function destroy(OurTeam $our_team){
        $our_team->delete();
        $notification=[

            'message'=>'Ugurla yenilendi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.our_team.index')->with($notification);

    }
}
