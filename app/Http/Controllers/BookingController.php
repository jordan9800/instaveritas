<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Studio;
use App\Booking;
use Session;

class BookingController extends Controller
{
	/**
	 *
	 * Start of functions for creating Booking for a studio
	 *
	 **/
    public function bookStudio(Request $request)
    {
    	

    	$checkin = strtotime($request->start_time);
    	$checkout = strtotime($request->end_time);

    	$diff = $checkout - $checkin;
    

        $studio = DB::table('studios')->join('hours', 'studios.studio_id', '=', 'hours.studio_id')
        							  ->where('studios.studio_id', $request->studio_id)->first();

        $checkbooking = DB::table('bookings')
        						->join('studios', 'bookings.studio_id', '=', 'studios.studio_id')
        						->where([
        							['bookings.booking_date', $request->date],
        							['bookings.start_time', $request->start_time],
        							['bookings.end_time', $request->end_time],
        							['bookings.studio_id', $request->studio_id]
        						])->first();

         $error_array = array();
         $success_output = '';
         if($diff != 3600)
         {
            
                $error_array[] = 'Please check the start time and end time selection!';
                $error_array[] =  'Booking should be done for one hour!';
            
         }
         elseif(!empty($checkbooking))
         {
         		$error_array[] = 'Booking has already been done for this time slot, Please select another time!';
         }
         else 
         {
            $booking = new Booking;
            $booking->booking_id = $this->createbookingid();
            $booking->studio_id = $request->studio_id;
            $booking->booking_date = $request->date;
            $booking->start_time = $request->start_time;
            $booking->end_time = $request->end_time;
            $booking->total_price = $studio->pricing_per_hour;
            $booking->booked_by = Auth::user()->user_id;
            $booking->save();


            $success_output = 'Studio has been successfully booked for the selected time slot!';
         }
        
         

         $output = array(
            'error' => $error_array,
            'success' => $success_output
         );

         return json_encode($output);
    }


    protected function createbookingid()
    {
    	$latest = DB::table('bookings')->latest()->first();

        if(!empty($latest))
        {
            $id = $latest->booking_id;
            $inc = 1;
            $bid = $id + $inc;

            return $bid;
        }
        else
        {
            $bid = 100001;
            return $bid;
        }
    }

    /**
	 * End of functions for creating Booking for a studio
	 **/
}
