@extends('layouts.home')
@section('content')
<script async defer
        src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyC_88KKEEml0CZ7NS5GzzQYQ9IWIBagEqk">
</script>
<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                   <select class="select2 form-control mb-3 custom-select select2-hidden-accessible" style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true"><option>Select</option><optgroup label="Servicios"><option value="AK">Alaska</option><option value="HI">Hawaii</option></optgroup><optgroup label="Servicios publicos"><option value="CA">California</option><option value="NV">Nevada</option><option value="OR">Oregon</option><option value="WA">Washington</option></optgroup></select>
                </div>
                <h4 class="page-title">Customers</h4></div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body" style="padding: 0;">
                    <div class="chart-demo" style="margin: 10px auto;">
                        <!--<div id="apex_line1" class="apex-charts"></div>-->
                        <div id="map" style="height: 100%;"></div>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0">Buscar Servicios</h4>
                    <div class="table-responsive dash-social">
                        <table id="datatable" class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nombres</th>
                                    <th>Servicio</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Acciones</th>
                                </tr>
                                <!--end tr-->
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < count($listLoctation); $i++)
                                <tr>
                                   
                                    <td><img src="../front/images/users/user-10.jpg" alt="" class="thumb-sm rounded-circle mr-2">User{!! $i !!}<small class="badge badge-soft-pink ml-1">New</small></td>
                                    <td>{!! $listLoctation[$i]->nombre; !!}</td>
                                    <td>{!! $listLoctation[$i]->description; !!}</td>
                                    <td>995713588</td>
                                    <td><a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a> <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a></td>
                                    
                                </tr>
                                @endfor
                                <!--end tr-->
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
</div>

<div style="display: none" id="form1">
    {{ csrf_field() }}
    <table class="map1">
        <tr>
            <input name="id" type='hidden' id='id'/>
            <td><a>Description:</a></td>
            <td><textarea disabled id='description' placeholder='Description'></textarea></td>
        </tr>
        <tr>
            <td><b>Confirm Location ?:</b></td>
            <td><input id='confirmed' type='checkbox' name='confirmed'></td>
        </tr>

        <tr><td></td><td><input type='button' value='Save' onclick='saveData()'/></td></tr>
    </table>
</div>

@endsection
@section('javascripts')

