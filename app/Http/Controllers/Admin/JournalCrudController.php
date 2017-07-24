<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\JournalRequest as StoreRequest;
use App\Http\Requests\JournalRequest as UpdateRequest;

class JournalCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
       
        $this->crud->setModel('App\Models\Journal');
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin') . '/journals');
        $this->crud->setEntityNameStrings('журнал', 'журналы');

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
                'label' => 'Изображение',
                'type' => 'image',
                'name' => 'image',
                'upload' => true,
                'crop' => true,
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-12 image',
                ],
                'aspect_ratio' => 0.77,
            ],
            [
                'label' => 'Журнал в формате PDF',
                'type' => 'upload',
                'name' => 'pdf',
                'upload' => true,
            ],
            [
                'label' => 'Ссылка (купить online)',
                'name' => 'url',
                'type' => 'url',
            ]
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
