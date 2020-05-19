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

class GalleriesController extends Controller
{
    use HelpersTrait;

    public function __construct()
    {
        if (config('laravel-admin.modules.galleries') == false) {
            return redirect(config('laravel-admin.route_prefix'))->with('error', 'Gallery module is disabled in config/laravel-admin.php')->send();
        }
    }

    public function getCreate($uri)
    {
        return view('admin::galleries.create',compact('uri'));
    }

    /**
     * Save gallery.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function postSave($uri,Request $request)
    {
         $type = 1 ;
       
        if ($uri =='projects')
            $type = 1 ;
        elseif ($uri =='services') {
            $type = 2 ;
        }

        if (!empty($request->title) || $request->hasFile('images')) {
            $slug = str_slug($request->title);

            if (Gallery::where(['slug' => $slug])->first()) {
                return back()->with(['error' => 'Similar gallery exists, so we can create slug('.$slug.'), try deferent title']);
            }

            Gallery::create([
                'title' => $request->title,
                'slug'   => $slug,
                'type' => $type
            ]);

            return redirect(config('laravel-admin.route_prefix').'/'.$uri);
        } else {
            return back()->with('error', 'Title is required');
        }
    }

    /**
     * Edit gallery.
     *
     * @param string $gallery_title
     *
     * @return \Illuminate\Http\Response
     */
    public function getEdit($uri,$gallery_id)
    {
        $gallery = Gallery::find($gallery_id);
        return view('admin::galleries.edit', compact('gallery','uri'));
    }

    /**
     * Update gallery.
     *
     * @param Request $request
     * @param string  $gallery_title
     *
     * @return \Illuminate\Http\Response
     */
    public function postUpdate($uri,Request $request, $gallery_id, $image_id = false)
    {
        $gallery = Gallery::find($gallery_id);

        if ($gallery->slug != $request->slug && Gallery::where(['slug' => $request->slug])->first()) {
            return back()->with(['error' => 'This slug exists']);
        }

        $this->uploadImages($request->file('images'), $gallery->id, $image_id);

        $gallery->title = !empty($request->title) ? $request->title : $gallery->title;
        $gallery->slug = str_slug($request->slug);
        $gallery->save();

        return back();
    }

    /**
     * Delete gallery and all image.
     *
     * @param string $gallery_title
     *
     * @return \Illuminate\Http\Response
     */
    public function getDelete($uri,$gallery_id)
    {
        $gallery = Gallery::find($gallery_id);

        foreach ($gallery->images as $image) {
            Storage::delete($image->source);

            $image->delete();
        }
        $gallery->delete();

        return redirect(config('laravel-admin.route_prefix').'/'.$uri);
    }

    /**
     * Edit image.
     *
     * @param int $gallery_id, $image_id
     *
     * @return \Illuminate\Http\Response
     */
    public function getImage($uri,$gallery_id, $image_id)
    {
        $image = GalleryImage::find($image_id);

        return view('admin::galleries.image', compact('image', 'gallery_id','uri'));
    }

    

    /**
     * Store a created images in storage.
     *
     * @param array $images
     * @param $gallery_id
     * @param bool $image_id
     *
     * @return bool
     */
    private function uploadImages($images, $gallery_id, $image_id = false)
    {
        if (is_array($images)) {
            foreach (array_filter($images) as $image) {
                $storage_key = $this->saveImageWithRandomName($image, 'galleries/'.$gallery_id);

                $data = [
                    'gallery_id'    => $gallery_id,
                    'source'        => $storage_key,
                ];

                if ($image_id) {
                    GalleryImage::find($image_id)->update($data);
                } else {
                    GalleryImage::create($data);
                }
            }

            return true;
        } else {
            return false;
        }
    }

   
}
