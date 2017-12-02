<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $fillable = ['product_name','product_description', 'created_at'];
}
