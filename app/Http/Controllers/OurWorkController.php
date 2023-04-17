<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurWorkController extends Controller
{
    public function index()
    {
        // Site Logo
        $logo_path = '/images/logo.png';
        $new_logo_path = '/images/logo_2.png';

        // banner contact
        $banner_pages = [
            'heading' => 'our work',
        ];

        // Main Content
        $grid_image = [
            'image_1' => 'images/grid_1.png',
            'alt_1' => 'Our Work 1',

            'image_2' => 'images/grid_2.png',
            'alt_2' => 'Our Work 2',

            'image_3' => 'images/grid_3.png',
            'alt_3' => 'Our Work 3',

            'image_4' => 'images/grid_4.png',
            'alt_4' => 'Our Work 4',

            'image_5' => 'images/grid_5.png',
            'alt_5' => 'Our Work 5',
        ];

        return view('pages.our-work', compact('logo_path', 'new_logo_path','banner_pages', 'grid_image'));
    }
}
