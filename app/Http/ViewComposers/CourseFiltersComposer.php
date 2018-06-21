<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 6/21/2018
 * Time: 3:05 PM
 */

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Filters\Course\CourseFilter;

class CourseFiltersComposer
{
    /**
     * create the view composer
     *
     * @param \Illuminate\View\View $view
     */
    public function compose(View $view)
    {
        $view->with([
            'mappings' => CourseFilter::mappings()
        ]);
    }
}
