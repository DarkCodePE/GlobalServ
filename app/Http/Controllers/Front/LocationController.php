<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Location;

class LocationController extends Controller
{
    public function update_locations_estado(Request $request){

        if( $request->ajax() ){

            $input = $request->all();

            $location = Location::find($input['id']);
       		$location->fill($input);
            $location->save();

            $new_data = [
                            'id' => $location->id,
                            'lat' => $location->lat,
                            'lng' => $location->lng,
                            'description' => $location->description,
                            'location_status' => $location->location_status
                        ];

            return response()->json(['status' => true, 'new_data' => $new_data]);
        }
    }

    public function store_locations(Request $request){
        if( $request->ajax() ){

            $input = $request->all();
            //var_dump($input);exit;
            $location = Location::create($input);

            $new_data = [
                            'lat' => $location->lat,
                            'lng' => $location->lng,
                            'nombre' => $location->nombre,
                            'description' => $location->description,
                        ];

            return response()->json(['status' => true, 'new_data' => $new_data]);
        }
    }

}
