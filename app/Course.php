<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Filters\CourseFilter;

class Course extends Model
{
    public function scopeFilter(Builder $builder,Request $request)
    {
        return (new CourseFilter($request))->filter($builder);
    }
}
