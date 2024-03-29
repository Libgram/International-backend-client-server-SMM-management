<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $slug
 * @property mixed|null $images
 * @property string|null $short_description
 * @property string|null $description
 * @property float $price
 * @property float $old_price
 * @method static Builder|Product newModelQuery()
 * @method static Builder|Product newQuery()
 * @method static Builder|Product query()
 * @method static Builder|Product whereCreatedAt($value)
 * @method static Builder|Product whereDescription($value)
 * @method static Builder|Product whereId($value)
 * @method static Builder|Product whereImages($value)
 * @method static Builder|Product whereName($value)
 * @method static Builder|Product whereOldPrice($value)
 * @method static Builder|Product wherePrice($value)
 * @method static Builder|Product whereShortDescription($value)
 * @method static Builder|Product whereSlug($value)
 * @method static Builder|Product whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property mixed $meta_title
 * @property mixed $meta_description
 * @method static Builder|Product whereMetaDescription($value)
 * @method static Builder|Product whereMetaTitle($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $inCategories
 * @property-read int|null $in_categories_count
 * @method static \Database\Factories\ProductFactory factory(...$parameters)
 * @method static \Illuminate\Database\Query\Builder|Product onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|Product withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Product withoutTrashed()
 */
class Product extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;

    public array $translatable = ['name', 'meta_title', 'meta_description', 'short_description', 'description'];

    protected $casts = [
        'images'=>AsArrayObject::class,
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function inCategories(): HasManyThrough
    {
        return $this->hasManyThrough(Category::class, ProductCategory::class);
    }

}
