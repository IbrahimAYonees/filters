<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Filters\Course\DifficultyFilter;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        return Course::filter($request,$this->getFilters())->get();
    }

    /**
     * create an array of filters
     *
     * @return array
     */
    protected function getFilters(): array
    {
        return [
            'difficulty' => DifficultyFilter::class
        ];
    }

}
