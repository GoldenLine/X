<?php

namespace AppBundle\Lib;

use AppBundle\AnalyticalSystem;
use AppBundle\Optimizer;
use AppBundle\Translator;

class System
{
    /**
     * @var AnalyticalSystem
     */
    private $analyticalSystem;
    /**
     * @var Optimizer
     */
    private $optimizer;
    /**
     * @var Translator
     */
    private $translator;

    public function __construct(AnalyticalSystem $analyticalSystem, Optimizer $optimizer, Translator $translator)
    {
        $this->analyticalSystem = $analyticalSystem;
        $this->optimizer = $optimizer;
        $this->translator = $translator;
    }

    public function executeQuery($query)
    {
        $query = $this->analyticalSystem->analyze($query);

        $query = $this->optimizer->optimize($query);
        $query = $this->translator->translate($query);

        return $query->execute();
    }
}
