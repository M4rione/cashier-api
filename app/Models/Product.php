<?php

namespace App\Models;

use App\Models\SaleDetail;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public $guarded = 'id';

    public function saleDetails()
    {
        return $this->hasMany(SaleDetail::class);
    }
}