<?php

namespace App\Models\Training;

use Illuminate\Database\Eloquent\Model;
use App\SkillnAble\Filters\CourseFilters;
use App\User;

class Course extends Model
{
    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public function scopeFilter($query, CourseFilters $filters) 
    {
        return $filters->apply($query);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function students()
    {
    	return $this->belongsToMany(User::class,'course_student', 'course_id', 'student_id')->withTimestamps();
    }

    public function active_students()
    {
    	return $this->belongsToMany(User::class,'course_student', 'course_id', 'student_id')->wherePivot('active', 1);
    }

    public static function popular() {
        return static::where('status', 1)->orderBy('order')->limit(4)->get();
    }

    public function chieldCourses() {
        return $this->hasMany(Course::class, 'parent_id');
    }
    
}
