<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_category',
        'event_title',
        'event_description',
        'date',
    ];





    public static function add($fields)
    {
        $event = new static;
        $event->fill($fields);
        $event->save();
        return $event;
    }

    public function edit($fields)
    {
        $this->fill($fields); //name,email
        $this->save();
    }
}
