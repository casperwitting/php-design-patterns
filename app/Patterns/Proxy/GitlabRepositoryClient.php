<?php

namespace App\Patterns\Proxy;

class GitlabRepositoryClient
{
    /**
     * @var GitlabClient
     */
    private $client;

    public function __construct(GitlabClient $client)
    {
        $this->client = $client;
    }

    public function getBranchesForRepository(int $id)
    {
        return $this->client->get('/repositories/' . $id . '/branches');
    }

    public function getCommitsForRepository(int $id)
    {
        return $this->client->get('/repositories/' . $id . '/commits');
    }

    public function getFilesForRepository(int $id)
    {
        return $this->client->get('/repositories/' . $id . '/files');
    }
}
