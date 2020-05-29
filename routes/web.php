<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use SystemInc\LaravelAdmin\Gallery;
use SystemInc\LaravelAdmin\Menu;

Route::get('/', function () {

    return redirect('/home');
});

Route::get('/home', function () {

     $projects = Gallery::where('type',1)->get();
     $services = Gallery::where('type',2)->whereNull('menu_id')->get();
     $menus = Menu::with('galleries')->get();
    return view('index',compact('projects','services','menus'));
});

Route::get('/home', function () {

	 $projects = Gallery::where('type',1)->get();
     $services = Gallery::where('type',2)->whereNull('menu_id')->get();
     $menus = Menu::with('galleries')->get();
    return view('index',compact('projects','services','menus'));
});

Route::get('/projects', function () {

	 $projects = Gallery::where('type',1)->get();
     $services = Gallery::where('type',2)->whereNull('menu_id')->get();
     $menus = Menu::with('galleries')->get();

    return view('projects',compact('projects','services','menus'));
});

Route::get('/services', function () {

	 $projects = Gallery::where('type',1)->get();
     $services = Gallery::where('type',2)->whereNull('menu_id')->get();
     $menus = Menu::with('galleries')->get();

    return view('services',compact('projects','services','menus'));
});

Route::get('/projects/{project_slug}', function ($project_slug) {

	 $projects = Gallery::where('type',1)->get();
     $services = Gallery::where('type',2)->whereNull('menu_id')->get();
     $menus = Menu::with('galleries')->get();
     $project = Gallery::where('type',1)->where('slug',$project_slug)->first();

    return view('project',compact('projects','services','menus','project'));
});


Route::get('/services/{service_slug}', function ($service_slug) {

	 $projects = Gallery::where('type',1)->get();
     $services = Gallery::where('type',2)->whereNull('menu_id')->get();
     $menus = Menu::with('galleries')->get();
     $service = Gallery::where('type',2)->where('slug',$service_slug)->first();

    return view('service',compact('projects','services','menus','service'));
});


Route::get('services/menu/{menu_slug}', function ($menu_slug) {

	 $projects = Gallery::where('type',1)->get();
     $services = Gallery::where('type',2)->whereNull('menu_id')->get();
     $menus = Menu::with('galleries')->get();
     $menu = Menu::with('galleries')->where('slug',$menu_slug)->first();
    return view('menu',compact('projects','services','menus','menu'));
});

Route::get('about', function () {

     $projects = Gallery::where('type',1)->get();
     $services = Gallery::where('type',2)->whereNull('menu_id')->get();
     $menus = Menu::with('galleries')->get();
    return view('about',compact('projects','services','menus'));
});

Route::get('contact', function () {

     $projects = Gallery::where('type',1)->get();
     $services = Gallery::where('type',2)->whereNull('menu_id')->get();
     $menus = Menu::with('galleries')->get();
    return view('contact',compact('projects','services','menus'));
});