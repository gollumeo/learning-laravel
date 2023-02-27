<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Restaurants</title>
</head>
<body class="flex flex-col bg-slate-700 text-gray-100">
<h1 class="flex items-center justify-center md:text-7xl m-8 font-black text-3xl">List of restaurants</h1>
<main class="w-4/5 md:w-2/3 grid grid-cols-2 self-center gap-6 text-base md:text-lg">
@foreach($restaurants as $restaurant)
    <section class="border border-slate-400 self-center p-2 rounded-xl shadow-2xl hover:scale-105 transition h-full hover:bg-orange-900">
        <h2><strong>Name: </strong>{{ $restaurant->name }}</h2>
        <h3><strong>Location: </strong> {{ $restaurant->address }}, {{ $restaurant->zipCode }} {{ $restaurant->town }}
            , {{ $restaurant->country }}</h3>
        <h3><strong>Description: </strong>{{ $restaurant->description }}</h3>
        <h3><strong>Review: </strong>{{ $restaurant->review }}/10</h3>
    </section>
@endforeach
</main>
</body>
</html>
