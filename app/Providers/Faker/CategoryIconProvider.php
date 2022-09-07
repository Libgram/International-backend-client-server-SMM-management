<?php

namespace App\Providers\Faker;

use Faker\Provider\Lorem;

class CategoryIconProvider extends Lorem
{
    protected static $wordList = [
        'fas fa-play',
        'fas fa-user-plus',
        'fas fa-heart',
        'fas fa-eye',
    ];

}
