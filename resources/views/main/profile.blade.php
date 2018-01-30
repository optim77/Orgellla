@extends('master')
@section('promo')

    <div class="container ">
        <div class="row">

            <div class="btn-group col-sm-12">
                <div id="mainClick" class=" btn btn-primary col-sm-3 text-center table-bordered"><a class="text-white" href="{{route('profile')}}">Profil</a></div>
                <div id="dataClick" class="btn btn-primary col-sm-3 text-center table-bordered"><a class="text-white" href="{{route('editProfile')}}">Dane</a></div>
                <div  id="bougthClick" class="btn btn-primary col-sm-3 text-center table-bordered"><a class="text-white" href="{{route('onSell')}}">Wystawione</a></div>
                <div class=" btn btn-primary col-sm-3 text-center table-bordered"><a class="text-white" href="{{route('create')}}" >Wystaw przedmiot</a></div>
                @if(Auth::user()->admin)
                    <div class=" btn btn-danger col-sm-3 text-center table-bordered"><a class="text-white" href="{{route('admin.index')}}" >Panel administaracyjny</a></div>
                @endif
            </div>
        </div>
    </div>

        @yield('contentProfile')


    @stop


