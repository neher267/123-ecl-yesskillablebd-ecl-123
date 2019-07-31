<?php 

namespace App\SkillnAble\Filters;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


abstract class QueryFilter
{
	protected $request;

	protected $builder;


	function __construct(Request $request)
	{
		$this->request = $request;
	}

	public function apply(Builder $builder)
	{
		$this->builder = $builder;
		foreach ($this->filters() as $name => $value) {
			if(method_exists($this, $name) && $value != null)  
			{
				call_user_func_array([$this, $name], array_filter([$value]));
			}			
		}

		return $this->builder;
	}

	public function filters()
	{
		return $this->request->all();
	}
}