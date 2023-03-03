<?php

namespace App\Http\Controllers;

use App\Http\Requests\MotorBikeCreateRequest;
use App\Http\Requests\MotorBikeFilterRequest;
use App\Models\MotorBike;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MotorBikeController extends Controller
{
    public function filter(MotorBikeFilterRequest $request){
        $body = $request->only('color');
        $color = $body['color'];
        $motorBikes = MotorBike::where("color", "like", "%".$body['color']."%")->paginate(5);
        return view("welcome",compact('motorBikes','color'));
    }
    public function create(MotorBikeCreateRequest $request){
        $body = $request->only(['color', "weight", "price", "image"]);
        $image = $request->file('image');
        $imageName = Carbon::now()->format("y-m-d_h:m:i") .".". $image->getClientOriginalExtension();
        $image->move('images/motorBikes/', $imageName);
        $motorBike = new MotorBike();
        $motorBike->color = $body['color'];
        $motorBike->weight = $body['weight'];
        $motorBike->price = $body['price'];
        $motorBike->image = 'images/motorBikes/'. $imageName;
        $motorBike->save();
        return back()->with("success","Motorbike is added");
    }

}
