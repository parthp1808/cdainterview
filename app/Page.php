<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $casts = ['noindex' => 'boolean'];
}
