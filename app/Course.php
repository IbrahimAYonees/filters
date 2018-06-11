<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Filters\Course\CourseFilter;

class Course extends Model
{
    public function scopeFilter(Builder $builder,Request $request,array $filters)
    {
        return (new CourseFilter($request))->addFilters($filters)->filter($builder);
    }
}
