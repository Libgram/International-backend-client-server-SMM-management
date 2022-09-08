<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class LangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        LanguageLine::query()->truncate();;

        LanguageLine::query()->create([
            'group' => 'meta',
            'key' => 'home_title',
            'text' => ['en' => 'Welcome', 'ru' => 'Добро пожаловать'],
        ]);

        LanguageLine::query()->create([
            'group' => 'meta',
            'key' => 'home_description',
            'text' => ['en' => 'Welcome description', 'ru' => 'Добро пожаловать описание'],
        ]);
    }
}
