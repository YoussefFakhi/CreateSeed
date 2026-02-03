<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
    * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Service::all(),200);
    }

    //get single service by ID

    public function show($id){
            $service = Service::find($id);
            if(!$service){
                return  response()->json(['message'=> 'Service not found'], 404);
            }
            return response()->json($service, 200);
    }

    //Create a new Service
    public function store(Request $request)
    {
        $validated = $request->validate([
            'key' => 'required|string|unique:services,key',
            'title' => 'required|string',
            'description' => 'nullable|string',
            'base_price' => 'required|numeric',
            'sla_days' => 'required|integer',
            'enabled' => 'boolean',
            'locale' => 'nullable|string',
        ]);
            $service = Service::create($validated);
            return response()->json($service,201);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::find($id);
        if(!$service){
            return response()->json(['message'=>'service not found'],404);
        }
        $validated = $request->validate([
            //'key' => 'string|unique:services,key,' . $id,
            'title' => 'string',
            'description' => 'nullable|string',
            'base_price' => 'numeric',
            'sla_days' => 'integer',
            'enabled' => 'boolean',
            'locale' => 'nullable|string',
        ]);
        $service->update($validated);
        return response()->json($service,200);
    }

    /**
     * dekite service
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);
        if(!$service){
            return response()->json(['message'=>'service not found'],404);
        }
        $service->delete();
        return response()->json(['message'=>'service deleted'], 200);

    }
}
