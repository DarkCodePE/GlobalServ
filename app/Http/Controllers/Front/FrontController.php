<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Servicio;

class FrontController extends Controller
{
    //
    public function index(Request $request){
        $listLoctation       =   Location::get_locations();
        $locations           =   Location::get_locations();
        if($request->user()->authorizeRoles('proveedor') == true){
            return view ('front-home.v_home_proveedor', [
                'locations'          =>     $locations,
                'listLoctation' => $listLoctation,
            ]); 
        }elseif ($request->user()->authorizeRoles('cliente') == true) {
            return view ('front-home.v_home_cliente', [
                'locations'          =>     $locations,
                'listLoctation' => $listLoctation,
            ]);
        }elseif ($request->user()->authorizeRoles('administrador') == true) {
            return view ('front-home.v_home_admin', [
                'locations'          =>     $locations,
                'listLoctation' => $listLoctation,
            ]);
        }
    }

    public function secciones($seccion){
        $listLoctation       =   Location::get_locations();
    	switch ($seccion) {
		    case 'admin':
                $locations           =   Location::get_locations();
                return view ('front-home.v_home_admin',[
                    'locations'	=>	$locations,
                    'listLoctation' => $listLoctation,
    			]);
		        break;
		    case 'user':
                $locations           =   Location::get_confirmed_locations();
                $servicios           =   Servicio::get_servicios();
		        return view ('front-home.v_home_user',[
                    'locations'	=>	$locations,
                    'servicios'	=>	$servicios,
                    'listLoctation' => $listLoctation,
    			]);
                break;

            case 'mantenimiento':
                $locations           =   Location::get_confirmed_locations();
		        return view ('front-home.v_home_user',[
		        	'locations'	=>	$locations,
    			]);
                break;

            case 'test':
                $locations           =   Location::get_confirmed_locations();
                $servicios           =   Servicio::get_servicios();
                return view ('front-home.v_home_test',[
                    'locations'	=>	$locations,
                    'listLoctation' => $listLoctation,
                    'servicios'	=>	$servicios,
    			]);
		        break;    
        }

    }
} 

