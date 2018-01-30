@extends('master')
@section('promo')

    <div class="container">
        <form method="post" action="{{route('adminUpdateProduct',$slug)}}">
            @include('forms.createform')
        </form>

    </div>

    @stop