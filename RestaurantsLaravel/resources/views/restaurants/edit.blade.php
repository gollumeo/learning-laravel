<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit restaurant #{{ $restaurant->id }}</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col bg-slate-700 text-gray-100">
<main class="flex flex-col justify-center">
    <h1 class="text-center text-5xl m-4">Edit a restaurant</h1>
    <form action="/restaurants/edit/{{ $restaurant->id }}" method="post"
          class="flex flex-col justify-center m-4 w-4/5 self-center md:w-1/2 min-h-4/5 max-h-4/5 h-4/5">
        @csrf
        @method('PATCH')
        <div class="name flex flex-col">
            <label for="name">Name:</label>
            <input class="text-sm w-full mt-2 mb-4 p-2 rounded-lg text-black placeholder:italic invalid:text-rose-700"
                   type="text" name="name"
                   placeholder="Your restaurant name goes here" value="{{ $restaurant->name }}">
            @error('name')
            <span class="error text-red-400 -mt-2 mb-2">{{ $message }}</span>
            @enderror
        </div>
        <div class="description flex flex-col">
            <label for="description">Description:</label>
            <textarea name="description" class="text-sm w-full mt-2 mb-4 p-2 rounded-lg text-black placeholder:italic"
                      rows="4"
                      placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consectetur consequatur ex iure maiores, numquam odit officiis pariatur reiciendis sapiente.">{{ $restaurant->description }}</textarea>
            @error('description')
            <span class="error text-red-400 -mt-2 mb-2">{{ $message }}</span>
            @enderror
        </div>
        <div class="review flex flex-col">
            <label for="review">Review (out of 10):</label>
            <input type="number" min="0" max="10" name="review" placeholder="Ex.: 10"
                   class="text-sm w-full mt-2 mb-4 p-2 rounded-lg text-black placeholder:italic"
                   value="{{ $restaurant->review }}">
            @error('review')
            <span class="error text-red-400 -mt-2 mb-2">{{ $message }}</span>
            @enderror
        </div>
        <div class="address flex flex-col">
            <label for="address">Address:</label>
            <input type="text" name="address" placeholder="Your address"
                   class="text-sm w-full mt-2 mb-4 p-2 rounded-lg text-black placeholder:italic"
                   value="{{ $restaurant->address }}">
            @error('address')
            <span class="error text-red-400 -mt-2 mb-2">{{ $message }}</span>
            @enderror
        </div>
        <div class="location flex justify-around w-full">
            <div class="zipcode flex flex-col w-1/2">
                <label for="zipCode">Zip Code:</label>
                <input type="number" name="zipCode" placeholder="Ex.: 5100"
                       class="text-sm w-full mt-2 mb-4 p-2 rounded-lg text-black placeholder:italic"
                       value="{{ $restaurant->zipCode }}">
                @error('zipCode')
                <span class="error text-red-400 -mt-2 mb-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="town flex flex-col w-1/2 ml-2">
                <label for="town">Town:</label>
                <input type="text" name="town" placeholder="Your town"
                       class="text-sm w-full mt-2 mb-4 p-2 rounded-lg text-black placeholder:italic"
                       value="{{ $restaurant->town }}">
                @error('town')
                <span class="error text-red-400 -mt-2 mb-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="country flex flex-col">
            <label for="country border-none">Country:</label>
            <select name="country"
                    class="text-sm w-full mt-2 mb-4 p-2 rounded-lg text-black divide-y border-b border-gray-400 invalid:border-red-400 invalid:ring-red-400"
                    value="{{ $restaurant->country }}">
                <option value="select" class="text-black text-sm border-b border-black border-2 rounded-lg">Select a
                    country.
                </option>
                <option value="France" class="text-black text-sm rounded-lg border-t border-gray-400 border-2">France
                </option>
                <option value="Belgium" class="text-black text-sm rounded-lg">Belgium</option>
            </select>
            @error('country')
            <span class="error text-red-400 -mt-2 mb-2">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit"
                class="border-2 border-gray-100 w-1/3 self-center bg-gray-400 text-black h-auto text-lg p-2 rounded-2xl hover:bg-gray-600 active:scale-90 transition hover:text-gray-200 active:text-gray-200">
            Edit!
        </button>
    </form>
</main>
</body>
</html>
