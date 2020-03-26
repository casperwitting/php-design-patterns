<?php

namespace App\Patterns\Proxy;

class GitlabClient
{
    public function get(string $url): string
    {
        return 'example-gitlab-api-base-url' . $url;
    }
}
