<?php

namespace App;

use Backpack\CRUD\CrudTrait as OriginalCrudTrait;
use Spatie\Translatable\Events\TranslationHasBeenSet;
use Image;

trait CrudTrait
{
    use OriginalCrudTrait;  

    public function uploadPhotoCropToDisk($value, $attribute_name, $disk, $destination_path, $sizes = 1920 , $quality = 75)
    {
         // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->image);

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            $filename = md5($value.time()).'.jpg';

            $this->makeSizes($destination_path, $value, $sizes, $filename, $quality);
           
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;            
        }
    }

    protected function create_dir($path)
    {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
    }

    protected function saveFile($value, $size, $path, $filename, $quality)
    {
        Image::make($value)
            ->resize($size, null, function ($constraint) {$constraint->aspectRatio();})
            ->encode('jpg')
            ->save($path.'/'.$filename, $quality);
    }

    protected function createFile($destination_path, $value, $folder, $size, $filename, $quality)
    {
        $path = 'uploads/'.$folder.'/'.$destination_path;
        $this->create_dir($path);                 
        $this->saveFile($value, $size, $path, $filename, $quality);
    }

    protected function makeSizes($destination_path, $value, $sizes, $filename, $quality)
    {
        if(is_int($sizes))
        {
            return $this->createFile($destination_path, $value, 'main', $sizes, $filename, $quality);                
        } 
        $this->createFile($destination_path, $value, 'main', 1920, $filename, $quality);                

        foreach($sizes as $folder => $size)
        {
            $this->createFile($destination_path, $value, $folder, $size, $filename, $quality);
        }
        return true;
    }
}