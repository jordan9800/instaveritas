<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;
use App\StudioType;
use App\Studio;
use App\Feature;
use App\Location;
use App\Hour;

class StudioController extends Controller
{
    /**
     *
     * Start of functions for addition of studios for renting out and booking.
     *
     **/

    public function addstudioform()
    {
    	if(Auth::check())
    	{
    		$types = StudioType::all();

    		return view('addstudio')->with(['types' => $types]);
    	}
    	else
    	{
    		Session::flash('info', 'You need to SignUp or LogIn!');
    		return back();
    	}
    	
    }

    public function addstudiosubmit(Request $request)
    {
    	$this->validate($request, [
    		'studio_name'       => 'required|string|max:191',
    		'studio_details'    => 'required|string|max:500',
    		'studio_type'       => 'required',
    		'minimum_booking'   => 'required', 
    		'maximum_occupancy' => 'required',
    		'pricing'           => 'required|numeric',
    		'profile_photo'     => 'mimes:jpeg,bmp,png,jpg|required|max:1999',
    		'extra_photos'      => 'nullable|mimes:jpeg,bmp,png,jpg|max:1999',
    		'past_clients'      => 'nullable|string|max:191', 
    		'audio_samples'     => 'nullable|string|max:191',
    		'studio_amenities'  => 'required|string|max:191', 
    		'studio_equipments' => 'nullable|string|max:191', 
    		'studio_rules'      => 'nullable|string|max:191',
    		'studio_address'    => 'required|string|max:191', 
    		'studio_city'       => 'required',
    		'studio_country'    => 'required',
    		'studio_opening'    => 'required', 
    		'studio_closing'    => 'required'
    	]);

    	if($request->hasFile('profile_photo'))
        {
            //Get the filename with the extension
            $filenameWE = $request->file('profile_photo')->getClientOriginalName();
            //Get just the file name
            $filename = pathinfo($filenameWE, PATHINFO_FILENAME);
            //Get just the extension
            $extension = $request->file('profile_photo')->getClientOriginalExtension();
             //Filename to store
            $profileimage = $filename.'_'.time().'.'.$extension;

            $request->file('profile_photo')->move('app/users/images/studios', $profileimage);
        
        } 

        if($request->hasFile('extra_photos'))
        {
            foreach($request->extra_photos as $multiimage){

            $filenamewithExt = $multiimage->getClientOriginalName();

            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);

            $extension = $multiimage->getClientOriginalExtension();

            $filenametostore = $filename.'_'.time().'.'.$extension;

            $multiimage->move('app/users/images/studios', $filenametostore);

            $data[] = $filenametostore;
        
            }
        }

    	$studio = new Studio;
    	$studio->studio_id = $this->createstudioid();
        $studio->studio_by = Auth::user()->user_id;
    	$studio->studio_name = $request->studio_name;
    	$studio->studio_details = $request->studio_details;
    	$studio->studio_type = $request->studio_type;
    	$studio->min_booking = $request->minimum_booking;
    	$studio->max_occp = $request->maximum_occupancy;
    	if(!empty($request->past_clients))
    	{
    		$studio->past_clients = $request->past_clients;
    	}
    	if(!empty($request->audio_samples))
    	{
    		$studio->audio_samples = $request->audio_samples;
    	}
    	$studio->pricing_per_hour = $request->pricing;
    	$studio->profile_photo = $profileimage;
    	if($request->hasFile('extra_photos'))
    	{
    		$studio->extra_photos = json_encode($data);
    	}
    	$studio->save();


    	$feature = new Feature;
    	$feature->feature_id = $this->createfeatureid();
    	$feature->studio_id = $studio->studio_id;
    	$feature->studio_amenities = $request->studio_amenities;
    	if(!empty($request->studio_equipments))
    	{
    		$feature->studio_equipments = $request->studio_equipments;
    	}
    	if(!empty($request->studio_rules))
    	{
    		$feature->studio_rules = $request->studio_rules;
    	}
    	$feature->save();


