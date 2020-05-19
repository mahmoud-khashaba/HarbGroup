<?php

namespace SystemInc\LaravelAdmin;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';

    protected $fillable = [
        'title',
        'slug',
        'menu_id',
        'type'


    ];

    // type 1 project gallery .. 2 service 

    public function images()
    {
        return $this->hasMany('SystemInc\LaravelAdmin\GalleryImage')->orderBy('order_number');
    }

    
}
