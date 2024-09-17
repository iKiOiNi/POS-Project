<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Item extends Model
{
    use HasFactory;

    protected $primaryKey = 'itemID';
    protected $fillable = [
        'itemName', 'itemCategory', 'description', 'unitPrice', 'status', 'barcode', 'vatApplicable'
    ];

    public function scopeSearch($query, $value)
    {
        return $query->where('itemName', 'like', '%' . $value . '%')
            ->orWhere('itemCategory', 'like', '%' . $value . '%')
            ->orWhere('description', 'like', '%' . $value . '%')
            ->orWhere('unitPrice', 'like', '%' . $value . '%')
            ->orWhere('status', 'like', '%' . $value . '%')
            ->orWhere('barcode', 'like', '%' . $value . '%');
    }

    public function orderItems()
    {
       return $this->hasMany(OrderItem::class, 'itemID', 'itemID');
    }
}
