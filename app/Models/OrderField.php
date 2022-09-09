<?php

namespace App\Models;

use App\Enum\OrderFieldsFieldEnum;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\OrderField
 *
 * @property int                             $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int                             $order_id
 * @property int                             $field
 * @property string                          $value
 * @method static Builder|OrderField newModelQuery()
 * @method static Builder|OrderField newQuery()
 * @method static Builder|OrderField query()
 * @method static Builder|OrderField whereCreatedAt($value)
 * @method static Builder|OrderField whereField($value)
 * @method static Builder|OrderField whereId($value)
 * @method static Builder|OrderField whereOrderId($value)
 * @method static Builder|OrderField whereUpdatedAt($value)
 * @method static Builder|OrderField whereValue($value)
 * @mixin \Eloquent
 */
class OrderField extends Model
{
    use HasFactory;

    protected $casts = [
        'field' => OrderFieldsFieldEnum::class,
    ];

    protected function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
