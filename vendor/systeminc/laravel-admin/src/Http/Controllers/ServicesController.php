<?php

namespace SystemInc\LaravelAdmin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use Storage;
use SystemInc\LaravelAdmin\Gallery;
use SystemInc\LaravelAdmin\Menu;
use SystemInc\LaravelAdmin\GalleryImage;
use SystemInc\LaravelAdmin\Traits\HelpersTrait;
use Validator;

class ServicesController extends Controller
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
    public function getIndex()
    {

        $services = Gallery::where('type',2)->whereNull('menu_id')->get();
        $menus = Menu::all();

        return view('admin::services.index', compact('services','menus'));
    }


   
 
}
