@extends('master')
@section('promo')

    <div class="container">
        <p class="display-4">Kategorie</p>
        @foreach($categories as $category)

            <div class="row">
                <div class="col-sm-12 col-md-12 text-center bg-warning p-4 mb-2">
                    <a class="text-dark" href="{{ route('showCategory',$category['slug'])  }}">
                        <i class="fab fa-android h1"></i><br/>
                        {{$category['name']}}
                    </a>
                </div>
            </div>

        @endforeach

    </div>

    @stop