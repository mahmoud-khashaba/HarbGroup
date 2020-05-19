<?php

namespace SystemInc\LaravelAdmin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use Storage;
use SystemInc\LaravelAdmin\Gallery;
use SystemInc\LaravelAdmin\GalleryElement;
use SystemInc\LaravelAdmin\GalleryImage;
use SystemInc\LaravelAdmin\PageElementType;
use SystemInc\LaravelAdmin\Traits\HelpersTrait;
use SystemInc\LaravelAdmin\Validations\PageElementValidation;
use Validator;

class ProjectsController extends Controller
{
    use HelpersTrait;

    public function __construct()
    {
        if (config('laravel-admin.modules.galleries') == false) {
            return redirect(config('laravel-admin.route_prefix'))->with('error', 'Gallery module is disabled in config/laravel-admin.php')->send();
        }
    }

    /**
     * Show all galleries.
     *
     * @return \Illuminate\Http\Response
     */

    public  function  getIndex()
    {
        $galleries = Gallery::where('type',1)->get();
        $uri = 'projects';
        return view('admin::galleries.index', compact('galleries','uri'));
    }

    
}
