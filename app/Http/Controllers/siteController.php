<?php

namespace App\Http\Controllers;

use App\Models\TextWidget;
use Illuminate\Http\Request;
use Illuminate\View\View;

class siteController extends Controller
{
    public function about(): View
    {
        $widget = TextWidget::query()
            ->where('active', '=', true)
            ->where('key', '=', 'about-us-page')
            ->first();

        if (!$widget) {
            throw new \Exception('Widget not found');
        }

        return view('about', compact('widget'));
    }
}
