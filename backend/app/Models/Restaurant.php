<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = 'restaurant';

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $fillable = [
        'name',
        'address',
        'latitude',
        'longitude',
        'rating',
        'photo',
        'description',
    ];

    protected function casts(): array
    {
        return [
            'latitude' => 'decimal:8',
            'longitude' => 'decimal:8',
            'rating' => 'decimal:1',
        ];
    }


    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'restaurant_category', 'restaurantId', 'categoryId');
    }

    public function dishes(): HasMany
    {
        return $this->hasMany(Dish::class, 'restaurantId');
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'restaurantId');
    }
}