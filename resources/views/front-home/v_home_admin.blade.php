@extends('layouts.home')
@section('content')
<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Analytics</a></li>
                        <li class="breadcrumb-item active">Customers</li>
                    </ol>
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
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-4">Customers Growth</h4>
                    <div class="chart-demo">
                        <!--<div id="apex_line1" class="apex-charts"></div>-->
                        <div id="map" style="height: 400px;"></div>
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
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="icon-contain">
                        <div class="row">
                            <div class="col-8 align-self-center">
                                <h5 class="">Servcios registrados este mes</h5>
                                <p class="text-muted mb-0">Julio : 150 <i class="mdi mdi-menu-up text-success font-16"></i></p>
                            </div>
                            <!--end col-->
                            <div class="col-4"><span class="peity-bar" data-peity='{ "fill": ["#394b7b", "#4d79f6"]}' data-width="100%" data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span></div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end icon-contain-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="icon-contain">
                        <div class="row">
                            <div class="col-8 align-self-center">
                                <h5 class="">Nuevos servicios</h5>
                                <p class="text-muted mb-0">Julio : 10 <i class="mdi mdi-menu-down text-danger font-16"></i></p>
                            </div>
                            <!--end col-->
                            <div class="col-4"><span class="peity-line" data-width="100%" data-peity='{ "fill": ["#21667d"],"stroke": ["#39a6ca"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span></div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end icon-contain-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="icon-contain">
                        <div class="row">
                            <div class="col-8 align-self-center">
                                <h5 class="">Balance del mes</h5>
                                <p class="text-muted mb-0">Julio : 30% <i class="mdi mdi-menu-up text-success font-16"></i></p>
                            </div>
                            <!--end col-->
                            <div class="col-4 text-right"><span class="peity-donut" data-peity='{ "fill": ["#4d79f6", "#394b7b"], "innerRadius": 23, "radius": 32 }' data-width="60" data-height="60">226,134</span></div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end icon-contain-->
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
                    <button class="btn btn-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New Customer</button>
                    <h4 class="header-title mt-0">Customers Details</h4>
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

<div style="display: none" id="form">
        {{ csrf_field() }}
        <table class="map1">
            <tr>
                <td><a>Nombre:</a></td>
                <td><input type="text" name="nombre" id="nombre" disabled></td>
            </tr>
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

    //var locations = {{ $locations }};
    var locations ={!! json_encode($locations->toArray()) !!};
    var resultado = [];
    Object.keys(locations).forEach(function(key) {   
        var categoria = [];
        
        Object.keys(locations[key]).forEach(function(index) {

            categoria.push(locations[key][index]);
        });   
        resultado.push(categoria);
    });

    var map;
    var marker;
    var infowindow;
    var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
    var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
    var my_postion =  'https://i.stack.imgur.com/tFtk8.png?s=32&g=1' ;
    var locations = resultado;

    function initMap() {
        var france = {lat: 46.87916, lng: -3.32910};
        infowindow = new google.maps.InfoWindow();
        map = new google.maps.Map(document.getElementById('map'), {
            center: france,
            zoom: 12
        });

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

        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][2], locations[i][3]),
                map: map,
                icon :   locations[i][6] === 1 ?  red_icon  : purple_icon,
                html: document.getElementById('form')
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    confirmed =  locations[i][6] === 1 ?  'checked'  :  0;
                    $("#confirmed").prop(confirmed,locations[i][6]);
                    $("#id").val(locations[i][0]);
                    $("#description").val(locations[i][5]);
                    $("#nombre").val(locations[i][4]);
                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

    function saveData() {
        var confirmed = document.getElementById('confirmed').checked ? 1 : 0;
        var id_location = document.getElementById('id').value;
        //var url = 'locations_model.php?confirm_location&id=' + id + '&confirmed=' + confirmed ;
        //console.log(id, confirmed);

        $.ajax({
            url: '/location/update',
            headers: {
                      'X-CSRF-TOKEN': $('input[name="_token"]').val()
                  },
            type: 'POST',
            dataType: 'json',
            data: {
                id:id_location,
                location_status:confirmed
                },
            //processData: false,
            //contentType: false,
            beforeSend: function() {
    
            },
            success: function(data){
              console.log(data.status);
              if(data.status == true){
                infowindow.close();
                window.location.reload(true);
              }else{
                infowindow.setContent("<div style='color: purple; font-size: 25px;'>Inserting Errors</div>");
              }
            },
            error: function(data){
    
            }
          });
        /*downloadUrl(url, function(data, responseCode) {
            if (responseCode === 200  && data.length > 1) {
                infowindow.close();
                window.location.reload(true);
            }else{
                infowindow.setContent("<div style='color: purple; font-size: 25px;'>Inserting Errors</div>");
            }
        });*/
    }

    
    /*function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
            if (request.readyState == 4) {
                callback(request.responseText, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
    }*/

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyC_88KKEEml0CZ7NS5GzzQYQ9IWIBagEqk&callback=initMap">
</script>
@endsection