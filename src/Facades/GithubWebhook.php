<?php

namespace Felice\GithubWebhook\Facades;

use Illuminate\Support\Facades\Facade;

class GithubWebhook extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'github-webhook';
    }
}
