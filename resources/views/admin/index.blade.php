@extends('master')
@section('promo')

    <div class="container">
        <div class="row">
            <a class="col-sm-12 bg-danger text-center m-1 p-3 text-dark text-center" href="{{route('categoriesAdmin')}}">
                <div class="">
                    <p class="display-4">Categories</p>
                </div>
            </a>


        </div>
    </div>

    @yield('contentProfile')


@stop


