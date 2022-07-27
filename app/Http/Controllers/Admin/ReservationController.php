<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\ReservationStoreRequest;
use App\Http\Requests\Admin\ReservationUpdateRequest;

class ReservationController extends Controller
{
    public function index(){
        $reservations=Reservation::oldest()->get();
        return view('admin.reservation.index',compact('reservations'));
    }

    public function create(){
        return view('admin.reservation.store');
    }

    public function store(ReservationStoreRequest $request){
        $reservation=new Reservation();
        $reservation->title = $request->title;
        $reservation->subtitle = $request->subtitle;
        $reservation->short_description = $request->short_description;
        if ($request->file('image')) {
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/reservation/', $file);
            $reservation->image = 'storage/uploads/reservation/' . $file;
        }
        $reservation->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.reservation.index')->with($notification);
    }

    public function edit(Reservation $reservation){
        return view('admin.reservation.edit',compact('reservation'));
    }

    public function update(ReservationUpdateRequest $request,Reservation $reservation){
        $reservation->title = $request->title;
        $reservation->subtitle = $request->subtitle;
        $reservation->short_description = $request->short_description;
        if ($request->file('image')) {
            File::delete($reservation->image);
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/reservation/', $file);
            $reservation->image = 'storage/uploads/reservation/' . $file;
        }
        $reservation->save();

        $notification=[
            'message'=>'Ugurla elave edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.reservation.index')->with($notification);
    }

    public function destroy(Reservation $reservation){
        $reservation->delete();
        $notification=[
            'message'=>'Ugurla silindi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.reservation.index')->with($notification);
    }
}
