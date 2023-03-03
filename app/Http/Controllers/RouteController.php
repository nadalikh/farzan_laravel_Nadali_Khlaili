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
}
