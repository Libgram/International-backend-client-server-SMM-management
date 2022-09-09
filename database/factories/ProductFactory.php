<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'meta_title'       => ['en' => $this->faker->text(100), 'ru' => $this->faker->text(100)],
            'meta_description' => ['en' => $this->faker->text(), 'ru' => $this->faker->text()],
            'name'              => ['en' => $this->faker->text(100), 'ru' => $this->faker->text(100)],
            'slug'              => $this->faker->slug,
            'short_description' => $this->faker->text(200),
            'description'       => $this->faker->text(1000),
            'price'             => $this->faker->randomFloat(2),
            'old_price'         => $this->faker->randomFloat(2),
        ];

    }

    public function configure()
    {
        return $this->afterCreating(function (Product $product) {
            $productCategory = new ProductCategory();
            $productCategory->product()->associate($product);
            $productCategory->category()->associate(Category::query()->whereNotNull('category_id')->get()->random());
            $productCategory->save();
        });
    }
}
