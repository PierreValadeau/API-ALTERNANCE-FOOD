<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Dish extends Model
{
    use HasFactory;

    protected $table = 'dish';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $fillable = [
        'name',
        'photo',
        'description',
        'price',
        'restaurantId',
    ];

    
    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class, 'restaurantId');
    }

   
    public function orderLines(): HasMany
    {
        return $this->hasMany(OrderLine::class, 'dishId');
    }

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
        ];
    }
}
