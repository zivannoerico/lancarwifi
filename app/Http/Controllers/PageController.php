<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function packages() {
        $packages = \App\Models\Package::where('is_active', true)->get();
        return view('pages.packages', compact('packages'));
    }

    public function colocation() {
        $colocation = \App\Models\Setting::where('key', 'colocation')->first();
        return view('pages.infrastructure.colocation', compact('colocation'));
    }

    public function coverage() {
        $coverages = \App\Models\Coverage::all();
        return view('pages.infrastructure.coverage', compact('coverages'));
    }

    public function about() {
        $about = \App\Models\Setting::where('key', 'about')->first();
        return view('pages.credibility.about', compact('about'));
    }

    public function certifications() {
        $certifications = \App\Models\Certification::where('is_active', true)->get();
        return view('pages.credibility.certifications', compact('certifications'));
    }

    public function contact() {
        $contact = \App\Models\Setting::where('key', 'contact')->first();
        return view('pages.help.contact', compact('contact'));
    }

    public function faq() {
        $faqs = \App\Models\Faq::where('is_active', true)->get();
        return view('pages.help.faq', compact('faqs'));
    }

    public function speedtest() {
        return view('pages.speedtest');
    }
}
