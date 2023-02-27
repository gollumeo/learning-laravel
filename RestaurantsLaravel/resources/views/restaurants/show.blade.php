<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant #{{ $restaurant->id }}</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col bg-slate-700 text-gray-100">
    <h1 class="text-5xl flex items-center justify-center mt-4 text-gray-50">{{ $restaurant->name }}</h1>
    <h3 class="text-2xl text-left ml-4 mb-2 mt-8 text-gray-100">Address: {{$restaurant->address}}, {{$restaurant->zipCode}} {{$restaurant->town}}, {{$restaurant->country}}</h3>
    <h3 class="text-2xl text-left ml-4 mb-2 mt-4 text-gray-100">Description: {{$restaurant->description}}</h3>
    <h3 class="text-2xl text-left ml-4 mb-2 mt-4 text-gray-100">Review: {{$restaurant->review}}/10!</h3>
</body>
</html>
