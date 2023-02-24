<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New restaurant</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col bg-slate-700 text-gray-100">
<h1 class="text-center text-5xl m-4">Add a new restaurant</h1>
<form action="/restaurants/create" method="post" class="flex flex-col justify-center m-4 w-4/5 self-center md:w-1/2 min-h-4/5 max-h-4/5 h-4/5">
    <div class="name flex flex-col">
        <label for="name">Name:</label>
        <input class="text-sm w-full mt-2 mb-4 p-2 rounded-lg text-black placeholder:italic" type="text" name="name"
               placeholder="Your restaurant name goes here">
    </div>
    <div class="description flex flex-col">
        <label for="description">Description:</label>
        <textarea name="description" class="text-sm w-full mt-2 mb-4 p-2 rounded-lg text-black placeholder:italic"
                  rows="4"
                  placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consectetur consequatur ex iure maiores, numquam odit officiis pariatur reiciendis sapiente."></textarea>
    </div>
    <div class="review flex flex-col">
        <label for="review">Review (out of 10):</label>
        <input type="number" min="0" max="10" name="review" placeholder="Ex.: 10"
               class="text-sm w-full mt-2 mb-4 p-2 rounded-lg text-black placeholder:italic">
    </div>
    <div class="address flex flex-col">
        <label for="address">Address:</label>
        <input type="text" name="address" placeholder="Your address"
               class="text-sm w-full mt-2 mb-4 p-2 rounded-lg text-black placeholder:italic">
    </div>
    <div class="location flex justify-around w-full">
        <div class="zipcode flex flex-col w-1/2">
            <label for="zipcode">Zip Code:</label>
            <input type="text" name="zipcode" placeholder="Ex.: 5100"
                   class="text-sm w-full mt-2 mb-4 p-2 rounded-lg text-black placeholder:italic">
        </div>
        <div class="town flex flex-col w-1/2 ml-2">
            <label for="town">Town:</label>
            <input type="text" name="town" placeholder="Your town"
                   class="text-sm w-full mt-2 mb-4 p-2 rounded-lg text-black placeholder:italic">
        </div>
    </div>
    <div class="country flex flex-col">
        <label for="country border-none">Country:</label>
        <select name="country"
                class="text-sm w-full mt-2 mb-4 p-2 rounded-lg text-black divide-y border-b border-gray-400">
            <option value="select" class="text-black text-sm border-b border-black border-2 rounded-lg">Select a
                country.
            </option>
            <option value="France" class="text-black text-sm rounded-lg border-t border-gray-400 border-2">France</option>
            <option value="Belgium" class="text-black text-sm rounded-lg">Belgium</option>
        </select>
    </div>
    <button type="submit" class="border-2 border-gray-100 w-1/3 self-center bg-gray-400 text-black h-auto text-lg p-2 rounded-2xl hover:bg-gray-600 active:scale-90 transition hover:text-gray-200 active:text-gray-200">Create!</button>
</form>
</body>
</html>
