<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateAdminController extends Controller
{
    /*
     * return login page view
     */
    public function login() {
        return view('admin.auth.login');
    }

    /*
     * authenticate admin login
     */
    public function store(LoginRequest $request) {
        $request->authenticate();
        if(auth()->user()->role === 'admin') {
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::ADMIN_DASHBOARD);
        }
        Auth::guard('web')->logout();
        session()->flash('status', 'You are not authorized to access this page.');
        return redirect()->back();

    }

    public function destroy(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('admin/login');
    }


}
