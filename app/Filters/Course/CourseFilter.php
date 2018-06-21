<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 6/11/2018
 * Time: 12:23 PM
 */

namespace App\Filters\Course;

use App\Filters\FiltersAbstract;
use App\Filters\Course\Ordering\ViewOrder;
use App\Subject;

class CourseFilter extends FiltersAbstract
{
    protected $filters = [
        'access' => AccessFilter::class,
        'type' => TypeFilter::class,
        'subject' => SubjectFilter::class,
        'started' => StartedFilter::class,
        'views' => ViewOrder::class,
    ];

    public static function mappings()
    {
        $map = [
            'access' => [
                'free' => 'Free',
                'premium' => 'Premium'
            ],
            'difficulty' => [
                'beginner' => 'Beginner',
                'intermediate' => 'Intermediate',
                'advanced' => 'Advanced'
            ],
            'type' => [
                'snippet' => 'Snippet',
                'project' => 'Project',
                'theory' => 'Theory'
            ],
            'subject' => Subject::get()->pluck('name', 'slug'),
        ];

        if (auth()->check()) {
            $map = array_merge($map, [
                'started' => [
                    'true' => 'Started',
                    'false' => 'Not started'
                ]
            ]);
        }

        return $map;
    }
}
