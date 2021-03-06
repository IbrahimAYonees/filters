<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 6/11/2018
 * Time: 12:23 PM
 */

namespace App\Filters\Course;


use Illuminate\Database\Eloquent\Builder;
use App\Filters\FilterAbstract;

class AccessFilter extends FilterAbstract
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
        $value = $this->resolveFilterValue($value);
        if($value === null)return $builder;
        return $builder->where('free',$value);
    }

    protected function mappings(): array
    {
        return [
            'free' => true,
            'premium' => false
        ];
    }

}
