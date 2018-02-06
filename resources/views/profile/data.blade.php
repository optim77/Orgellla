@extends('main.profile')
@section('contentProfile')


    <div id="MainProf" class="row">
        <div class="col-sm-12 text-center h1  mt-5">
            <i class="far fa-user "></i>
        </div>
        <div class="col-sm-12 text-center display-3 mt-5">
            {{$data['name']}}
            {{$data['surname']}}
        </div>
        <div class="col-sm-12 display-4 text-center ">
            {{$data['email']}}<br>
            {{$data['street']}}<br>
            {{$data['number']}}<br>
            {{$data['city']}}<br>
            {{$data['zip']}}<br>
            {{$data['phone']}}
            <p class="lead">Pokaż moją loaklizacje innym użytkownikom</p>
            <input type="checkbox" id="switch" {{$data['blocked'] != null ? 'checked' : '' }} data-toggle="toggle">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p>Przybliżona lokalizacja</p>
                <div id="map" style="height: 400px;width: 100%;"></div>
            </div>
        </div>
    </div>

    <?php

    function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
    $PublicIP = get_client_ip();
    $json  = file_get_contents("https://freegeoip.net/json/$PublicIP");
    $json  =  json_decode($json ,true);
    $country =  $json['country_name'];
    $region= $json['region_name'];
    $city = $json['city'];
    $lat = $json['latitude'];
    $lng = $json['longitude'];
            ?>

    <script>

        $("#switch").on('change',function () {
            $.ajax({
                url: '{{route('switchLocation')}}',
                type: 'POST',
                datatype: 'json',
                data: 'click',
                success: function () {
                    $("#switch").after('<div class="alert alert-success>Zmieniono status wyświetlania lokalizacji</div>"');
                }
            })
        })

        function initMap() {
            var latX = <?php echo $lat; ?>;
            var lngX = <?php echo $lng ?>;
            var uluru = {lat: latX, lng: lngX};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>


    @stop