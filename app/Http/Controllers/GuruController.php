<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    //
    public function index()
    {
    return view('/admin/guru/create_guru');
    }
}
