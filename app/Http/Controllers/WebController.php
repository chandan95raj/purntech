<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{

    //index
    public function indexView()
    {
        $headerdata=[
            'meta_title' => 'PurnTech - Home',
            'meta_description' => 'PurnTech provides reliable API solutions for BBPS, Verification, Payout, and Collection services.',
            'meta_keywords' => 'purntech, BBPS API, fintech solutions',
            'meta_url' => url('/'),
            'meta_type' => 'website',
            'site_name' => 'PurnTech',
            'meta_image' => asset('assets/img/logo/favicon.png'),
            'schema'=> "<script type='application/ld+json'>{'@context': 'https://schema.org','@type': 'WebPage','name': 'PurnTech Home','url': '".url('/')."','description': 'PurnTech - Your trusted technology partner for BBPS, Verification, and Payout APIs.'}</script>"
        ];
        
        return view('web.index',compact('headerdata'));
    }
}
