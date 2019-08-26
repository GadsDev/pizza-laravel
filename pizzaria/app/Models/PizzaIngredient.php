<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pizza;
use App\Models\Ingredient;

class PizzaIngredient extends Model
{
    protected $fillable = ['quantity', 'pizza_id', 'ingredient_id'];

    public function pizza() {
        return $this->hasOne(Pizza::class, 'pizza_id');
    }

    public function ingredient() {
        return $this->hasMany(Ingredient::class, 'ingredient_id');
    }
}
