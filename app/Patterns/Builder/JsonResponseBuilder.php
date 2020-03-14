<?php


namespace App\Patterns\Builder;


class JsonResponseBuilder extends AbstractResponseBuilder
{
    /**
     * @var JsonResponse
     */
    private $response;

    public function __construct()
    {
        $this->response = new JsonResponse();
    }

    public function setData(array $data): self
    {
        $this->response->setData($data);

        return $this;
    }

    public function setPerPage(int $amount): self
    {
        $this->response->setPerPage($amount);

        return $this;
    }

    public function formatResponse(): void
    {
        $this->response->formatResponse();
    }

    function getResponse(): JsonResponse
    {
        return $this->response;
    }
}