<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\User;

class UserController extends Controller
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
        return User::all();
    }

    public function store( Request $request ){
        User::create([
            'name' => $request->name,
            'id' => 1
        ]);
        return response()->json(['message'=>'success'], 200);
    } 

}
