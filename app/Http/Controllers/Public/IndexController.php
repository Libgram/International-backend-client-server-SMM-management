<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    use SEOTools;

    public function index()
    {

        $this->seo()->setTitle(__('meta.home_title'));
        $this->seo()->setDescription(__('meta.home_description'));
        $this->seo()->opengraph()->setUrl('http://current.url.com');
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->twitter()->setSite('@LuizVinicius73');
        $this->seo()->jsonLd()->setType('Article');

        return view('public.index');
    }

}
