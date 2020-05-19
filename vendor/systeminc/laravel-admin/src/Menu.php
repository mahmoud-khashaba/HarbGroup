<?php

namespace SystemInc\LaravelAdmin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
     protected $table = 'menus';

    protected $fillable = [
        'title',
        'slug'
    ];

     public function galleries()
    {
        // return $this->hasMany('SystemInc\LaravelAdmin\Gallery')->orderBy('order_number');
        return $this->hasMany('SystemInc\LaravelAdmin\Gallery');

    }

}
