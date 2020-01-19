<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studio;
use App\Location;
use Session;
use DB;
use Auth;

class SearchController extends Controller
{
    /**
     *
     * Start of functions for autocomplete and searching studios based on their name or city.
     *
     **/

    public function autocomplete(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');

            $data = DB::table('studios')
            				->join('locations', 'studios.studio_id', '=', 'locations.studio_id')
            				->where('studio_name', 'like', '%' . $query . '%')
                           	->orWhere('studio_city', 'like', '%' . $query . '%')->get();
            
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; backgorund-color:grey;">';
            foreach ($data as $row) {
                $output .= '<li><a href="#">' .$row->studio_name. '</a></li>';
            }
            $output .= '<ul>';
            echo $output;
        }

    }

    public function search(Request $request)
    {
    	$query = $request->get('query');


    	$studios = DB::table('studios')
            				->join('locations', 'studios.studio_id', '=', 'locations.studio_id')
            				->where('studio_name', 'like', '%' . $query . '%')
                           	->orWhere('studio_city', 'like', '%' . $query . '%')->get();



        return view('searchStudios')->with(['studios' => $studios]);
    }

    /**
     *End of functions for autocomplete and searching studios based on their name or city.
     **/
}
