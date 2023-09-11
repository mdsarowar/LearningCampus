<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class DashboardGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && (Auth::user()->role == 'super_admin' || Auth::user()->role == 'admin')) {
            return $next($request);
        }

        // Handle the case where the user is not authenticated or doesn't have the required role.
        // You can redirect them to a login page or return an error response here.
        // For example:
        return redirect(route('error'));
    }
}
