<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\SaleDetail;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{

    public $guarded = 'id';

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function saleDetails()
    {
        return $this->hasMany(SaleDetail::class);
    }
}
