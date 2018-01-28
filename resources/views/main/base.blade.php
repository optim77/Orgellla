@extends('master')
@section('categories')
    <!--CATEGORIES-->
    <div class="container-fluid mt-5">
        <div class="row">
            @foreach($categories as $category)

                <div class="col-md-2 col-sm-2 text-center bg-warning p-4">
                    <a class="text-dark" href="{{ url($category['slug'])  }}">
                        <i class="fab fa-android h1"></i><br/>
                        {{$category['name']}}
                    </a>
                </div>
                @endforeach
        </div>
    </div>

@stop

@section('promo')
    <div class="container-fluid px-5 mt-5 jumbotron jumbotron-fluid">
        <div class="row ">
            @foreach($products as $product)
                <div class="col-md-2 col-sm-2">
                    <a class="text-dark" href="{{route('showSlug',$product->slug)}}">
                        <img class="w-100" src="upload/photos/{{$product->photo1}}">
                        <p class="pt-1">{{$product['name']}}</p>
                        <p class="h4">{{$product->price}} PLN</p>
                    </a>

                </div>

                @endforeach


        </div>
    </div>
@stop