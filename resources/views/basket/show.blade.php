@extends('master')
@section('promo')
<div class="container">
    @foreach($basket as $b)

        <div class="container">
            <div class="media">
                <div class="media-left">
                    <img class=" media-object" width="200px"  src="upload/photos/{{$b->product->photo1}}">
                </div>
                <div class="media-body">
                    <h4 class="media-heading p-2">{{$b->product->name}}</h4>
                    <p class="media-heading p-2 lead">{{str_limit($b->product->description,200)}}<p/>
                    <h4 class="media-heading p-2 lead">{{$b->product->price}} PLN</h4>
                    <p></p>
                </div>
            </div>
            <hr>
        </div>
        @endforeach
</div>


    @stop