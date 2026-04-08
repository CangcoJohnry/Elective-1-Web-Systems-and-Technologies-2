<?php

namespace App\Http\Controllers;

use App\Models\{User, ActivityLog};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash};

class AuthController extends Controller
{
    public function edit()
    {
        return view('edit');
    }

    public function update(Request $request)
{
    $user = User::find(Auth::id());
    $user->update($request->all());

    ActivityLog::create([
        'user_id' => $user->id,
        'action' => 'Update Profile',
        'description' => 'User updated their profile information',
        'ip_address' => $request->ip()
    ]);

    return redirect('/profile');
}

    public function register(Request $request)
    {
        $user = User::create($request->all());

        ActivityLog::create([
            'user_id' => $user->id,
            'action' => 'Registration',
            'description' => 'Student registered: ' . $user->student_id,
            'ip_address' => $request->ip()
        ]);

        Auth::login($user);
        return redirect('/dashboard');
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            ActivityLog::create([
                'user_id' => Auth::id(),
                'action' => 'Login',
                'description' => 'User logged in',
                'ip_address' => $request->ip()
            ]);
            return redirect('/dashboard');
        }
        return back();
    }

    public function logout(Request $request)
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'Logout',
            'description' => 'User logged out',
            'ip_address' => $request->ip()
        ]);

        Auth::logout();
        return redirect('/login');
    }
}