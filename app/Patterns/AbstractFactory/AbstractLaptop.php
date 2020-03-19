<?php


namespace App\Patterns\AbstractFactory;


abstract class AbstractLaptop extends AbstractComputer
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