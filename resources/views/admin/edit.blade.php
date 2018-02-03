@extends('master')
@section('promo')

    <div class="container">
        <form method="post" action="{{route('adminUpdateProduct',$slug)}}" enctype="multipart/form-data">
            @include('forms.createform')
        </form>

    </div>

    @stop