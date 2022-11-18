<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Role;
use app\Models\User;

class SuperAdminController extends Controller
{
    public function __construct()

    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_SUPERADMIN');
    }
    public function index(){
        return view('superadmin.home');
    }
}
