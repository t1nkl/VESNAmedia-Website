<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\AboutRequest as StoreRequest;
use App\Http\Requests\AboutRequest as UpdateRequest;

class AboutCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\About');
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin') . '/about');
        $this->crud->setEntityNameStrings('о нас', 'о нас');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        // ------ CRUD COLUMNS     
        $this->crud->addColumns([
            ['name' => 'title', 'label' => 'Название'],
        ]);

        // ------ CRUD FIELDS
        $this->crud->addFields([
            [
                'label' => 'Контент',
                'type' => 'ckeditor',
                'name' => 'content',
                'tab' => 'Контент'
            ],
            [
                'label' => 'Карта',
                'type' => 'textarea',
                'name' => 'map',
                'attributes' => ['rows' => 4],
                'tab' => 'Контент'
            ]
        ]);
        $this->crud->addFields([
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

        $this->crud->allowAccess(['list', 'update']);
        $this->crud->removeButton('delete');
        $this->crud->removeButton('create');

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
