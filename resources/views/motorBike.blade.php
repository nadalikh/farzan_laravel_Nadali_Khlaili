@extends('layout.master', ['title' => "Nadali's motorbikes"])
@section('content')
<div class="w-1/2 m-auto mt-10 shadow-lg rounded-lg p-10">
    <img class="m-auto rounded-lg" src="{{$motorBike->image}}">
    <p class="text-center">{{$motorBike->color}}</p>
    <p class="text-center">{{$motorBike->weight}} Kg</p>
    <p class="text-center">{{$motorBike->price}} $</p>
</div>
@endsection
