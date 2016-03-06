<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function showWeddingPage()
    {
        return view('partials.wedding');
    }

    public function showCelebrationPage()
    {
        return view('partials.celebration');
    }

    public function showReplyPage()
    {
        return view('partials.reply');
    }

    public function showGiftPage()
    {
        return view('partials.gift');
    }
}
