<?php

namespace SaberPro\Http\Controllers;

use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    public function index(){
    
        return view('admin.principal');
    }
}
