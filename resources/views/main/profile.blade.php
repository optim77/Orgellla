@extends('master')
@section('promo')

    <div class="container ">
        <div class="row">

            <div class="btn-group col-sm-12">
                <div id="mainClick" class=" btn btn-primary col-sm-3 text-center table-bordered"><a class="text-white" href="{{route('profile')}}">Profil</a></div>
                <div  id="bougthClick" class="btn btn-primary col-sm-3 text-center table-bordered"><a class="text-white" href="{{route('boughtProfile')}}">Kupione</a></div>
                <div id="dataClick" class="btn btn-primary col-sm-3 text-center table-bordered"><a class="text-white" href="{{route('editProfile')}}">Dane</a></div>
                <div class=" btn btn-primary col-sm-3 text-center table-bordered"><a class="text-white" href="" >Wystaw przedmiot</a></div>
            </div>
        </div>
    </div>

        @yield('contentProfile')


    @stop


