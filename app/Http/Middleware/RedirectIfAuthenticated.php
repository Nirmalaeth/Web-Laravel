<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Arahkan pengguna berdasarkan perannya
                $user = Auth::guard($guard)->user();

                if ($user->hasRole('admin')) {
                    return redirect()->route('admin.dashboard');
                }

                if ($user->hasRole('user')) {
                    return redirect()->route('dashboard');
                }

                // Jika role tidak dikenali, arahkan ke halaman default
                return redirect('/');
            }
        }

        return $next($request);
    }
}
