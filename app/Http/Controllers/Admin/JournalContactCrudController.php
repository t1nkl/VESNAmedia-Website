<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\JournalContactRequest as StoreRequest;
use App\Http\Requests\JournalContactRequest as UpdateRequest;

class JournalContactCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\JournalContact');
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin') . '/journal/contact');
        $this->crud->setEntityNameStrings('заявка', 'заявки');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS     
        $this->crud->addColumns([
            ['name' => 'journal_id', 'label' => 'Название журнала', 'type' => 'select', 'entity' => 'journal', 'attribute' => 'title', 'model' => "App\Models\Journal"],
            ['name' => 'name', 'label' => 'Имя'],
            ['name' => 'email', 'label' => 'Email'],
            ['name' => 'phone', 'label' => 'Телефон'],
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
