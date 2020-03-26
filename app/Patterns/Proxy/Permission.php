<?php

namespace App\Patterns\Proxy;

abstract class Permission
{
    public const CAN_VIEW_BRANCHES = 'can-view-branches';
    public const CAN_VIEW_FILES = 'can-view-files';
    public const CAN_VIEW_COMMITS = 'can-view-commits';
}
