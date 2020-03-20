<?php

namespace App\Patterns\AbstractFactory;

abstract class AbstractDesktop extends AbstractComputer
{
    /**
     * @var string
     */
    protected $model;
    /**
     * @var int
     */
    protected $kiloBytesOfRam;
}
