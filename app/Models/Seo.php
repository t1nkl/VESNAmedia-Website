<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Seo extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'seos';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
   public function getArticleListDescription($category = false)
   {
        if($category && (get_class($category) == 'App\Models\JournalCategory' or get_class($category) == 'App\Models\RecommendCategory'))
        {
            return $this->seo_description.' | '.$category->title;
        }
        return $this->seo_description;
   }
      public function getArticleListTitle($category = false)
   {
        if($category && (get_class($category) == 'App\Models\JournalCategory' or get_class($category) == 'App\Models\RecommendCategory'))
        {
            return $this->seo_title.' | '.$category->title;
        }
        return $this->seo_title;
   }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
