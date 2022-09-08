<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Category
 *
 * @property int                                                      $id
 * @property \Illuminate\Support\Carbon|null                          $created_at
 * @property \Illuminate\Support\Carbon|null                          $updated_at
 * @property string                                                   $name
 * @property int|null                                                 $category_id
 * @property int                                                      $sort
 * @method static Builder|Category newModelQuery()
 * @method static Builder|Category newQuery()
 * @method static Builder|Category query()
 * @method static Builder|Category whereCategoryId($value)
 * @method static Builder|Category whereCreatedAt($value)
 * @method static Builder|Category whereId($value)
 * @method static Builder|Category whereName($value)
 * @method static Builder|Category whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property mixed                                                    $meta_title
 * @property mixed                                                    $meta_description
 * @property string                                                   $slug
 * @property string|null                                              $icon
 * @property-read \Illuminate\Database\Eloquent\Collection|Category[] $childCategories
 * @property-read int|null                                            $child_categories_count
 * @property-read Category|null                                       $parentCategory
 * @method static \Database\Factories\CategoryFactory factory(...$parameters)
 * @method static Builder|Category whereIcon($value)
 * @method static Builder|Category whereMetaDescription($value)
 * @method static Builder|Category whereMetaTitle($value)
 * @method static Builder|Category whereSlug($value)
 * @method static Builder|Category whereSort($value)
 */
class Category extends Model
{
    use HasFactory, HasTranslations;

    public array $translatable = ['name', 'meta_title', 'meta_description'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function parentCategory(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function childCategories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
