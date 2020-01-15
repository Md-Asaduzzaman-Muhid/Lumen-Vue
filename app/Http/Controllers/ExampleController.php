<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    public function __construct()
    {
        
    }
    

    public function homePost(){
         $myArr = array("John", "Mary", "Peter", "Sally");
        $myJSON = json_encode($myArr);
        echo $myJSON;
    }
    public function homeGet(){
        echo "get request at home";
    }
}
