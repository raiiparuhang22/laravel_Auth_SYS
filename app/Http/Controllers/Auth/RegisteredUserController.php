<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    public function create(): View
    {
        // Show admin registration form
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        // Validate admin registration input
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:admins,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Create new admin record
        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Fire registered event
        event(new Registered($admin));

        // Login admin (make sure your auth guard for admins is set up)
        Auth::guard('admin')->login($admin);

        // Redirect to admin dashboard or desired route
        return redirect()->route('dashboard');
    }
}