    	$location = new Location;
    	$location->location_id = $this->createlocationid();
    	$location->studio_id = $studio->studio_id;
    	$location->studio_address = $request->studio_address;
    	$location->studio_city = $request->studio_city;
    	$location->studio_country = $request->studio_country;
    	$location->save();


    	$hour = new Hour;
    	$hour->hour_id = $this->createhourid();
    	$hour->studio_id = $studio->studio_id;
    	$hour->studio_opening = $request->studio_opening;
    	$hour->studio_closing = $request->studio_closing;
    	$hour->save();

    	Session::flash('success', 'Your studio has been added for booking!');
    	return back();

    }

    /**
     * End of functions for addition of studios for renting out and booking.
     **/


    /**
     *
     * Start of functions for creating unique id of Studio, Feature, Location and Hour.
     *
     **/
    protected function createstudioid()
    {
    	$latest = DB::table('studios')->latest()->first();

        if(!empty($latest))
        {
            $id = $latest->studio_id;
            $inc = 1;
            $sid = $id + $inc;

            return $sid;
        }
        else
        {
            $sid = 1000001;
            return $sid;
        }
    }

    protected function createfeatureid()
    {
    	$latest = DB::table('features')->latest()->first();

        if(!empty($latest))
        {
            $id = $latest->feature_id;
            $inc = 1;
            $fid = $id + $inc;

            return $fid;
        }
        else
        {
            $fid = 10001;
            return $fid;
        }
    }

    protected function createlocationid()
    {
    	$latest = DB::table('locations')->latest()->first();

        if(!empty($latest))
        {
            $id = $latest->location_id;
            $inc = 1;
            $lid = $id + $inc;

            return $lid;
        }
        else
        {
            $lid = 10001;
            return $lid;
        }
    }

    protected function createhourid()
    {
    	$latest = DB::table('hours')->latest()->first();

        if(!empty($latest))
        {
            $id = $latest->hour_id;
            $inc = 1;
            $hid = $id + $inc;

            return $hid;
        }
        else
        {
            $hid = 10001;
            return $hid;
        }
    }

    /**
     * End of functions for creating unique id of Studio, Feature, Location and Hour.
     **/



    /**
     *
     * Start of functions for listing of studios and studio details.
     *
     **/

    public function studioDetails($name, $id)
    {
    	$studio = DB::table('studios')->join('features', 'studios.studio_id', '=', 'features.studio_id')
    								  ->join('locations', 'studios.studio_id', '=', 'locations.studio_id')
    								  ->join('hours', 'studios.studio_id', '=', 'hours.studio_id')
    								  ->join('studio_types', 'studios.studio_type', '=', 'studio_types.studiotype_id')
    								  ->where('studios.studio_id', $id)->first();

    	return view('studioDetails')->with(['studio' => $studio]);
    }


    public function studioListing(Request $request)
    {
        if(request()->type)
        {
            $type_id = StudioType::where('studiotype_name', request()->type)->pluck('studiotype_id');
            $typename =  DB::table('studio_types')->select('studiotype_name as type')
                                                  ->where('studiotype_name', request()->type)->first();

            $studios = Studio::where('studio_type', $type_id)->get();

            if($studios->count() == 0)
            {
                Session::flash('error', 'No studios available for the selected studio type!');
                return back();
            }

            $city = null;

        }
        if(request()->type && request()->city)
        {
            $type_id = StudioType::where('studiotype_name', request()->type)->pluck('studiotype_id');
            $typename =  DB::table('studio_types')->select('studiotype_name as type')
                                                  ->where('studiotype_name', request()->type)->first();

            $city = request()->city;
            $studios = DB::table('studios')
                                ->join('locations', 'studios.studio_id', '=', 'locations.studio_id')
                                ->where([
                                    ['studios.studio_type', $type_id],
                                    ['locations.studio_city', 'like', '%' . $city . '%']
                                ])->get();

            

        }
        return view('studioListings')->with(['studios'  => $studios, 
                                             'typename' => $typename,
                                              'city'    => $city]);
    }

    /**
     * End of functions for listing of studios and studio details.
     **/
}
