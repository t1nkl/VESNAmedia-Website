<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\ContactRequest as StoreRequest;
use App\Http\Requests\ContactRequest as UpdateRequest;

class ContactCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Contact');
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin') . '/contact');
        $this->crud->setEntityNameStrings('заявка', 'заявки');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->enableExportButtons();

        // ------ CRUD COLUMNS     
        $this->crud->addColumns([
            ['name' => 'name', 'label' => 'Имя'],
            ['name' => 'email', 'label' => 'Email'],
            ['name' => 'content', 'label' => 'Контент'],
            ['name' => 'created_at', 'label' => 'Дата'],
        ]);

        $this->crud->orderBy('created_at', 'desc');

        $this->crud->denyAccess(['create', 'update']);

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
