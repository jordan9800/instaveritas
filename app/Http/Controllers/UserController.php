<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;
use App\Studio;

class UserController extends Controller
{
	//Function for home page of the project
	
    public function index()
    {
    	return view('index');
    }


	/**
     *
     * Start of functions for users studios and bookings.
     *
     **/

    public function myStudios()
    {

    	$studios = DB::table('studios')->join('locations', 'studios.studio_id', '=', 'locations.studio_id')
    								   ->where('studios.studio_by', Auth::user()->user_id)->get();
    	
    	if(empty($studios))
    	{
    		Session::flash('error', 'You have not added any studio yet!');
    		return back();
    	}



        return view('myStudios')->with(['studios' => $studios]);
    }

    public function myBookings()
    {
    	$bookings = DB::table('bookings')->join('studios', 'bookings.studio_id', '=', 'studios.studio_id')
    									 ->where('bookings.booked_by', Auth::user()->user_id)->get();

    	if(empty($bookings))
    	{
    		Session::flash('error', 'You have not made any booking yet!');
    		return back();
    	}

    	return view('myBookings')->with(['bookings' => $bookings]);
    }

    /**
     * End of functions for users studios and bookings.
     **/

    
}
