<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name', 'desc', 'uid', 'ipv4', 'port',
    ];
}
