<?php

namespace App\Models\Training;

use Illuminate\Database\Eloquent\Model;
use App\Models\Training\Course;

class Category extends Model
{
    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public function courses()
    {
    	return $this->hasMany(Course::class)->orderBy('order');
    }
}
