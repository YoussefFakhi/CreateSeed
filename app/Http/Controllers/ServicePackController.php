<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicePack;

class ServicePackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ServicePack::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = request()-> validate( [
                'service_id'=>'required|integer|exists:services,id',
                'slug'=>'required|string',
                'title'=>'required|string',
                'subtitle'=>'nullable|string|max:200',
                'description'=>'nullable|string',
                'price'=>'required|numeric|min:0',
                'advantages'=>'required|array',
                'advantages.*.name'=>'required|string|max:255',
                'advantages.*.type'=>'required|string|in:advantage,disadvantage',
                'is_recommended'=> 'boolean',
                'position'=> 'integer|min:0',
                'enabled' => 'boolean'
        ]);

            $pack = ServicePack::create($validated);

            if(!$pack){
                return response()->json(['message'=>'ServicePack could not be created'], 404);
            }

        return response()->json($pack,201);
        //return response()->json(['success' => true,'id' => $pack->id,], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pack = ServicePack::find($id);
        if(!$pack){
            return response()->json(['message'=>'Pack not found'], 405);
        }
        return response()->json($pack,201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $pack = ServicePack::find($id);
            if(!$pack){
                return response()->json(['message'=>'pack not found']);
            };
        $validated = request()-> validate([
                'service_id'=>'sometimes|string|exists:service,id',
                'slug'=>'sometimes|string',
                'title'=>'sometimes|string',
                'subtitle'=>'nullable|string|max:200',
                'description'=>'sometimes|string',
                'price'=>'sometimes|numeric|min:0',
                'advantages'=>'sometimes|array',
                'advantages.*.name'=>'sometimes|string|max:255',
                'advantages.*.type'=>'sometimes|string|in:advantage,disadvantage',
                'is_recommended'=> 'sometimes|boolean',
                'position'=> 'sometimes|intiger|min:0',
                'enabled' => 'sometimes|boolean'
        ]);
        $pack->update($validated);

        return response()->json($pack,201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pack= ServicePack::find($id);
        if(!$pack){
            return response()->json(['message'=>'pack not found']);
        }
        $pack->delete();
        return response()->json(['message'=>'pack deleted'],200);
    }
}
