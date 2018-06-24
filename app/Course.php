<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Filters\Course\CourseFilter;

class Course extends Model
{
    public $appends = [
        'started',
        'formattedDifficulty',
        'formattedType',
        'formattedStarted',
        'formattedAccess'
    ];

    public $hidden = [
        'users'
    ];

    public function scopeFilter(Builder $builder,Request $request,array $filters)
    {
        return (new CourseFilter($request))->addFilters($filters)->filter($builder);
    }

    public function subjects()
    {
        return $this->morphToMany(Subject::class,'subjectable');
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'courses_users');
    }

    public function getStartedAttribute()
    {
        if (!auth()->check()) {
            return false;
        }

        return $this->users->contains(auth()->user());
    }

    public function getFormattedDifficultyAttribute()
    {
        return ucfirst($this->difficulty);
    }

    public function getFormattedTypeAttribute()
    {
        return ucfirst($this->type);
    }

    public function getFormattedAccessAttribute()
    {
        return $this->free == true ? 'Free' : 'Premium';
    }

    public function getFormattedStartedAttribute()
    {
        return $this->started == true ? 'Started' : 'Not Started';
    }
}
