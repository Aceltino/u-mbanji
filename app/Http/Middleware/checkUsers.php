<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\AuthController;
use Symfony\Component\HttpFoundation\Response;

class checkUsers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (User::all()->isEmpty())
        {
            return Response(AuthController::registerForm());
        }

        return $next($request);
    }
}
