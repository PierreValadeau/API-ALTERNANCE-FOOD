<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class OrderLine extends Model
{
    use HasFactory;

    protected $table = 'orderLine';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $fillable = [
        'orderId',
        'dishId',
        'quantity',
        'unitPrice',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'orderId');
    }

    public function dish(): BelongsTo
    {
        return $this->belongsTo(Dish::class, 'dishId');
    }



    protected function casts(): array
    {
        return [
            'unitPrice' => 'decimal:2',
        ];
    }
}
