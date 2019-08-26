<?php

namespace App\Models;
use App\Models\Pizza;
use App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['total','quantity', 'pizza_id', 'client_telephone'];

    public function pizza() {
        return $this->hasOne(Pizza::class, 'pizza_id');
    }

    public function ingredient() {
        return $this->hasMany(Client::class, 'client_telephone');
    }
}
