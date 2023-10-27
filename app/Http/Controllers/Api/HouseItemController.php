<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HouseItem;
use App\Http\Requests\HouseItemRequest;


class HouseItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return HouseItem::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(HouseItemRequest $request)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

       $houseItem = HouseItem::create($validated);

       return $houseItem;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return HouseItem::findOrfail($id);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(HouseItemRequest $request, string $id)
    {
        $validated = $request->validated();

        $houseItem = HouseItem::findOrfail($id);
 
        $houseItem ->update($validated);
 
         return $houseItem;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $houseItem = HouseItem::findOrFail($id);

        $houseItem->delete();

        return $houseItem;
    }
}
