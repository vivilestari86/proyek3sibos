<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        // Pastikan user sudah login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Ambil role user dari database
        $userRole = strtolower(Auth::user()->role);

        // Bisa handle lebih dari satu role, misal: role:admin|customer
        $roles = explode('|', strtolower($role));

        // Jika role user tidak sesuai, redirect ke login
        if (!in_array($userRole, $roles)) {
            return redirect()->route('login');
        }

        // Kalau lolos, lanjut ke request berikutnya
        return $next($request);
    }
}
