@extends('master')
@section('promo')
<div class="container">

    <?php $wholeCost = 0 ?>
    @foreach($basket as $b)
        <?php $wholeCost += $b->product->price ?>
        <div class="container">
            <div class="media">
                <div class="media-left">
                    <img class=" media-object" width="200px"  src="upload/photos/{{$b->product->photo1}}">
                </div>
                <div class="media-body">
                    <h4 class="media-heading p-2">{{$b->product->name}}</h4>
                    <p class="media-heading p-2 lead">{{str_limit($b->product->description,200)}}<p/>
                    <div class="row">
                        <div class="col-sm-10">
                            <h4 class="media-heading p-2 lead">{{$b->product->price}} PLN</h4>
                        </div>
                        <div class="col-sm-2">
                            <button id="cancel" class="btn btn-danger">X</button>
                        </div>
                    </div>
                    <p></p>
                </div>
            </div>
            <hr>
        </div>
        @endforeach
        <div class="row">
            <div class="col-sm-10">
                <p class="h4">{{$wholeCost}} PLN</p>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-primary" href="">Finalizuj</a>
            </div>
        </div>

</div>


    @stop