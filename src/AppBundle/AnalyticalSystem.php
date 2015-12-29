<?php

namespace AppBundle;

use AppBundle\Lib\Query;

interface AnalyticalSystem
{
    /**
     * @param $query
     * @return Query
     */
    public function analyze($query);
}
