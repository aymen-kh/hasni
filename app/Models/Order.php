<?php
// app/Models/Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'order_date',
        'status',
        'order_type',
        'total_amount',
        'delivery_address',
        'table_id',
    ];

    
    public function items()
    {
        return $this->belongsToMany(Item::class, 'order_item', 'order_id', 'item_id')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }

    public function updateStatus($status)
    {
        $this->status = $status;
        $this->save();
    }
}
