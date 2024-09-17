<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;
    protected $table = 'purchase_order';
    protected $primaryKey = 'purchase_order_id';
    protected $fillable = [
        'SupplierId',
        'quantity',
        'total_price',
        'order_date',
        'delivery_date',
        'status'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'SupplierId');
    }
    public function items()
    {
        return $this->hasMany(PurchaseItem::class, 'purchase_order_id');
    }

}
