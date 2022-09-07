<?php

namespace App\Providers\Faker;

use Faker\Provider\Lorem;

class CategoryProvider extends Lorem
{
    protected static $wordList = [
        'Instagram',
        'Vkontakte',
        'Youtube',
        'TikTok',
    ];

}
