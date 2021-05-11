<?php

namespace App\Http\Controllers\Admin;

use App\Models\VehicleType;
use Illuminate\Http\Request;

class VehicleTypesController extends \Illuminate\Routing\Controller
{
    public function index(Request $request)
    {
        return view('Admin/types', ['types' => VehicleType::all()]);
    }
}
