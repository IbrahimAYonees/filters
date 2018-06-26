<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Filters\Course\DifficultyFilter;
use App\Http\Resources\CoursesResource;
use App\Filters\Course\CourseFilter;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $courses = Course::with(['subjects','users'])->filter($request,$this->getFilters())->paginate(2);
        return view('courses.index',compact('courses'));
    }

    public function indexVue(Request $request)
    {
        return new CoursesResource(
            Course::with(['subjects','users'])->filter($request,$this->getFilters())->paginate(2)
        );
    }

    public function filters()
    {
        return response()->json([
            'data' => CourseFilter::mappings(),
        ]);
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
