<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AttendantController extends Controller
{
    public function addAttendant(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'access_leve' => 'required|string',
            'profile_picture' => ['required', 'image'],
            'garage_id' => 'required',
        ]);
        $userImage = $request->profile_picture->store('uploads', 'public');
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'access_leve' => $data['access_leve'],
            'profile_picture' => $userImage,
            'garage_id' => $data['garage_id'],
        ]);
        return response()->json($user);
    }
}
