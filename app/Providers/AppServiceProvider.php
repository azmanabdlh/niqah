<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Response::macro('text', function ($text, $code = 200) {
            return Response::make(
                $text,
                $code,
                [
                    'Content-Type' => 'text/plain',
                ]
            );
        });
    }
}
