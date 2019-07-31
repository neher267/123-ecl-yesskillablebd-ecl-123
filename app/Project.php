<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProjectType;

class Project extends Model
{
    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public function projec_type()
    {
    	return $this->belongsTo(ProjectType::class, 'project_type_id','id');
    }

    public function brand()
    {
    	return $this->belongsTo(Brand::class);
    }

}
