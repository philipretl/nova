<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelAdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Dashboard()
    {
        return view('Admin.Dashboard');
    }

}
