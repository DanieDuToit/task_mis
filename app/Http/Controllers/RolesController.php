<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        return view('management.roles.index');
    }
}
