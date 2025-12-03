<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Order extends Model
{
    use HasFactory;

    protected $table = 'order';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $fillable = [
        'totalAmount',
        'status',
        'userId',
        'deliveryPersonId',
        'restaurantId',
    ];

    
    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class, 'restaurantId');
    }

   
    public function orderLines(): HasMany
    {
        return $this->hasMany(OrderLine::class, 'orderId');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userId');
    }
    
    public function deliveryPerson(): BelongsTo
    {
        return $this->belongsTo(DeliveryPerson::class, 'deliveryPersonId');
    }

   

    protected function casts(): array
    {
        return [
            'totalAmount' => 'decimal:2',
        ];
    }
}
