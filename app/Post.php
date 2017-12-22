<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Nombre de la tabla

    protected $table = 'posts';

    //PRimary Key

    public $primarykey = 'id';

    //Timestamps

    public $timestamps = true;

    public function user () {
    return $this->belongsTo('App\User');
    }
}
