<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Role;
use app\Models\User;

class AdminController extends Controller
{
    public function __construct()

    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_ADMIN');
    }
    public function index(){
        return view('admin.home');
    }

    
}
