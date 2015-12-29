<?php

namespace AppBundle;

class SecondaryAnalyticalSystemCollection
{
    /**
     * @var SecondaryAnalyticalSystem
     */
    private $systems;

    public function addSystem(SecondaryAnalyticalSystem $system)
    {
        $this->systems[] = $system;
    }

    /**
     * @return SecondaryAnalyticalSystem
     */
    public function getSystems()
    {
        return $this->systems;
    }
}
