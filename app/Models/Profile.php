<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class profile extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['created_at' , 'updated_at' , 'deleted_at'];
    protected $fillable = [
        "name",
        "email",
        "password",
        "bio",
        "image",
    ];

    // public function getRouteKeyName(){
    //     return 'id';
    // }

    public function getImageAttribute($value)
    {
        return $value??'profile/defaultProfile.png';
    }
}
