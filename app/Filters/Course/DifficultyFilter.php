<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 6/11/2018
 * Time: 12:42 PM
 */

namespace App\Filters\Course;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;


class DifficultyFilter extends FilterAbstract
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
        return $builder->where('difficulty',$value);
    }

    protected function mappings(): array
    {
        return [
            'beginner' => 'beginner',
            'intermediate' => 'intermediate',
            'advanced' => 'advanced'
        ];
    }
}
