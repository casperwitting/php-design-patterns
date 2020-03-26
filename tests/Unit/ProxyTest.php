<?php

namespace Unit;

use App\Patterns\Proxy\GitlabClient;
use App\Patterns\Proxy\GitlabRepositoryClient;
use App\Patterns\Proxy\GitlabRepositoryClientProxy;
use App\Patterns\Proxy\Permission;
use App\Patterns\Proxy\UnauthorizedException;
use App\Patterns\Proxy\User;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testWhenAccessingBranchesWithoutPermissionsThenExceptionIsThrowed()
    {
        $user = new User();
        $client = new GitlabClient();
        $repositoryClient = new GitlabRepositoryClient($client);
        $proxy = new GitlabRepositoryClientProxy($repositoryClient, $user);

        $this->expectException(UnauthorizedException::class);

        $proxy->getBranchesForRepository(12);
    }

    public function testWhenAccessingCommitsWithoutPermissionsThenExceptionIsThrowed()
    {
        $user = new User();
        $client = new GitlabClient();
        $repositoryClient = new GitlabRepositoryClient($client);
        $proxy = new GitlabRepositoryClientProxy($repositoryClient, $user);

        $this->expectException(UnauthorizedException::class);

        $proxy->getCommitsForRepository(12);
    }

    public function testWhenAccessingFilesWithoutPermissionsThenExceptionIsThrowed()
    {
        $user = new User();
        $client = new GitlabClient();
        $repositoryClient = new GitlabRepositoryClient($client);
        $proxy = new GitlabRepositoryClientProxy($repositoryClient, $user);

        $this->expectException(UnauthorizedException::class);

        $proxy->getFilesForRepository(12);
    }

    public function testUserCanRetrieveBranchesWhenHasCorrectPermission()
    {
        $user = (new User())->addPermission(Permission::CAN_VIEW_BRANCHES);
        $client = new GitlabClient();
        $repositoryClient = new GitlabRepositoryClient($client);
        $proxy = new GitlabRepositoryClientProxy($repositoryClient, $user);

        $branches = $proxy->getBranchesForRepository(3);

        $this->assertEquals('example-gitlab-api-base-url/repositories/3/branches', $branches);
    }

    public function testUserCanRetrieveCommitsWhenHasCorrectPermission()
    {
        $user = (new User())->addPermission(Permission::CAN_VIEW_COMMITS);
        $client = new GitlabClient();
        $repositoryClient = new GitlabRepositoryClient($client);
        $proxy = new GitlabRepositoryClientProxy($repositoryClient, $user);

        $branches = $proxy->getCommitsForRepository(3);

        $this->assertEquals('example-gitlab-api-base-url/repositories/3/commits', $branches);
    }

    public function testUserCanRetrieveFilesWhenHasCorrectPermission()
    {
        $user = (new User())->addPermission(Permission::CAN_VIEW_FILES);
        $client = new GitlabClient();
        $repositoryClient = new GitlabRepositoryClient($client);
        $proxy = new GitlabRepositoryClientProxy($repositoryClient, $user);

        $branches = $proxy->getFilesForRepository(3);

        $this->assertEquals('example-gitlab-api-base-url/repositories/3/files', $branches);
    }

    public function testPermissionsAreEmptyByDefault()
    {
        $user = new User();

        $this->assertEquals([], $user->getPermissions());
    }

    public function testCanAddPermissionToUser()
    {
        $user = new User();

        $user->addPermission(Permission::CAN_VIEW_BRANCHES);

        $this->assertEquals(true, $user->hasPermission(Permission::CAN_VIEW_BRANCHES));
    }

    public function testCanRemovePermissionFromUser()
    {
        $user = new User();
        $user->addPermission(Permission::CAN_VIEW_BRANCHES);

        $user->removePermission(Permission::CAN_VIEW_BRANCHES);

        $this->assertEquals(false, $user->hasPermission(Permission::CAN_VIEW_BRANCHES));
    }
}
