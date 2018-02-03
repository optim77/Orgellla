@extends('master')
@section('promo')

    <div class="container">

    <form action="{{route('updateUserProduct')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}



            <div class="form-group">
                {!! Form::label('name','Title:') !!}
                {!! Form::text('name',$product->name,['class' => 'form-control','required']) !!}
            </div>



            <div class="form-group">
                {!! Form::label('description','Description:') !!}
                {!! Form::textarea('description',$product->description,['class' => 'form-control', 'size' => '30x5','required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category_id','Category:') !!}
                {!! Form::select('category_id',$categories,$categories,['class' => 'form-control','required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('price','Price:') !!}
                {!! Form::text('price',$product->price,['class' => 'form-control w-25','required']) !!}

            </div>

            <div class="">
                <div class="row">
                    <div class="col-sm-4">
                        {!! Form::label('photo1','Main photo:') !!}
                        {!! Form::file('photo1',['class' => 'form-control']) !!}
                    </div>
                    <div class="col-sm-4">
                        {!! Form::label('photo2','Photo') !!}
                        {!! Form::file('photo2',['class' => 'form-control']) !!}
                    </div>
                    <div class="col-sm-4">
                        {!! Form::label('photo3','Photo') !!}
                        {!! Form::file('photo3',['class' => 'form-control']) !!}
                    </div>
                    <div class="col-sm-4">
                        {!! Form::label('photo4','Photo') !!}
                        {!! Form::file('photo4',['class' => 'form-control']) !!}
                    </div>
                    <div class="col-sm-4">
                        {!! Form::label('photo5','Photo') !!}
                        {!! Form::file('photo5',['class' => 'form-control']) !!}
                    </div>
                    <div class="col-sm-4">
                        {!! Form::label('photo6','Photo') !!}
                        {!! Form::file('photo6',['class' => 'form-control']) !!}
                    </div>

                </div>
            </div>
            <input type="hidden" id="product" name="product" value="{{$product->id}}">
            <div class="form-group mt-2">
                {!! Form::submit('Create',['class' => 'btn btn-info']) !!}
            </div>


    </form>

    </div>
    @stop