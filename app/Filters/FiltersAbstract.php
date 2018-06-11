<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 6/10/2018
 * Time: 3:34 PM
 */

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;


abstract class FiltersAbstract
{
    /**
     * @var \Illuminate\Http\Request $request
     */
    protected $request;

    /**
     * @var array $filters
     */
    protected $filters = [];

    /**
     * filtersAbstract class constructor
     *
     * @param \Illuminate\Http\Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * use the given filters to filter throw the model
     *
     * @param \Illuminate\Database\Eloquent\Builder $builder
     */
    public function filter(Builder $builder)
    {
        foreach ($this->getFilters() as $filter => $value) {
            $this->resolveFilter($filter)->filter($builder,$value);
        }
        return $builder;
    }

    public function addFilters(array $filters)
    {
        $this->filters = array_merge($this->filters,$filters);
        return $this;
    }

    protected function getFilters()
    {
        return $this->filterFilters($this->filters);
    }

    protected function filterFilters($filters)
    {
        return array_filter($this->request->only(array_keys($this->filters)));
    }

    protected function resolveFilter($filter)
    {
        return new $this->filters[$filter];
    }




}
