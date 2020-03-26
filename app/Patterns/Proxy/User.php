<?php

namespace App\Patterns\Proxy;

class User
{
    /**
     * @var array
     */
    private $permissions;

    public function __construct()
    {
        $this->permissions = [];
    }

    public function addPermission(string $permission): self
    {
        $this->permissions[] = $permission;

        return $this;
    }

    public function removePermission(string $permission): self
    {
        if (in_array($permission, $this->permissions, true)) {
            $this->permissions = array_diff($this->permissions, [$permission]);
        }

        return $this;
    }

    public function hasPermission(string $permission): bool
    {
        return in_array($permission, $this->permissions, true);
    }

    public function getPermissions(): array
    {
        return $this->permissions;
    }
}
