<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LanguageController extends Controller
{

    public function change($lang): RedirectResponse
    {

        if (in_array($lang, config('app.locales'))) {
            session()->put('locale', $lang);
            \App::setLocale($lang);
        }

        return back();
    }
}
