<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 6/11/2018
 * Time: 12:23 PM
 */

namespace App\Filters\Course;

use App\Filters\FiltersAbstract;

class CourseFilter extends FiltersAbstract
{
    protected $filters = [
        'access' => AccessFilter::class
    ];
}
