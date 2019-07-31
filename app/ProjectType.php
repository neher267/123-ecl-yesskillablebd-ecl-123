<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    public function projects()
    {
    	return $this->hasMany(Project::class);
    }

    public function service()
    {
    	return $this->belongsTo(Service::class);
    }

    public function brands()
    {
    	return $this->hasMany(Project::class, 'brand_id');
    }
}
