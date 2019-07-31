<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public function seccessCase()
    {
    	return $this->hasOne(ProjectType::class);
    }
}
