<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 6/11/2018
 * Time: 12:23 PM
 */

namespace App\Filters\Course;


use Illuminate\Database\Eloquent\Builder;
use App\Filters\FilterInterface;

class AccessFilter implements FilterInterface
{
    /**
     * filter throw courses by the access state free or premium
     *
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @param string $value
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function filter(Builder $builder,string $value): Builder
    {
        $value = ($value === 'free'? true : false);
        return $builder->where('free',$value);
    }
}
