<?php

namespace AppBundle;

use AppBundle\Lib\Query;

interface Translator
{
    /**
     * @param Query $query
     * @return mixed
     */
    public function translate(Query $query);
}
