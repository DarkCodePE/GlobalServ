<?php

namespace App\Models;
use DB;
use Carbon\Carbon;
use Storage;
use File;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model{
    
    protected $table = 'servicios';

    protected $fillable = ['id_servicio','id_cat_servicio','nombre_servicio','alias_servicio'];

    static public function get_servicios(){
        return DB::table('servicios')
        ->get();
    }
}
