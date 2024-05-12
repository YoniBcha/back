<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        "/api/ourservices",
        "/api/cities",
        "api/subcities",
        "api/woredas",
        "api/kebeles",
        "api/jobless",
        "api/register",
        "api/login"
  ];
}