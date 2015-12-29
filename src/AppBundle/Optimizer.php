<?php

namespace AppBundle;

use AppBundle\Lib\Query;

interface Optimizer
{
    public function optimize(Query $query);
}
