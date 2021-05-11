<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index(Request $request): string
    {
        return view('Admin/index');
    }
}
