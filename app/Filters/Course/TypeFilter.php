<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 6/11/2018
 * Time: 4:41 PM
 */

namespace App\Filters\Course;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;


class TypeFilter extends FilterAbstract
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
        return $builder->where('type',$value);
    }

    protected function mappings(): array
    {
        return [
            'theory' => 'theory',
            'project' => 'project',
            'snippet' => 'snippet'
        ];
    }
}
