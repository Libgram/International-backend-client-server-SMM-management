<?php

namespace App\Providers\Faker;

use Faker\Provider\Lorem;

class SubCategoryProvider extends Lorem
{
    protected static $wordList = [
        'IGTV',
        'Subscribers',
        'Likes',
        'Views',
    ];

}
