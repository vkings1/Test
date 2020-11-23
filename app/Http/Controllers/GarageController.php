<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GarageController extends Controller
{
    public function index()
    {
        return response()->json('Okay got it');
    }
}
