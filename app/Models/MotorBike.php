<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotorBike extends Model
{
    use HasFactory;

    /**
     * Introduce fillable attributes.
     * @var string[]
     */
    protected $fillable = ['color', "weight", "price", "image"];

}
