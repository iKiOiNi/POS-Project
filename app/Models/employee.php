<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;


class Employee extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'employees';
    protected $primaryKey = 'employee_id';

    protected $fillable = [
        'firstname',
        'lastname',
        'middle',
        'suffix',
        'age',
        'address',
        'contact_number',
        'gender',
        'role',
        'username',
        'password',
        'status',
        'created_at',
        'updated_at',
        'avatar'
    ];

    public function scopeSearch($query, $value){
        return $query->where('firstname', 'like', '%'.$value.'%')
                    ->orWhere('lastname', 'like', '%'.$value.'%')
                    ->orWhere('middle', 'like', '%'.$value.'%')
                    ->orWhere('suffix', 'like', '%'.$value.'%')
                    ->orWhere('age', 'like', '%'.$value.'%')
                    ->orWhere('address', 'like', '%'.$value.'%')
                    ->orWhere('contact_number', 'like', '%'.$value.'%');

    }



    protected $hidden = [
        'password',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

}
