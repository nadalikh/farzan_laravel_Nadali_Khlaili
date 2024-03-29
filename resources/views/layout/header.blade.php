<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    @vite(['resources/css/app.css'])
</head>
<body>

<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center max-w-screen-xl px-4 md:px-6 py-2.5">
        <div class="flex items-center">
            <a href="{{route("adminLogin")}}" class="text-sm block font-medium text-blue-600 dark:text-blue-500 hover:underline">Login</a>
            @if(auth()->check())
                <p class="p-3">hello {{auth()->user()->name}}</p>
            @endif
        </div>
    </div>
</nav>
<nav class="bg-gray-50 dark:bg-gray-700">
    <div class="max-w-screen-xl px-4 py-3 md:px-6">
        <div class="flex items-center">
            <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                <li>
                    <a href="{{route('home')}}" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{route("createMotorBike")}}" class="text-gray-900 dark:text-white hover:underline">Add motorBike</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline">test</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline">test</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield("content")

