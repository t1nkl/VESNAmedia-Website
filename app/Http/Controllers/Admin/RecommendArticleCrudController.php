<?php

namespace App\Http\Controllers\Admin;

use App\Models\RecommendArticle;
use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\RecommendArticleRequest as StoreRequest;
use App\Http\Requests\RecommendArticleRequest as UpdateRequest;
use App\Http\Requests\DropzoneRequest as DropzoneRequest;

class RecommendArticleCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\RecommendArticle');
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin') . '/recommend/article');
        $this->crud->setEntityNameStrings('статью', 'статьи');

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
            ['name' => 'status', 'label' => 'Статус'],
            ['name' => 'date', 'label' => 'Дата'],
        ]);

        // ------ CRUD FIELDS
        $this->crud->addFields([
            [
                'label' => 'Название',
                'type' => 'text',
                'name' => 'title',
                'tab' => 'Контент'
            ],
        ]);
        $this->crud->addFields([
            [
                'label' => 'Категория',
                'type' => 'select',
                'name' => 'recommend_category_id',
                'entity' => 'category',
                'attribute' => 'title',
                'model' => "App\Models\RecommendCategory",
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ],
                'tab' => 'Контент'
            ],
            [
                'name' => 'status',
                'label' => 'Статус',
                'type' => 'enum',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3',
                ],
                'tab' => 'Контент'
            ],
        ]);
        $this->crud->addFields([
            [
                'name' => 'date',
                'label' => 'Дата',
                'type' => 'datetime_picker',
                'datetime_picker_options' => [
                    'format' => 'DD-MM-YYYY HH:mm',
                    'language' => 'fr'
                ],
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-5',
                ],
                'tab' => 'Контент'
            ]
        ]);
        $this->crud->addFields([
            [
                'label' => 'Главное изображение',
                'type' => 'image',
                'name' => 'image',
                'upload' => true,
                'crop' => true,
                'aspect_ratio' => 1,
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-12 image',
                ],
                'tab' => 'Контент'
            ],
            [
                'label' => 'Описание',
                'type' => 'textarea',
                'name' => 'description',
                'count_down' => 100,
                'attributes' => ['maxlength' => 100, 'rows' => 3],
                'tab' => 'Контент'
            ],
            [
                'name' => 'recommend_photos',
                'label' => 'Галерея изображений',
                'type' => 'dropzone',
                'prefix' => 'uploads',
                'upload-url' => '/' . config('backpack.base.route_prefix', 'admin') . '/recommend-dropzone',
                'tab' => 'Контент',
            ],
            [
                'label' => 'Контент',
                'type' => 'ckeditor',
                'name' => 'content',
                'attributes' => ['rows' => 14],
                'tab' => 'Контент'
            ],
        ]);
        $this->crud->addFields([
            [
                'name' => 'contact_separator',
                'type' => 'custom_html',
                'value' => '<h3>Контакты заведения</h3><h4>оставьте поле пустым, если нету данных</h4><hr>',
                'tab' => 'Контакты заведения'
            ],
            [
                'label' => 'Карта',
                'type' => 'textarea',
                'name' => 'contact_map',
                'attributes' => ['rows' => 4],
                'tab' => 'Контакты заведения'
            ],
            [
                'label' => 'Адрес',
                'type' => 'table',
                'name' => 'contact_address',
                'entity_singular' => '',
                 'columns' => [
                    'name' => '',
                ],
                'max' => 5, // maximum rows allowed in the table
                'min' => 1, // minimum rows allowed in the table
                'tab' => 'Контакты заведения'
            ],
            [
                'label' => 'Телефон',
                'type' => 'table',
                'name' => 'contact_phone',
                'entity_singular' => '',
                 'columns' => [
                    'name' => '',
                ],
                'max' => 5, // maximum rows allowed in the table
                'min' => 1, // minimum rows allowed in the table
                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                'tab' => 'Контакты заведения'
            ],
            [
                'label' => 'Время работы',
                'type' => 'text',
                'name' => 'contact_timetable',
                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                'tab' => 'Контакты заведения'
            ],
            [
                'label' => 'Facebook',
                'type' => 'text',
                'name' => 'contact_facebook',
                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                'tab' => 'Контакты заведения'
            ],
            [
                'label' => 'Instagram',
                'type' => 'text',
                'name' => 'contact_instagram',
                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                'tab' => 'Контакты заведения'
            ],
            [
                'label' => 'YouTube',
                'type' => 'text',
                'name' => 'contact_youtube',
                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                'tab' => 'Контакты заведения'
            ],
            [
                'label' => 'Ссылка',
                'type' => 'url',
                'name' => 'contact_url',
                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                'tab' => 'Контакты заведения'
            ],
        ]);
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

        $this->crud->enableAjaxTable();

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
        $folder = null !== RecommendArticle::first() ? md5(RecommendArticle::latest()->first()->id + 1) : md5(1);
        $destination_path = "Recommends/".$folder;
        $file = $request->file('file');
        try
        {
            $img = \Image::make($file);
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
