<?php 

namespace App\SkillnAble\Traits;

trait Deleteable {
	public function deleteResource($full_path)
	{
		if(file_exists($full_path))
		{
			 return unlink($full_path);
		}

		return 0;
	}
}