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
        echo "Post request goes here";
    }
    public function homeGet(){
        echo "Get request goes here";
    }
    public function showAllBlogs(){
        $myArr = array("Muhid1", "Muhid2", "Muhid3", "Muhid4");
        $myJSON = json_encode($myArr);
        echo $myJSON;
    }
}
