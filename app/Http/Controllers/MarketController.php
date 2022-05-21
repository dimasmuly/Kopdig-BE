<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function market()
    {
        return view('pages.market.index');
    }
}
