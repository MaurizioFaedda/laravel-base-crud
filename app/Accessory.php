<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    protected $fillable = ['brand', 'model', 'categories', 'price'];

}
