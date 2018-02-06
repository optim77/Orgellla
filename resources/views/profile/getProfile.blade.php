@extends('master')
@section('promo')


    <div id="MainProf" class="row">
        <div class="col-sm-12 text-center h1  mt-5">
            <i class="far fa-user "></i>
        </div>
        <div class="col-sm-12 text-center display-3 mt-5">
            {{$user->name}}
            {{$user->surname}}
        </div>
        <div class="col-sm-12 display-4 text-center ">
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


    <script>


        function initMap() {
            var latX = <?php echo $user->lat; ?>;
            var lngX = <?php echo $user->lng ?>;
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