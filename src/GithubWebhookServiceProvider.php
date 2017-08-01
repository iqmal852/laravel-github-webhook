<?php

namespace Felice\GithubWebhook;

use Felice\GithubWebhook\GithubWebhook;
use Illuminate\Support\ServiceProvider;

class GithubWebhookServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/GithubWebhook.php';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('github-webhook', function () {
            return new GithubWebhook;
        });
    }
}
