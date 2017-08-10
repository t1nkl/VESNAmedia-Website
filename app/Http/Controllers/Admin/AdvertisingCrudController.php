<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\AdvertisingRequest as StoreRequest;
use App\Http\Requests\AdvertisingRequest as UpdateRequest;

class AdvertisingCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Advertising');
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin') . '/advertising');
        $this->crud->setEntityNameStrings('рекламу', 'рекламы');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS     
        $this->crud->addColumns([
            ['name' => 'admin_title', 'label' => 'Название для администратора'],
            ['name' => 'title', 'label' => 'Название'],
            ['name' => 'created_at', 'label' => 'Дата создания'],
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
            'name' => 'desktop_separator',
            'type' => 'custom_html',
            'value' => '<h3>Изображение для декстопа</h3><h4>Выберите область которую вы хотите использовать</h4><hr>',
            'tab' => 'Изображение для декстопа'
            ],
            [
            'label' => 'Изображение',
            'type' => 'image',
            'name' => 'desktopimage',
            'upload' => true,
            'crop' => true,
            'aspect_ratio' => 6.26,
            'wrapperAttributes' => [
            'class' => 'form-group col-md-12 image',
            ],
            'hint' => 'не обьязательно для заполнения',
            'tab' => 'Изображение для декстопа'
            ],
            [
            'name' => 'mobile_separator',
            'type' => 'custom_html',
            'value' => '<h3>Изображение для телефона</h3><h4>Выберите область которую вы хотите использовать</h4><hr>',
            'tab' => 'Изображение для телефона'
            ],
            [
            'label' => 'Изображение',
            'type' => 'image',
            'name' => 'mobileimage',
            'upload' => true,
            'crop' => true,
            'aspect_ratio' => 0.6,
            'wrapperAttributes' => [
            'class' => 'form-group col-md-12 image',
            ],
            'hint' => 'не обьязательно для заполнения',
            'tab' => 'Изображение для телефона'
            ],
            [
            'label' => 'Ссылка',
            'type' => 'url',
            'name' => 'url',
            'tab' => 'Контент'
            ],
            [
            'name' => 'status',
            'label' => 'Статус',
            'type' => 'enum',
            'wrapperAttributes' => [
            'class' => 'form-group col-md-4',
            ],
            'tab' => 'Контент'
            ],
            ]);
        $this->crud->addFields([
            [
            'name' => 'event_date_range',
            'start_name' => 'start_date',
            'end_name' => 'end_date',
            'label' => 'Время видимости рекламы',
            'type' => 'date_range',
            'start_default' => '2017-01-01 00:00',
            'end_default' => '2037-12-31 00:00',
            'date_range_options' => [
            'timePicker' => true,
            'locale' => ['format' => 'DD-MM-YYYY HH:mm']
            ],
            'wrapperAttributes' => [
            'class' => 'form-group col-md-8',
            ],
            'hint' => 'Выберите дату и время начала и конца видимости рекламы',
            'tab' => 'Контент'
            ]
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
