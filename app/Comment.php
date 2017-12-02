<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $fillable = ['post_id','comment'];
    public $timestamps = false;
}
