<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
use Storage;
use File;

class Location extends Model{
    //
    protected $table = 'locations';

    protected $fillable = ['lat','lng','nombre','description','location_status'];

    static public function get_locations(){
        return DB::table('locations')
        ->get();
    }

    static public function get_confirmed_locations(){
        return DB::table('locations')
        ->where('location_status', '=', 1)
        ->get();
    }
    
}
