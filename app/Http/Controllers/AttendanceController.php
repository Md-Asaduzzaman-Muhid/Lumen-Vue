<?php

namespace App\Http\Controllers;
use App\Model\Attendance;

class AttendanceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    public function __construct()
    {
        
    }
    public function index(){
        
        return Attendance::all();
    }

}
