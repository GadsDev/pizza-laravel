<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $primaryKey = 'telephone';
    protected $fillable = ['name', 'telephone'];

}
