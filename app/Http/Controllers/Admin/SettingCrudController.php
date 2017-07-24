<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

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

        $this->crud->allowAccess(['list', 'update']);
        $this->crud->removeButton('delete');
        $this->crud->removeButton('create');

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
