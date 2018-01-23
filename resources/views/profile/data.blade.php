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
        </div>
    </div>

    </div>
    @stop