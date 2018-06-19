<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 6/11/2018
 * Time: 2:01 PM
 */

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;


abstract class FilterAbstract
{
    /**
     * filter throw the courses
     *
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @param string $value
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    abstract public function filter(Builder $builder,string $value):Builder;

    /**
     * create an array of mappings for the filters
     *
     * @return array
     */
    protected function mappings():array
    {
        return [];
    }

    /**
     * get the value that will be filtered with
     *
     * @param string $key
     *
     * @return mixed
     */
    protected function resolveFilterValue(string $key)
    {
        return array_get($this->mappings(),$key);
    }

    /**
     * Resolve the order direction to be used.
     *
     * @param  string $direction
     * @return string
     */
    protected function resolveOrderDirection(string $direction):string
    {
        return array_get([
            'd' => 'desc',
            'a' => 'asc'
        ], $direction, 'desc');
    }

}
