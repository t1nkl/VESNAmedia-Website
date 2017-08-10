<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\GalleryRequest as StoreRequest;
use App\Http\Requests\GalleryRequest as UpdateRequest;
use App\Http\Requests\DropzoneRequest as DropzoneRequest;

class GalleryCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Gallery');
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin') . '/gallery');
        $this->crud->setEntityNameStrings('галерею', 'галереи');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->allowAccess('reorder');
        $this->crud->enableReorder('title', 1);
        $this->crud->orderBy('rgt');

        // ------ CRUD COLUMNS     
        $this->crud->addColumns([
            ['name' => 'title', 'label' => 'Название'],
            ['name' => 'created_at', 'label' => 'Дата создание'],
            ]);

        // ------ CRUD FIELDS
        $this->crud->addFields([
            [
            'label' => 'Название',
            'type' => 'text',
            'name' => 'title',
            'tab' => 'Контент'
            ],
            [
            'label' => 'Изображение',
            'type' => 'upload',
            'name' => 'image',
            'upload' => true,
            'wrapperAttributes' => [
            'class' => 'form-group col-md-12 image',
            ],
            'tab' => 'Контент'
            ],
            [
            'name' => 'gallery_photos',
            'label' => 'Галерея изображений',
            'type' => 'dropzone',
            'prefix' => 'uploads',
            'upload-url' => '/' . config('backpack.base.route_prefix', 'admin') . '/gallery-dropzone',
            'tab' => 'Контент',
            ]
            ]);
        $this->crud->addFields([
            [
            'name' => 'date',
            'label' => 'Дата',
            'type' => 'date',
            'value' => date('Y-m-d'),
            'tab' => 'Контент'
            ]
            ], 'create');
        $this->crud->addFields([
            [
            'name' => 'date',
            'label' => 'Дата',
            'type' => 'date',
            'tab' => 'Контент'
            ]
            ], 'update');
        $this->crud->addFields([
            [
            'name' => 'seo_separator',
            'type' => 'custom_html',
            'value' => '<h3>SEO</h3><h4>если нету, будет использоватся автогенирация</h4><hr>',
            'tab' => 'Seo'
            ],
            [
            'label' => 'Название (title)',
            'type' => 'text',
            'name' => 'seo_title',
            'count_down' => 80,
            'attributes' => ['maxlength' => 80],
            'tab' => 'Seo'
            ],
            [
            'label' => 'Описание (description)',
            'type' => 'textarea',
            'name' => 'seo_description',
            'count_down' => 155,
            'attributes' => ['maxlength' => 155, 'rows' => 3],
            'tab' => 'Seo'
            ],
            [
            'label' => 'Ключевые слова (keywords)',
            'type' => 'textarea',
            'name' => 'seo_keywords',
            'count_down' => 180,
            'attributes' => ['maxlength' => 180, 'rows' => 3],
            'tab' => 'Seo'
            ],
            ]);

    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function DropzoneUpload(DropzoneRequest $request)
    {
        $disk = "uploads";
        $folder = null !== Gallery::first() ? md5(Gallery::latest()->first()->id + 1) : md5(1);
        $destination_path = "Gallery/".$folder;
        $file = $request->file('file');
        try
        {
            $img = \Image::make($file);
            $width = 2000;
            $height = 1000;
            // we need to resize image, otherwise it will be cropped 
            if ($img->width() > $width) { 
                $img->resize($width, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }

            if ($img->height() > $height) {
                $img->resize(null, $height, function ($constraint) {
                    $constraint->aspectRatio();
                }); 
            }

            // $img->resizeCanvas($width, $height, 'center', false, '#ffffff');
            $filename = md5($file->getClientOriginalName().time()).'.png';
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $img->stream());
            return response()->json(['success' => true, 'filename' => '/'.$disk.'/'.$destination_path . '/' . $filename]);
        }
        catch (\Exception $e)
        {
            if (empty ($image)) {
                return response('Not a valid image type', 404);
            } else {
                return response('Unknown error', 404);
            }
        }
    }
}
