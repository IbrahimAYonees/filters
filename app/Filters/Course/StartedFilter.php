<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 6/19/2018
 * Time: 4:49 PM
 */

namespace App\Filters\Course;

use Illuminate\Database\Eloquent\Builder;
use App\Filters\FilterAbstract;

class StartedFilter extends FilterAbstract
{

    /**
     * Mappings for database values.
     *
     * @return array
     */
    public function mappings():array
    {
        return [
            'true' => true,
            'false' => false,
        ];
    }

    /**
     * Filter by course access type (free, premium).
     *
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @param  string $value
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function filter(Builder $builder,string $value):Builder
    {
        $value = $this->resolveFilterValue($value);

        if ($value === null) {
            return $builder;
        }

        $method = $value ? 'whereHas' : 'whereDoesntHave';

        return $builder->{$method}('users', function ($builder) {
            $builder->whereIn('users.id', [auth()->id()]);
        });
    }
}
