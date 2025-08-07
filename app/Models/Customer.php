<?php

namespace App\Models;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $guarded = 'id';

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
