<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = ['name', 'product_id', 'designation', 'email','company','mobile','message','file'];

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
