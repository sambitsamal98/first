<?php

namespace App\Http\Controllers;
use App\Models\College;

class ProfiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function index(){
     $college=College::all();
     return $college;
    }

    //
}
