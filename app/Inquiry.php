<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Training\Course;

class Inquiry extends Model
{
    protected $fillable = ['name', 'course_id', 'chield_ids', 'designation', 'email', 'current_institute', 'qualifications', 'mobile', 'message'];

    public function course()
    {
    	return $this->belongsTo(Course::class);
    }
}
