<?php


namespace App\Patterns\Builder;

abstract class AbstractResponseDirector
{
    abstract function __construct(AbstractResponseBuilder $abstractResponseBuilder);

    abstract function buildResponse();

    abstract function getResponse();
}