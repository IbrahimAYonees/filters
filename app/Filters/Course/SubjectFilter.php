<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 6/19/2018
 * Time: 3:55 PM
 */

namespace App\Filters\Course;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class SubjectFilter extends FilterAbstract
{
    public function filter(Builder $builder, string $value): Builder
    {
        return $builder->whereHas('subjects', function (Builder $builder) use ($value) {
            $builder->where('slug', $value);
        });
    }
}
