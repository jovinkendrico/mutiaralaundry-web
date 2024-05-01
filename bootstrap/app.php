<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->validateCsrfTokens(except: [
            'http://192.168.1.4:8000/api/v1/register', // <-- exclude this route
            'http://192.168.1.4:8000/api/v1/login', // <-- exclude this route
            'http://192.168.1.4:8000/api/v1/transaksi', // <-- exclude this route
    
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
