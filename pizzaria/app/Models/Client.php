<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ClientAddress;

class Client extends Model
{
    protected $primaryKey = 'telephone';
    protected $fillable = ['name', 'telephone'];

    public function aderess() {
        return $this->hasMany(ClientAddress::class, 'client_telephone');
      }

}
