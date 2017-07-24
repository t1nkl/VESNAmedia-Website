<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\ExpertRequest as StoreRequest;
use App\Http\Requests\ExpertRequest as UpdateRequest;

class ExpertCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Expert');
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin') . '/experts');
        $this->crud->setEntityNameStrings('эксперта', 'эксперты');

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
            ['name' => 'status', 'label' => 'Статус']
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
                'type' => 'image',
                'name' => 'image',
                'upload' => true,
                'crop' => true,
                'aspect_ratio' => 1.343,
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-12 image',
                ],
                'tab' => 'Контент'
            ],
            [
                'label' => 'Описание',
                'type' => 'textarea',
                'name' => 'description',
                'count_down' => 265,
                'attributes' => ['maxlength' => 265, 'rows' => 4],
                'tab' => 'Контент'
            ],
            [
                'name' => 'status',
                'label' => 'Статус',
                'type' => 'enum',
                'tab' => 'Контент'
            ]
        ]);
        $this->crud->addFields([
            [
                'label' => 'Ссылка',
                'type' => 'url',
                'name' => 'url',
                'tab' => 'Социальные сети'
            ],
            [
                'label' => 'Facebook',
                'type' => 'text',
                'name' => 'facebook',
                'tab' => 'Социальные сети'
            ],
            [
                'label' => 'Instagram',
                'type' => 'text',
                'name' => 'instagram',
                'tab' => 'Социальные сети'
            ],
            [
                'label' => 'Youtube',
                'type' => 'text',
                'name' => 'youtube',
                'tab' => 'Социальные сети'
            ],
            [
                'label' => 'Twitter',
                'type' => 'text',
                'name' => 'twitter',
                'tab' => 'Социальные сети'
            ]
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
}
