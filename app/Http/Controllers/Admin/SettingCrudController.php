<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SettingRequest as StoreRequest;
use App\Http\Requests\SettingRequest as UpdateRequest;

class SettingCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Setting');
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin') . '/settings');
        $this->crud->setEntityNameStrings('настройки', 'настройки');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // $this->crud->setFromDb();
        $this->crud->allowAccess(['list', 'update']);
        $this->crud->removeButton('delete');
        $this->crud->removeButton('create');
        // ------ CRUD COLUMNS     
        // $this->crud->addColumns([
        //     ['name' => 'title', 'label' => 'Название'],
        //     ['name' => 'status', 'label' => 'Статус'],
        //     ['name' => 'date', 'label' => 'Дата'],
        // ]);

        // ------ CRUD FIELDS
        $this->crud->addFields([
            [
                'label' => 'Название',
                'type' => 'text',
                'name' => 'title',
                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                // 'tab' => 'Контент'
            ],
             [
                'label' => 'Email',
                'type' => 'email',
                'name' => 'email',
                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
            ],
            [
                'label' => 'Email для форм обратной связи',
                'type' => 'email',
                'name' => 'subemail',
                // 'tab' => 'Контент'
            ]
        ]);        
        
        $this->crud->addFields([
            [
                'label' => 'Адрес',
                'type' => 'table',
                'name' => 'address',
                'entity_singular' => '',
                 'columns' => [
                    'name' => '',
                ],
                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                'max' => 5, // maximum rows allowed in the table
                'min' => 1, // minimum rows allowed in the table
                // 'tab' => 'Контакты заведения'
            ],
            [
                'label' => 'Телефоны',
                'type' => 'table',
                'name' => 'phone',
                'entity_singular' => '',
                 'columns' => [
                    'name' => '',
                ],
                'max' => 5, // maximum rows allowed in the table
                'min' => 1, // minimum rows allowed in the table
                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                // 'tab' => 'Контакты заведения'
            ],            
            [
                'label' => 'Facebook',
                'type' => 'text',
                'name' => 'facebook',
                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                // 'tab' => 'Контакты заведения'
            ],
            [
                'label' => 'Instagram',
                'type' => 'text',
                'name' => 'instagram',
                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                // 'tab' => 'Контакты заведения'
            ],
            [
                'label' => 'YouTube',
                'type' => 'text',
                'name' => 'youtube',
                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                // 'tab' => 'Контакты заведения'
            ],
            [
                'label' => 'Twitter',
                'type' => 'text',
                'name' => 'twitter',
                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                // 'tab' => 'Контакты заведения'
            ],
            [
                'label' => 'Текст партнеров на главной',
                'type' => 'text',
                'name' => 'partners',
                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                // 'tab' => 'Контакты заведения'
            ],
        ]);
        // $this->crud->addFields([
        //     [
        //         'name' => 'seo_separator',
        //         'type' => 'custom_html',
        //         'value' => '<h3>SEO</h3><h4>если нету, будет использоватся автогенирация</h4><hr>',
        //         'tab' => 'Seo'
        //     ],
        //     [
        //         'label' => 'Название (title)',
        //         'type' => 'text',
        //         'name' => 'seo_title',
        //         'count_down' => 80,
        //         'attributes' => ['maxlength' => 80],
        //         'tab' => 'Seo'
        //     ],
        //     [
        //         'label' => 'Описание (description)',
        //         'type' => 'textarea',
        //         'name' => 'seo_description',
        //         'count_down' => 155,
        //         'attributes' => ['maxlength' => 155, 'rows' => 3],
        //         'tab' => 'Seo'
        //     ],
        //     [
        //         'label' => 'Ключевые слова (keywords)',
        //         'type' => 'textarea',
        //         'name' => 'seo_keywords',
        //         'count_down' => 180,
        //         'attributes' => ['maxlength' => 180, 'rows' => 3],
        //         'tab' => 'Seo'
        //     ],
        // ]);

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
