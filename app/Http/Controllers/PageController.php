<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $packages = \App\Models\Package::where('is_active', true)->get();
        $faqs = \App\Models\Faq::where('is_active', true)->get();
        $coverages = \App\Models\Coverage::all();
        $testimonials = \App\Models\Testimonial::all();
        return view('pages.home', compact('packages', 'faqs', 'coverages', 'testimonials'));
    }

    public function packages() {
        $packages = \App\Models\Package::where('is_active', true)->get();
        return view('pages.packages', compact('packages'));
    }

    public function colocation() {
        return view('pages.infrastructure.colocation');
    }

    public function coverage() {
        $coverages = \App\Models\Coverage::all();
        return view('pages.infrastructure.coverage', compact('coverages'));
    }

    public function about() {
        return view('pages.credibility.about');
    }

    public function certifications() {
        $certifications = \App\Models\Certification::where('is_active', true)->get();
        return view('pages.credibility.certifications', compact('certifications'));
    }

    public function contact() {
        return view('pages.help.contact');
    }

    public function faq() {
        $faqs = \App\Models\Faq::where('is_active', true)->get();
        return view('pages.help.faq', compact('faqs'));
    }

    public function speedtest() {
        return view('pages.speedtest');
    }

    public function submitContact(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:100',
            'message' => 'required|string',
        ]);

        \App\Models\Message::create($request->all());

        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim! Tim kami akan segera menghubungi Anda.');
    }
}
