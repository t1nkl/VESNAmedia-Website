<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\SliderRequest as StoreRequest;
use App\Http\Requests\SliderRequest as UpdateRequest;

class SliderCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Slider');
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin') . '/slider');
        $this->crud->setEntityNameStrings('слайд', 'слайды');

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
            ]);

        // ------ CRUD FIELDS
        $this->crud->addFields([
            [
            'label' => 'Название',
            'type' => 'text',
            'name' => 'title',
            ],
            [
            'label' => 'Описание',
            'type' => 'textarea',
            'name' => 'description',
            'attributes' => ['rows' => 5],
            ],
            [
            'label' => 'Изображение',
            'type' => 'image',
            'name' => 'image',
            'upload' => true,
            'crop' => true,
            'aspect_ratio' => 1.73,
            'wrapperAttributes' => [
            'class' => 'form-group col-md-12 image',
            ],
            ],
            [
            'label' => 'Мобильное изображение',
            'type' => 'image',
            'name' => 'image_mobile',
            'upload' => true,
            'crop' => true,
            'aspect_ratio' => .45,
            'wrapperAttributes' => [
            'class' => 'form-group col-md-12 image',
            ],
            ],
            [
            'name' => 'status',
            'label' => 'Статус',
            'type' => 'enum',
            'wrapperAttributes' => [
            'class' => 'form-group col-md-4',
            ],
            ],
            [
            'label' => 'Ссылка',
            'type' => 'url',
            'name' => 'url',
            'wrapperAttributes' => [
            'class' => 'form-group col-md-8',
            ],
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
}
