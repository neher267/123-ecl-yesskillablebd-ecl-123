<?php 

namespace App\SkillnAble\Filters;

use App\SkillnAble\Filters\QueryFilter;

class CourseFilters extends QueryFilter 
{
	
	public function category($id)
	{
		return $this->builder->where('category_id', $id);
	}

	public function fee($price)
	{
		return $this->builder->whereBetween('fee', $this->perseArray($price));
	}

	public function duration($duration)
	{
		return $this->builder->whereBetween('duration', $this->perseArray($duration));
	}

	protected function perseArray($string)
	{
		return explode('-', $string);
	}

}