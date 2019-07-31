<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Gloudemans\Shoppingcart\Contracts\Buyable;

class Product extends Model
{
    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * Get the identifier of the Buyable item.
     *
     * @return int|string
     */
    public function getBuyableIdentifier($options = null)
    {
        return $this->id;
    }

    /**
     * Get the description or title of the Buyable item.
     *
     * @return string
     */
    public function getBuyableDescription($options = null)
    {
        return $this->name;
    }

    /**
     * Get the price of the Buyable item.
     *
     * @return float
     */
    public function getBuyablePrice($options = null)
    {
        return (int)$this->price;
    }
}
