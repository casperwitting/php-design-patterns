<?php

namespace App\Patterns\Builder;

class JsonResponse
{
    /**
     * @var array
     */
    private $data = [];
    /**
     * @var int
     */
    private $perPage;
    /**
     * @var array
     */
    private $response;

    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function setPerPage(int $amount): self
    {
        $this->perPage = $amount;

        return $this;
    }

    public function formatResponse(): void
    {
        $this->response['meta'] = [
            'perPage' => $this->perPage,
            'total' => count($this->data),
        ];

        $this->response['data'] = $this->data;
    }

    public function getJson(): array
    {
        return $this->response;
    }
}
