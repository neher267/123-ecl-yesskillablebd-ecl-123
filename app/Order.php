<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function inquiry()
    {
    	return $this->belongsTo(Inquiry::class);
    }

    public function order_details()
    {
    	return $this->hasMany(OrderDetail::class);
    }
}
