<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 6/10/2018
 * Time: 3:26 PM
 */

namespace App\Filters;



class CourseFilter extends FiltersAbstract
{
    protected $filters = [
        'access' => AccessFilter::class
    ];
}
