<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'position' => 'nullable|string|max:255',
            'office' => 'nullable|string|max:255',
            'age' => 'nullable|integer',
            'start_date' => 'nullable|date',
            'salary' => 'nullable|numeric',
        ]);
    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'position' => $request->position,
            'office' => $request->office,
            'age' => $request->age,
            'start_date' => $request->start_date,
            'salary' => $request->salary,
        ]);
    
        return redirect()->route('users.index')->with('success', 'User added successfully.');
    }

        public function destroy($id)
    {
        $user = \App\Models\User::findOrFail($id); // or use your model if it's different
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }

}
