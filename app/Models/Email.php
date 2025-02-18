<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    public $timestamps = false;

    protected $fillable = ['subject', 'body', 'sent_count'];
}
