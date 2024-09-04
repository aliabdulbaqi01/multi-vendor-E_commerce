<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

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

    }


}
