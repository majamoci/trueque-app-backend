<?php

namespace App\Http\Middleware;

use Illuminate\Support\Str;
use Closure;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (auth()->user()->tokenCan("role:{$role}")) {
            return $next($request);
        }

        return response()->json([
            'status_code' => 403,
            'message' => 'No autorizado'
        ], 403);
    }
}
