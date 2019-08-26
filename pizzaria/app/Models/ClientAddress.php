<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class ClientAddress extends Model
{
    protected $fillable = ['street', 'neighborhood', 'number', 'client_telephone'];

    public function client() {
        return $this->belongsTo(Client::class, 'client_telephone');
    }
}
