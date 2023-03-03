<?php

namespace App\Http\Controllers;

use App\Models\MotorBike;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function home(){
        $motorBikes = MotorBike::paginate(5);
        return view("welcome", compact('motorBikes'));
    }
    public function dateTimeSort($dateTime){
        $motorBikes = MotorBike::orderBy("created_at", $dateTime)->paginate(5);
        return view("welcome", compact('motorBikes'));
    }
    public function priceSort($price){
        $motorBikes = MotorBike::orderBy("price", $price)->paginate(5);
        return view("welcome", compact('motorBikes'));
    }
    public function getMotorBike(MotorBike $motorBike){
        return view("motorBike", compact("motorBike"));
    }
    public function login(){
       return view('login');
    }
    public function create(){
        return view('admin.motorBike.create');
    }

}
