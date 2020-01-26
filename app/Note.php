<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model //class NoteDatabase extends Database
{
    public $timestamps = false;

    protected $fillable = [
        'note_name', 'username', 'use_date', 'content',
    ];
}
