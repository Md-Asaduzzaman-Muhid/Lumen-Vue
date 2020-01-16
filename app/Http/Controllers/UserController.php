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
            'phone' => $request->phone,
            'email' => $request->email,
            'image_url' => $request->image_url,
            
        ]);
        return response()->json(['message' => 'success', 'user' => $user], 200);
    }

    public function edit(Request $request , $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return response()->json(['message' => 'success', 'user' => $user], 200);
    }

    public function delete(Request $request , $id)
    {
        $user = User::find($id);
        $user->delete($request->all());
        return response()->json(['message' => 'success', 'user' => $user], 200);
    }
}
