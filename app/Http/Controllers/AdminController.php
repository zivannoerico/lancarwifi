<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm() {
        if(Auth::check()) return redirect()->route('admin.dashboard');
        return view('admin.login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }

    public function dashboard() {
        $stats = [
            'packages' => \App\Models\Package::count(),
            'faqs' => \App\Models\Faq::count(),
            'coverages' => \App\Models\Coverage::count(),
            'certifications' => \App\Models\Certification::count(),
        ];
        
        $recentPackages = \App\Models\Package::latest()->take(5)->get();
        $recentFaqs = \App\Models\Faq::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentPackages', 'recentFaqs'));
    }
}
