<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseItem extends Model
{
    use HasFactory;
    protected $table = 'purchase_item';
    protected $primaryKey = 'purchase_item_id';
    protected $fillable = [
        'purchase_order_id',
        'itemID',
        'quantity',
        'unit_price',
        'total_price'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class, 'itemID');
    }
}
