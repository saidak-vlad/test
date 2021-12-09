<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Logotype extends Model
{
    use HasFactory;

    protected $fillable = [
        'copyright',
        'imagelogotype',
        'imagelogos',

    ];


    public static function add($fields)
    {
        $logotype = new static;
        $logotype->fill($fields);
        $logotype->save();

        return $logotype;
    }

    public function edit($fields)
    {
        $this->fill($fields); //name,email

        $this->save();
    }


    public function remove()
    {
        $this->removeImagelogotype();
        $this->removeImagelogos();
        $this->delete();
    }

    public function uploadImagelogotype($image)
    {
        if ($image == null) {
            return;
        }
        $this->removeImagelogotype();
        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('uploads', $filename);
        $this->imagelogotype = $filename;
        $this->save();
    }

    public function removeImagelogotype()
    {
        if ($this->Imagelogotype != null) {
            Storage::delete('uploads/' . $this->Imagelogotype);
        }
    }
    public function getImages()
    {
        if ($this->imagelogotype == null) {
            return '/img/no-image.png';
        }
        return '/uploads/' . $this->imagelogotype;
    }



    public function uploadImagelogos($image)
    {
        if ($image == null) {
            return;
        }
        $this->removeImagelogos();
        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('uploads', $filename);
        $this->imagelogos = $filename;
        $this->save();
    }

    public function removeImagelogos()
    {
        if ($this->imagelogos != null) {
            Storage::delete('uploads/' . $this->imagelogos);
        }
    }

    public function getImage()
    {
        if ($this->imagelogos == null) {
            return '/img/no-image.png';
        }
        return '/uploads/' . $this->imagelogos;
    }

}
