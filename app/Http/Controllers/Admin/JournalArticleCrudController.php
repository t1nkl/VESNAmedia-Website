<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\JournalArticleRequest as StoreRequest;
use App\Http\Requests\JournalArticleRequest as UpdateRequest;

class JournalArticleCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\JournalArticle');
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin') . '/journal/article');
        $this->crud->setEntityNameStrings('статью', 'статьи');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS     
        $this->crud->addColumns([
            ['name' => 'title', 'label' => 'Название'],
            ['label' => 'Категория', 'type' => 'select', 'name' => 'journal_category_id', 'entity' => 'category', 'attribute' => 'title', 'model' => "App\Models\JournalCategory"],
            ['label' => 'Автор', 'type' => 'select', 'name' => 'author_id', 'entity' => 'author', 'attribute' => 'title', 'model' => "App\Models\Expert"],
            ['name' => 'status', 'label' => 'Статус'],
        ]);

        // ------ CRUD FIELDS
        //,
        $this->crud->addField( [
                'label' => 'Название',
                'type' => 'text',
                'name' => 'title',
                'count_down' => 191,
                'attributes' => ['maxlength' => 191],
                'tab' => 'Контент'
            ]);
        $this->crud->addField(['name' => 'slug', 'label' => 'Slug (URL)', 'type' => 'text', 'tab' => 'Контент'],'update');
        $this->crud->addFields([            
            [
                'label' => 'Категория',
                'type' => 'select',
                'name' => 'journal_category_id',
                'entity' => 'category',
                'attribute' => 'title',
                'model' => "App\Models\JournalCategory",
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ],
                'tab' => 'Контент'
            ],
            [
                'label' => 'Автор (Эксперт)',
                'type' => 'select2',
                'name' => 'author_id',
                'entity' => 'author',
                'attribute' => 'title',
                'model' => "App\Models\Expert",
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ],
                'tab' => 'Контент'
            ],
            [
                'label' => 'Изображение',
                'type' => 'upload',
                'name' => 'image',
                'upload' => true,
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-12 image',
                ],
                'tab' => 'Контент'
            ],
            [
                'label' => 'Изображение',
                'type' => 'image',
                'name' => 'minimage',
                'upload' => true,
                'crop' => true,
                'aspect_ratio' => 1.5,
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-12 image',
                ],
                'tab' => 'Контент'
            ],
            [
                'label' => 'Контент',
                'type' => 'ckeditor',
                'name' => 'content',
                'attributes' => ['rows' => 14],
                'tab' => 'Контент'
            ],
            [
                'label' => 'Мини описание',
                'type' => 'textarea',
                'name' => 'mini',
                'count_down' => 191,
                'attributes' => ['rows' => 3, 'maxlength' => 191],
                'tab' => 'Контент'
            ],
            [
                'name' => 'status',
                'label' => 'Статус',
                'type' => 'enum',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ],
                'tab' => 'Контент'
            ]
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
                    'class' => 'form-group col-md-6',
                ],
                'tab' => 'Контент'
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
        $this->crud->orderBy('created_at', 'desc');

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
