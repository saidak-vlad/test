<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Headersection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'subtitle',
    ];





    public static function add($fields)
    {
        $headersection = new static;
        $headersection->fill($fields);
        $headersection->save();

        return $headersection;
    }

    public function edit($fields)
    {
        $this->fill($fields); //name,email
        $this->save();
    }


    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }

    public function uploadImage($image)
    {
        if($image == null) { return; }

        $this->removeImage();

        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('uploads', $filename);
        $this->image = $filename;
        $this->save();
    }

    public function removeImage()
    {
        if($this->image != null)
        {
            Storage::delete('uploads/' . $this->iamge);
        }
    }

    public function getImage()
    {
        if($this->image == null)
        {
            return '/img/no-image.png';
        }

        return '/uploads/' . $this->image;
    }


}
