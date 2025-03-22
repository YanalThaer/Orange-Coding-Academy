<?php

namespace App\Http\Controllers;

use App\Models\Reigistertion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ReigistertionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('register.login');
    }

    public function login(Request $request)
    {


        $user = Reigistertion::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['error' => 'Email or password is incorrect!']);

        }

        Auth::login($user);

        if (Auth::user()->role === 'admin') {
            return redirect('/products');
        }
        return redirect('/');
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('register.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:reigistertions',
            'phone' => 'required|digits_between:8,15',
            'password' => 'required|min:6|confirmed',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = Reigistertion::create($validated);


         Auth::login($user);
         return redirect('/')->with('success', 'Registration successful! You can now log in 🎉');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reigistertion $reigistertion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reigistertion $reigistertion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reigistertion $reigistertion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reigistertion $reigistertion)
    {
        //
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'تم تسجيل الخروج بنجاح 🎉');
    }
}
