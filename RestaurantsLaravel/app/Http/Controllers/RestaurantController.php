<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\EditPostRequest;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('restaurants.index', ['restaurants' => Restaurant::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurants.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        return view('restaurants.show', ['restaurant' => $restaurant]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        return view('restaurants.edit', ['restaurant' => $restaurant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditPostRequest $request, string $id)
    {
        $edited_restaurant = Restaurant::find($id);
        return $this->validation_restaurant($request, $edited_restaurant);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete the restaurant
        return redirect('/restaurants');
    }

    public function store(CreatePostRequest $request)
    {
        $restau = new Restaurant();
        return $this->validation_restaurant($request, $restau);
    }

    /**
     * @param Request $request
     * @param $edited_restaurant
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function validation_restaurant(Request $request, $restaurant)
    {

        $restaurant->name = $request->input('name');
        $restaurant->address = $request->input('address');
        $restaurant->zipCode = $request->input('zipCode');
        $restaurant->town = $request->input('town');
        $restaurant->country = $request->input('country');
        $restaurant->description = $request->input('description');
        $restaurant->review = $request->input('review');
        $restaurant->save();

        return redirect('/restaurants');
    }
}