<script>

    var locations ={!! json_encode($locations->toArray()) !!};
    var servicios ={!! json_encode($servicios->toArray()) !!};

    var resultado = [];
    Object.keys(locations).forEach(function(key) {   
        var categoria = [];
        
        Object.keys(locations[key]).forEach(function(index) {

            categoria.push(locations[key][index]);
        });   
        resultado.push(categoria);
    });

    var infowindow; 
    var map;
    var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
    var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
    var my_postion =  'https://i.stack.imgur.com/tFtk8.png?s=32&g=1' ;
    var locations = resultado;
    
    var myOptions = {
        zoom: 12,
        center: new google.maps.LatLng(46.87916, -3.32910),
        mapTypeId: 'roadmap'
    };
    map = new google.maps.Map(document.getElementById('map'), myOptions);

    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
        var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
        };
            marker = new google.maps.Marker({
                    position: pos,
                    map: map,
                    icon :  my_postion
                });            
            map.setCenter(pos);
        }, function() {
            alert('No es posible procesar esa ubicacion');
    });
    } else {
        // Browser doesn't support Geolocation
        alert('El navegador no es compatible con la geolocalización');
    }

    /**
        * Global marker object that holds all markers.
        * @type {Object.<string, google.maps.LatLng>}
        */
    var markers = {};

    /**
        * Concatenates given lat and lng with an underscore and returns it.
        * This id will be used as a key of marker to cache the marker in markers object.
        * @param {!number} lat Latitude.
        * @param {!number} lng Longitude.
        * @return {string} Concatenated marker id.
        */
    var getMarkerUniqueId= function(lat, lng) {
        return lat + '_' + lng;
    };

    /**
        * Creates an instance of google.maps.LatLng by given lat and lng values and returns it.
        * This function can be useful for getting new coordinates quickly.
        * @param {!number} lat Latitude.
        * @param {!number} lng Longitude.
        * @return {google.maps.LatLng} An instance of google.maps.LatLng object
        */
    var getLatLng = function(lat, lng) {
        return new google.maps.LatLng(lat, lng);
    };

    /**
        * Binds click event to given map and invokes a callback that appends a new marker to clicked location.
        */
   

    var addMarker = google.maps.event.addListener(map, 'click', function(e) {
        var lat = e.latLng.lat(); // lat of clicked point
        var lng = e.latLng.lng(); // lng of clicked point
        var markerId = getMarkerUniqueId(lat, lng); // an that will be used to cache this marker in markers object.
        var marker = new google.maps.Marker({
            position: getLatLng(lat, lng),
            map: map,
            animation: google.maps.Animation.DROP,
            id: 'marker_' + markerId,
            html: "    <div id='info_"+markerId+"'>\n" +
            "        <table class=\"map1\">\n" +
            "            <tr>\n" +
            "                <td><a>Servicio:</a></td>\n" +
            "                <td><select id='nombreServ' class='listaserv'>"+
            "<option value='mecanica'>Servicio de Mecanica</option>"+
            "<option value='peluqueria'>Servicio de Peluquería</option>"+
            "<option value='carpinteria'>Servicio de Carpintería</option>"+
            "<option value='plomeria'>Servicio de Plomería</option>"+
            "<option value='pintura'>Servicio de Pintura</option>"+
            "<option value='albaniles'>Servicio de Albañiles</option>"+
            "</select></td></tr>\n"+
            "                <td><a>Description:</a></td>\n" +
            "                <td><textarea  id='manual_description' placeholder='Description'></textarea></td></tr>\n" +
            "            <tr><td></td><td><input type='button' value='Save' onclick='saveData("+lat+","+lng+")'/></td></tr>\n" +
            "        </table>\n" +
            "    </div>"
        });
        markers[markerId] = marker; // cache marker in markers object
        bindMarkerEvents(marker); // bind right click event to marker
        bindMarkerinfo(marker); // bind infowindow with click event to marker
    });

    /**
        * Binds  click event to given marker and invokes a callback function that will remove the marker from map.
        * @param {!google.maps.Marker} marker A google.maps.Marker instance that the handler will binded.
        */
    var bindMarkerinfo = function(marker) {
        google.maps.event.addListener(marker, "click", function (point) {
            var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
            var marker = markers[markerId]; // find marker
            infowindow = new google.maps.InfoWindow();
            infowindow.setContent(marker.html);
            infowindow.open(map, marker);
            // removeMarker(marker, markerId); // remove it
        });
    };

    /**
        * Binds right click event to given marker and invokes a callback function that will remove the marker from map.
        * @param {!google.maps.Marker} marker A google.maps.Marker instance that the handler will binded.
        */
    var bindMarkerEvents = function(marker) {
        google.maps.event.addListener(marker, "rightclick", function (point) {
            var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
            var marker = markers[markerId]; // find marker
            removeMarker(marker, markerId); // remove it
        });
    };

    /**
        * Removes given marker from map.
        * @param {!google.maps.Marker} marker A google.maps.Marker instance that will be removed.
        * @param {!string} markerId Id of marker.
        */
    var removeMarker = function(marker, markerId) {
        marker.setMap(null); // set markers setMap to null to remove it from map
        delete markers[markerId]; // delete marker instance from markers object
    };


    /**
        * loop through (Mysql) dynamic locations to add markers to map.
        */
    var i ; var confirmed = 0;
    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][2], locations[i][3]),
            map: map,
            icon :   locations[i][6] === 1 ?  red_icon  : purple_icon,
            html: "<div>\n" +
            "<table class=\"map1\">\n" +
            "<tr>\n" +
            "<td><a>Nombre:</a></td>\n" +
            "<td><input disabled id='manual_description' placeholder='Description' value='"+locations[i][4]+"'></td></tr>\n" +
            "<td><a>Detalle:</a></td>\n" +
            "<td><textarea disabled id='manual_description' placeholder='Description'>"+locations[i][5]+"</textarea></td></tr>\n" +
            "</table>\n" +
            "</div>"
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow = new google.maps.InfoWindow();
                confirmed =  locations[i][6] === 1 ?  'checked'  :  0;
                $("#confirmed").prop(confirmed,locations[i][6]);
                $("#id").val(locations[i][0]);
                $("#description").val(locations[i][5]);
                $("#form").show();
                infowindow.setContent(marker.html);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }

    /**
        * SAVE save marker from map.
        * @param lat  A latitude of marker.
        * @param lng A longitude of marker.
        */
    function saveData(lat,lng) {
        var description = document.getElementById('manual_description').value;
        var nombreServ = document.getElementById('nombreServ').value;
        $.ajax({
            url: '/location/store',
            headers: {
                      'X-CSRF-TOKEN': $('input[name="_token"]').val()
                  },
            type: 'POST',
            dataType: 'json',
            data: {
                lat:lat,
                lng:lng,
                nombre:nombreServ,
                description:description,
                },
            //processData: false,
            //contentType: false,
            beforeSend: function() {
    
            },
            success: function(data){
              if(data.status == true){
                var markerId = getMarkerUniqueId(data.new_data.lat,data.new_data.lng); // get marker id by using clicked point's coordinate
                var manual_marker = markers[markerId]; // find marker
                manual_marker.setIcon(purple_icon);  
                infowindow.close();
                infowindow.setContent("<div style=' color: purple; font-size: 25px;'> Waiting for admin confirm!!</div>");
                infowindow.open(map, manual_marker);
              }else{
                infowindow.setContent("<div style='color: purple; font-size: 25px;'>Inserting Errors</div>");
              }
            },
            error: function(data){
            }
          });
    }

    $('.listaserv').on('change',function(){
        Object.keys(servicios).forEach(function(key) {   
            console.log(servicios[key]['nombre_servicio']);
            $('.listaserv').append('<option value="' + servicios[key]['id_servicio'] + '">' + servicios[key]['nombre_servicio'] + '</option>');
        });
    });

</script>

@endsection