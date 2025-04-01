<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        dump('Checking User Role: ' . $role);
        $user = ['id'=> 123, 'name' => 'Val', 'role' => 'admin'];
        if ($user['role'] === $role){
            return $next($request);
        }
        abort(404);
    }
}
