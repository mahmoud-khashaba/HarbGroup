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

class MenusController extends Controller
{
    use HelpersTrait;

    public function __construct()
    {
        if (config('laravel-admin.modules.galleries') == false) {
            return redirect(config('laravel-admin.route_prefix'))->with('error', 'Gallery module is disabled in config/laravel-admin.php')->send();
        }
    }

     public function getCreate()
    {
        return view('admin::menus.create');
    }

    public function getEdit($menu_id){

        $menu = Menu::with('galleries')->findOrFail($menu_id);
        return view('admin::menus.edit',compact('menu'));

    }


    public function postUpdate(Request $request, $menu_id)
    {
        $menu = Menu::find($menu_id);

        if ($menu->slug != $request->slug && Menu::where(['slug' => $request->slug])->first()) {
            return back()->with(['error' => 'This slug exists']);
        }

        $menu->title = !empty($request->title) ? $request->title : $menu->title;
        $menu->slug = str_slug($request->slug);
        $menu->save();

        return back();
    }

    public function postSave(Request $request)
    {

        $type = 2;

        if (!empty($request->title) || $request->hasFile('images')) {
            $slug = str_slug($request->title);

            if (Menu::where(['slug' => $slug])->first()) {
                return back()->with(['error' => 'Similar gallery exists, so we can create slug('.$slug.'), try deferent title']);
            }

            Menu::create([
                'title' => $request->title,
                'slug'   => $slug,
                'type' => $type
            ]);

            return redirect(config('laravel-admin.route_prefix').'/services');
        } else {
            return back()->with('error', 'Title is required');
        }
    }


    public function getDelete($menu_id){
        $menu = Menu::find($menu_id);
        foreach ($menu->galleries as $gallery) {

            $gallery->delete();
        }
        $menu->delete();

        return redirect(config('laravel-admin.route_prefix').'/services');
    }

  public function getSubCreate($menu_id)
    {
        return view('admin::menus.sub.create',compact('menu_id'));
    }

     public function postSubSave($menu_id,Request $request)
    {
        if (!empty($request->title) || $request->hasFile('images')) {
            $slug = str_slug($request->title);

            if (Gallery::where(['slug' => $slug])->first()) {
                return back()->with(['error' => 'Similar gallery exists, so we can create slug('.$slug.'), try deferent title']);
            }

            Gallery::create([
                'title' => $request->title,
                'slug'   => $slug,
                'menu_id'=>$menu_id,
                'type'=> 2
            ]);

            return redirect(config('laravel-admin.route_prefix').'/services/menu/edit/'.$menu_id);
        } else {
            return back()->with('error', 'Title is required');
        }
    }



 
}
