<?php

namespace Database\Factories;

use App\Models\Category;
use App\Providers\Faker\CategoryIconProvider;
use App\Providers\Faker\CategoryProvider;
use App\Providers\Faker\SubCategoryProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new CategoryProvider($faker));
        $name = $faker->word();

        $fakerIcon = \Faker\Factory::create();
        $fakerIcon->addProvider(new CategoryIconProvider($faker));
        $icon = $fakerIcon->word();

        $usingParent = Category::count() ? Category::query()->whereNull('category_id')->pluck('id')->random() : null;

        if ($usingParent) {
            $fakerSubCategory = \Faker\Factory::create();
            $fakerSubCategory->addProvider(new SubCategoryProvider($faker));
            $name = $fakerSubCategory->word();
        }

        return [
            'name'             => ['en' => $name, 'ru' => $name],
            'meta_title'       => ['en' => $name, 'ru' => $name],
            'meta_description' => ['en' => $this->faker->text(), 'ru' => $this->faker->text()],
            'slug'             => strtolower(Str::slug($name)),
            'icon'             => $icon,
            'category_id'      => $usingParent,
            'sort'             => (new \Faker\Generator())->numberBetween(100, 500),
        ];
    }
}
