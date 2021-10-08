<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use Auth;
use App;
class TweetsController extends Controller
{public function __construct()
    {// this function to allow user use pages by authitcation login
    $this->middleware('auth');
     
    }

//show list of tweets
    public function timeline(){
$data['tweets'] = Tweet::all();
        return view ('tweet.timeline',$data);
    }

// show tweet details
    public function displayTweetdetails($tweet_id){
        $data['tweet'] = Tweet::find($tweet_id);
                return view ('tweet.tweet-details',$data);
            }



    public function createTweet(Request $request){

        //return $request;
$tweet= new Tweet();
$tweet->content = $request->tweet_content;
//userid acorrding to userlogin id
$tweet->user_id = Auth::user()->id;
$tweet->save();
return back();
    }
    public function index()
    {
        $data['tweets'] = Tweet::all();
        return view ('tweet.timeline',$data);
    }
    public function lang_change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);  
        $data['tweets'] = Tweet::all();
        return view ('tweet.timeline',$data);
    }
} 
