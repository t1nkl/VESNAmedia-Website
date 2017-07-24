<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class RecommendArticle extends Model
{
    use CrudTrait;
    use Sluggable, SluggableScopeHelpers;
    use Searchable;
     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'recommend_articles';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];
    protected $casts = [
        'recommend_photos' => 'array',
        'datetime' => 'datetime',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug_or_title',
            ],
        ];
    }
    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        return $this->makeHidden('image')->makeHidden('recommend_photos')->toArray();
    }

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public static function getPublishedArticle()
    {
        return self::published()->paginate(12);
    }

    public static function getAllPublishedArticle()
    {
        return self::where('status', 'PUBLISHED')->get();
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function category()
    {
        return $this->belongsTo('App\Models\RecommendCategory', 'recommend_category_id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    public function scopePublished($query)
    {
        return $query->where('status', 'PUBLISHED')->orderBy('rgt');
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    // The slug is created automatically from the "title" field if no slug exists.
    public function getSlugOrTitleAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }

        return str_slug($this->title);
    }

    public function getLinkAttribute()
    {
        return '/recommend/'.$this->slug;
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "uploads";
        $folder = null !== self::first() ? md5(self::latest()->first()->id + 1) : md5(1);
        $destination_path = "Recommends/".$folder;
        $image_width = 300;

        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->image);

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value)->resize($image_width, NULL, function ($constraint) {
                $constraint->aspectRatio();
            });
            // 1. Generate a filename.
            $filename = md5($value.time()).'.png';

            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());

            // 3. Save the path to the database
            $this->attributes[$attribute_name] = '/'.$disk.'/'.$destination_path.'/'.$filename;
        }
    }

    public function setDatetimeAttribute($value) {
        $this->attributes['datetime'] = \Date::parse($value);
    }
    public function setContactmapAttribute($value) {
        preg_match("/.*width=\"([0-9]*)\"/", $value, $vals);
        $value = str_replace('width="'.$vals[1].'"', 'width="705"', $value);
        preg_match("/.*height=\"([0-9]*)\"/", $value, $vals);
        $value = str_replace('height="'.$vals[1].'"', 'height="620" style="border:0; margin-top: -150px;"', $value);
        $this->attributes['contact_map'] = $value;
    }

}
