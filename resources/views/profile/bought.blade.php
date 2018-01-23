@extends('main.profile')
@section('contentProfile')
    <div class="container mt-5">
        <div class="row">
    @foreach($data as $d)
                <div class="col-sm-4">
                    <a class="text-dark" href="">
                        <div class="card">
                            <img class="card-mig-top w-100" src="{{$d->product->photo1}}" alt="Img">
                            <div class="card-block">
                                <h4 class="card-title">{{$d->product->name}}</h4>
                                <p class="card-text">{{$d->product->description}}</p>
                            </div>
                        </div>
                    </a>

                </div>
    @endforeach
        </div>
        </div>
    @stop