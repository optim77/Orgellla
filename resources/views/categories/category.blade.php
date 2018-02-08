@extends('master')
@section('promo')

    <div class="container">
        @foreach($products as $p)

            <div class="row p-3">
                <div class="col-sm-3">
                    <a style="text-decoration: none" class="text-dark" href="{{route('showSlug',$p->slug)}}">
                        <img class="w-100" src="../upload/photos/{{$p->photo1}}">
                    </a>
                </div>
                <div class="col-sm-9">

                        {{$p->name}}
                        <p>{{str_limit($p->description,500)}}</p>
                        <p class="lead">{{$p->price}} PLN</p>
                        <hr>
                    </a>
                </div>

            </div>

        @endforeach

            {{ $products->links('vendor/pagination.bootstrap-4') }}
    </div>


    @stop