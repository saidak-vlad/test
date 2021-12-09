<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'subtitle',
        'name',
        'number',
        'email',

    ];





    public static function add($fields)
    {
        $contact = new static;
        $contact->fill($fields);
        $contact->save();
        return  $contact;
    }

    public function edit($fields)
    {
        $this->fill($fields); //name,email
        $this->save();
    }

}
