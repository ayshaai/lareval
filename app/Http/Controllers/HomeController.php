<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {// this function to allow user use pages by authitcation login
        //$this->middleware('auth');
        // to use  except for another pages to open without authincation
        $this->middleware('auth')->except(['hello']);
        //hi is a name of function
    }
    public function languageDemo(){
        return view('languageDemo');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function hello()
    {
        // $Firstword="Oman";
        // $Secondword="KSA";

        // //user login
        // if(Auth::check()){
        //     //echo $Firstword;
        //     // i can show user info from database in page
        //     echo Auth::user()->name;
        // }
        // else{
        //     echo $Secondword;
        // }
        // to fetch first row in database
// $user= User:: where('id',1)->first();
// //if no id found do this to avoid problem
// if($user){
//     //to show first of array
//     return $user[0]->name . "|||" . $user[0]->email;
// }
// else{
//     return "User not found";
// }






 }
}
