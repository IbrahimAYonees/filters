<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Filters\Course\DifficultyFilter;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $courses = Course::with(['subjects','users'])->filter($request,$this->getFilters())->paginate(2);
        return view('courses.index',compact('courses'));
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
