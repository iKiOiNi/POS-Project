<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $table = 'inventory';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'item_id',
        'qtyonhand',
        'expiry_date',
        'date_received'
    ];

    public function item(){
        return $this->belongsTo(Item::class, 'itemID', 'itemID');
    }

    public function scopeSearch($query, $value){
        return $query->where('itemID', 'like', '%'.$value.'%')
                    ->orWhere('qtyonhand', 'like', '%'.$value.'%')
                    ->orWhere('expiry_date', 'like', '%'.$value.'%')
                    ->orWhere('date_received', 'like', '%'.$value.'%')
                    ->orWhereHas('item', function($query) use ($value){
                        $query->where('itemName', 'like', '%'.$value.'%')
                            ->orWhere('itemCategory', 'like', '%'.$value.'%');
                    });
    }


}
