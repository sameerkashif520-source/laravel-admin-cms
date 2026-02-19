<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session('admin_logged_in') == true) {
            return redirect()->route('admin.login');
        }

        $admin = Admin::find(session('admin_id'));
        if (!$admin) {
            session()->forget(['admin_id', 'admin_logged_in']);
            session()->flash('sweet_error', 'Your account has been deleted, register yourself again');
            return redirect()->route('admin.login');
        }
        return $next($request);
    }
}
