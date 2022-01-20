<?php 

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class ApplicationFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function type($type)
    {
    	return $this->where(function($t) use ($type){
    		return $t->where('job_type', 'LIKE', "%$type%");
    	});
    }

    public function role($role)
    {
        return $this->where(function($r) use ($role){
            return $r->where('career', 'LIKE', "%$role%");
        });
    }

    public function location($location)
    {
        return $this->where(function($l) use ($location){
            return $l->where('location', 'LIKE', "%$location%");
        });
    }
}
