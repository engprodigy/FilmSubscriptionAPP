<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //
    protected $table = 'films';
    protected $primaryKey = 'film_id';
    protected $fillable = ['name','description','releasedate','comment','rating','ticketprice','country','genre','photo'];
    public $timestamps = false;
}
