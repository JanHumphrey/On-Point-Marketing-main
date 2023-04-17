<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThankYouController extends Controller
{
    public function index()
    {
        // Site Logo
        $logo_path = '/images/logo.png';
        $new_logo_path = '/images/logo_2.png';

        // Banner Section
        $banner = [
            'heading' => 'Thank you!',
            'subheading' => '  We’ll be in touch by the next business day',
        ];


        return view('pages.thank-you', compact('logo_path', 'new_logo_path','banner'));
    }
}
