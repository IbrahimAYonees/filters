<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 6/19/2018
 * Time: 5:53 PM
 */

namespace App\Filters\Course\Ordering;

use Illuminate\Database\Eloquent\Builder;
use App\Filters\FilterAbstract;


class ViewOrder extends FilterAbstract
{
    /**
     * Order by views in descending
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function filter(Builder $builder,string $direction):Builder
    {
        return $builder->orderBy('views', $this->resolveOrderDirection($direction));
    }
}
