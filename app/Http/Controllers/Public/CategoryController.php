<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(Category $category, string $subCategory = null)
    {

        if (!empty($subCategory)) {
            $subCategory = $category->childCategories()->where(['slug' => $subCategory])->firstOrFail();
        }

        dd($category->toArray(), $subCategory->toArray());

    }
}
