<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    /*
     * dashboard view
     */
    public function index() {

            return view('frontend.dashboard.index');
    }
}
