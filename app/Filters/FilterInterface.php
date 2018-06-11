<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 6/11/2018
 * Time: 2:01 PM
 */

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;


interface FilterInterface
{
    /**
     * filter throw the courses
     *
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @param string $value
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function filter(Builder $builder,string $value):Builder;
}
