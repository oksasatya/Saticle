<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
// use role model
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class is_admin
{
    use HasRoles;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // check if user has admin role
        if ($this->hasRole('admin')) {
            return $next($request);
        }
        // if not, redirect to home page
        return redirect('/');
    }
}
