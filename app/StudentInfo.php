<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Training\Course;

class StudentInfo extends Model
{
    public function course()
    {
    	return $this->belongsTo(Course::class, 'course_id');
    }
}
