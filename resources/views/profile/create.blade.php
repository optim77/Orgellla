@extends('main.profile')
@section('contentProfile')
    <div class="container p-5">

        {!! Form::open(['route' => 'createAction', 'class' => 'form-horizontal', 'files' => 'true']) !!}
        @include('forms.createform')
        {!! Form::close() !!}
    </div>


    @stop

