<?php

namespace App\Http\Controllers\Admin;

use PDO;
use App\Models\Meal;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\MealStoreRequest;
use App\Http\Requests\Admin\MealUpdateRequest;

class MealController extends Controller
{
    public function index(){
        $meals=Meal::oldest()->get();
        return view('admin.meal.index',compact('meals'));
    }

    public function create(){
        $categories=Category::oldest()->where('isActive',1)->get();
        return view('admin.meal.store',compact('categories'));
    }

    public function store(Request $request){
        $meal=new Meal();
        $meal->name = $request->name;
        $meal->ingredient = $request->ingredient;
        $meal->price = $request->price;
        $meal->discount_price = $request->discount_price;
        $meal->category_id = $request->category_id;
        $meal->isActive = $request->isActive ? 1 : 0;
        $meal->isEditor = $request->isEditor ? 1 : 0;
        $meal->isDiscount = $request->isDiscount ? 1 : 0;
        if ($request->file('image')) {
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/meal/', $file);
            $meal->image = 'storage/uploads/meal/' . $file;
        }

        $meal->save();

        $notification=[
            'message'=>'Ugurla elave edildi ',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.meal.index')->with($notification);
    }
    public function edit(Meal $meal){
        $categories=Category::oldest()->where('isActive',1)->get();
        return view('admin.meal.edit',compact('categories','meal'));
    }

    public function update(MealUpdateRequest $request,Meal $meal){
        $meal->name = $request->name;
        $meal->ingredient = $request->ingredient;
        $meal->price = $request->price;
        $meal->discount_price = $request->discount_price;
        $meal->category_id = $request->category_id;
        $meal->isActive = $request->isActive ? 1 : 0;
        $meal->isEditor = $request->isEditor ? 1 : 0;
        $meal->isDiscount = $request->isDiscount ? 1 : 0;
        if ($request->file('image')) {
            File::delete($meal->image);
            $file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/uploads/meal/', $file);
            $meal->image = 'storage/uploads/meal/' . $file;
        }

        $meal->save();

        $notification=[
            'message'=>'Ugurla yenilendi ',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.meal.index')->with($notification);
    }

    public function destroy(Meal $meal){
        $meal->isActive=0;
        $meal->save();

        $notification=[
            'message'=>'Ugurla silindi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.meal.index')->with($notification);

    }
    

    public function active(Meal $meal){
        $meal->isActive=1;
        $meal->save();

        $notification=[
            'message'=>'Ugurla aktiv edildi',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.meal.index')->with($notification);
    }
}
