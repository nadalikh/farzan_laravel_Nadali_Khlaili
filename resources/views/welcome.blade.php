@extends('layout.master', ['title' => "Nadali's motorbikes"])
@section('content')
    <h2 class="text-center my-5 font-bold text-lg">motorbikes</h2>
<div class="grid grid-cols-2 h-[80vh]">
    <div class="w-[30vh] border-r-2 border-gray-500 ">
        <form class="w-2/3 m-auto " method="post" action="{{route("motorBike.filter")}}">
            @csrf
            <label class="my-2" for="color">color</label>
            <input value="{{isset($color) ? $color : ""}}" name="color" class=" my-2 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" placeholder="color">
            <input class=" my-2 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit" value="filter">
        </form>
    </div>

    <div class=" mt-10  ">
        <table class="w-full h-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">#</th>
                    <th scope="col" class="px-6 py-3">color </th>
                    <th scope="col" class="px-6 py-3"><a href="{{route("priceSort", ['price' => "desc"])}}"><i class="fa fa-sort-amount-desc p-2"></i></a>price<a href="{{route("priceSort", ['price' => "asc"])}}"><i class="fa fa-sort-amount-asc p-2"></i></a></th>
                    <th scope="col" class="px-6 py-3">weight</th>
                    <th scope="col" class="px-6 py-3"><a href="{{route("dateTimeSort", ['dateTime' => "desc", 'price' => "desc"])}}"><i class="fa fa-sort-amount-desc p-2"></i></a>dateTime<a href="{{route("dateTimeSort", ['dateTime' => "asc"])}}"><i class="fa fa-sort-amount-asc p-2"></i></a></th>
                    <th scope="col" class="px-6 py-3">image</th>
                </tr>
            </thead>
            @foreach($motorBikes as $motorBike)
                <tr class="bg-white border-b dark:bg-gray-800">
                    <td class="px-6 py-2 text-blue-600"><a href="{{route('getMotorBike', ['motorBike' => $motorBike])}}">{{$motorBike->id}}</a></td>
                    <td class="px-6 py-2">{{$motorBike->color}}</td>
                    <td class="px-6 py-2">{{$motorBike->price}}</td>
                    <td class="px-6 py-2">{{$motorBike->weight}}</td>
                    <td class="px-6 py-2">{{$motorBike->created_at}}</td>
                    <td class="px-6 py-2"><img class="w-[100px] h-[100px]" src="{{$motorBike->image}}"></td>
                </tr>
            @endforeach
        </table>
        {{$motorBikes->links()}}
    </div>
</div>


@endsection
