<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(Category $category, string $subCategory = null): View
    {


        $currentCategory = $category;
        if ($subCategory ?? null) {
            $currentCategory = $category->childCategories()->where(['slug' => $subCategory])->firstOrFail();

            /* @var \App\Models\Category $currentCategory */
            $products = $currentCategory->products()->get();
        } else {
            $products = $currentCategory->products()->get();
            foreach ($category->childCategories as $childCategory)
            {
                $products = $products->merge($childCategory->products()->get());
            }
        }


        return view('public.category', ['category' => $currentCategory, 'products' => $products]);

    }
}
