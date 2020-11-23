<?php

namespace App\Http\Controllers;

use App\Models\Garage;
use Illuminate\Http\Request;

class GarageController extends Controller
{
    public function addGarage(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:5',
            'description' => 'required|string',
            'address' => 'required|string',
            'status' => 'required|string',
        ]);

        $garage = Garage::create($data);
        return response()->json($garage);
    }

    public function addGarageUpdate($id)
    {
        $upDateGarage = Garage::findOrFail($id)->update([
            'name' => request('name'),
            'description' => request('description'),
            'address' => request('address'),
            'status' => request('status'),
        ]);

        return response()->json($upDateGarage);
    }
    public function addGarageDelete($id)
    {
        $upDateGarage = Garage::findOrFail($id);
        $upDateGarage->delete();
        return response()->json($upDateGarage);
    }
}
