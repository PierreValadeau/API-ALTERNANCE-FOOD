<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DeliveryPerson extends Model
{
    use HasFactory;

    protected $table = 'deliveryPerson';
    
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phoneNumber',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'deliveryPersonId');
    }
}