<?php


namespace App\Patterns\Builder;


class JsonResponseBuilderDirector extends AbstractResponseDirector
{
    /**
     * @var JsonResponseBuilder
     */
    private $builder;

    public function __construct(AbstractResponseBuilder $abstractResponseBuilder)
    {
        $this->builder = $abstractResponseBuilder;
    }

    function buildResponse(): void
    {
        $this->builder->setPerPage(20);
        $this->builder->formatResponse();
    }

    function getResponse(): JsonResponse
    {
        return $this->builder->getResponse();
    }
}