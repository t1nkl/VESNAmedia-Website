<?php

namespace App\Http\Controllers\Admin;

use App\Models\RecommendArticle;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
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
        // $this->crud->addFields([
        //     [
        //         'name' => 'event_date_range',
        //         'start_name' => 'start_date',
        //         'end_name' => 'end_date',
        //         'label' => 'Время видимости статьи',
        //         'type' => 'date_range',
        //         'start_default' => '2017-01-01 00:00',
        //         'end_default' => '2037-12-31 00:00',
        //         'date_range_options' => [
        //             'timePicker' => true,
        //             'locale' => ['format' => 'DD-MM-YYYY HH:mm']
        //         ],
        //         'tab' => 'Контент',
        //         'wrapperAttributes' => [
        //             'class' => 'form-group col-md-5',
        //         ],
        //         'hint' => 'Выберите дату и время начала и конца видимости публикации',
        //     ]
        // ]);
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
                'name' => 'recommend_photos',
                'label' => 'Галерея изображений',
                'type' => 'dropzone',
                'prefix' => 'uploads',
                'upload-url' => '/' . config('backpack.base.route_prefix', 'admin') . '/recommend-dropzone',
                'tab' => 'Контент',
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
                'label' => 'Контент',
                'type' => 'tinymce',
                'attributes' => ['rows' => 12],
                'name' => 'content',
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
                'type' => 'text',
                'name' => 'contact_address',
                'tab' => 'Контакты заведения'
            ],
            [
                'label' => 'Телефон',
                'type' => 'text',
                'name' => 'contact_phone',
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

        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function store(StoreRequest $request)
    {
        // if (empty ($request->get('gallery_photos'))) {
        //     $this->crud->update(\Request::get($this->crud->model->getKeyName()), ['gallery_photos' => '[]']);
        // }
        // your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // if (empty ($request->get('gallery_photos'))) {
        //     $this->crud->update(\Request::get($this->crud->model->getKeyName()), ['gallery_photos' => '[]']);
        // }
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
            $image = \Image::make($file);
            $filename = md5($file->getClientOriginalName().time()).'.png';
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
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
