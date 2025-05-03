<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::create($validatedData);

        return redirect()->route('users.index', ['id' => $user->id]);
    }

    /**
     * Display the specified resource.
     */
    public function detail(User $user, $id)
    {
        $user = User::findOrFail($id); 
        return view('users.detail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user, $id)
    {
        $user = User::findOrFail($id);
        return view('users.detail', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::findOrFail($id);
        $user->update($validatedData);

        return redirect()->route('users.detail', ['id' => $user->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
