<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = ['category','image'];

public function stores()
{
    return $this->hasMany(Place::class);

}


public static function boot() {
        parent::boot();

        static::deleting(function($storeCategory) {
             $storeCategory->stores()->delete();
        });
}
}