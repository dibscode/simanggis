<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
        return response()->json([
            'success' => true,
            'message' => 'User berhasil ditampilkan',
            'data' => $users,
        ], 200);
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function store(Request $request)
    {
        return User::create($request->only(['username', 'password', 'role']));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->only(['username', 'password', 'role']));
        return $user;
    }

    public function destroy($id)
    {
        return User::destroy($id);
    }
}

