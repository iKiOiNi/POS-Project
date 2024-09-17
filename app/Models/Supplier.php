<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    public $timestamps = false;
    protected $primaryKey = 'SupplierId';
    protected $fillable = [
        'CompanyName',
        'ContactPerson',
        'ContactNumber',
        'Address',
        'Status',
    ];


    public function scopeSearch($query, $value){
        return $query->where('CompanyName', 'like', '%'.$value.'%')
            ->orWhere('ContactPerson', 'like', '%'.$value.'%')
            ->orWhere('ContactNumber', 'like', '%'.$value.'%')
            ->orWhere('Address', 'like', '%'.$value.'%')
            ->orWhere('Status', 'like', '%'.$value.'%');
    }
}
