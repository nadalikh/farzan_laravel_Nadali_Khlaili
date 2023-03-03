@extends('layout.master', ['title' => "Nadali's motorbikes"])
@section('content')
    <h2 class="text-center my-5 font-bold text-lg">motorbikes</h2>
<div class="w-11/12 m-auto mt-10 h-screen overflow-scroll">
    <table class="w-full h-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">color</th>
                <th scope="col" class="px-6 py-3">price</th>
                <th scope="col" class="px-6 py-3">weight</th>
                <th scope="col" class="px-6 py-3">image</th>
            </tr>
        </thead>
        @foreach($motorBikes as $motorBike)
            <tr class="bg-white border-b dark:bg-gray-800">
                <td class="px-6 py-4">{{$motorBike->id}}</td>
                <td class="px-6 py-4">{{$motorBike->color}}</td>
                <td class="px-6 py-4">{{$motorBike->price}}</td>
                <td class="px-6 py-4">{{$motorBike->weight}}</td>
                <td class="px-6 py-4"><img class="w-[100px] h-[100px]" src="{{$motorBike->image}}"></td>
            </tr>
        @endforeach
    </table>
</div>
{{$motorBikes->links()}}


@endsection
