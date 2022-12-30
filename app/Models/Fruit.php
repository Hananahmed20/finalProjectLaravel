<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fruit extends Model
{
    use SoftDeletes;
     protected $fillable = [
        'name',
        'description',
        'image',
    ];
    //  protected $table = 'fruit';
    // protected $primaryKey = 'id';
    // protected $fillable = ['name','description', 'image'];
}
