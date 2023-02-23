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
<body>
    <h1 class="flex items-center justify-center text-5xl m-8 text-slate-700">List of restaurants</h1>

<section>
    @foreach($restaurants as $restaurant)
        <h2><strong>Name: </strong>{{ $restaurant->name }}</h2>
        <h3><strong>Location: </strong> {{ $restaurant->address }}, {{ $restaurant->zipCode }} {{ $restaurant->town }}, {{ $restaurant->country }}</h3>
        <h3><strong>Description: </strong>{{ $restaurant->description }}</h3>
        <h3><strong>Review: </strong>{{ $restaurant->review }}/10</h3>
    @endforeach
</section>
</body>
</html>
