<?php

namespace App\Patterns\Proxy;

class GitlabRepositoryClientProxy
{
    /**
     * @var GitlabRepositoryClient
     */
    private $client;
    /**
     * @var User
     */
    private $user;

    public function __construct(GitlabRepositoryClient $client, User $user)
    {
        $this->client = $client;
        $this->user = $user;
    }

    public function getBranchesForRepository(int $id): string
    {
        if (!$this->user->hasPermission(Permission::CAN_VIEW_BRANCHES)) {
            throw new UnauthorizedException();
        }

        return $this->client->getBranchesForRepository($id);
    }

    public function getCommitsForRepository(int $id): string
    {
        if (!$this->user->hasPermission(Permission::CAN_VIEW_COMMITS)) {
            throw new UnauthorizedException();
        }

        return $this->client->getCommitsForRepository($id);
    }

    public function getFilesForRepository(int $id): string
    {
        if (!$this->user->hasPermission(Permission::CAN_VIEW_FILES)) {
            throw new UnauthorizedException();
        }

        return $this->client->getFilesForRepository($id);
    }
}
