@extends('master')
@section('promo')
<div class="container">

    <?php $wholeCost = 0 ?>
    <?php $amount = 0 ?>
    @foreach($basket as $b)

        @if($b->complete == 1)

            {{$amount++}}

        <?php $wholeCost += $b->product->price ?>
        <div class="container">
            <div class="media">
                <div class="media-left">
                    <img class=" media-object" width="200px"  src="upload/photos/{{$b->product->photo1}}">
                </div>
                <div class="media-body">
                    <a class="text-dark" href="{{route('showSlug',$b->product->slug)}}">
                        <h4 class="media-heading p-2">{{$b->product->name}}</h4>
                    </a>
                    <p class="media-heading p-2 lead">{{str_limit($b->product->description,200)}}<p/>
                    <div class="row">
                        <div class="col-sm-10">
                            <h4 class="media-heading p-2 lead">{{$b->product->price}} PLN</h4>
                        </div>
                        <div class="col-sm-2">
                            <a href="{{route('deleteFromBasket',$b->id)}}" class="btn btn-danger">X</a>
                        </div>
                    </div>
                    <p></p>
                </div>
            </div>
            <hr>
        </div>

                @endif
        @endforeach

        @if($amount != 0)
        <p class="display-4">Delivery</p>
        @foreach($delivery as $d)

            <div class="form-group table-bordered p-1">
                <label for="delivery">
                    <p class="lead">{{$d->name}}</p>
                    <p class="lead">{{$d->description}}</p>
                    <p class="h4">{{$d->price}} </p>PLN
                </label>
                <input required id="delivery" name="delivery" data-content="{{$d->price}}"  type="radio" class="delivery" value="{{$d->id}}">
            </div>


            @endforeach

            <div class="row">
                <div class="col-sm-10">
                    <p id="costTip" data-content="{{$wholeCost}}" class="h4">{{$wholeCost}} </p>
                </div>
                <div class="col-sm-2">
                    <a class="btn btn-primary" href="">Finalizuj</a>
                </div>
            </div>

            @else

            <div class="display-2 text-center">Twój koszyk jest pusty</div>

        @endif






</div>

    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });



        $(".delivery").click(function () {

            let cost = $(this).attr('data-content');

            let currentCost = $("#costTip").attr('data-content');

            let allCost = parseInt(currentCost) + parseInt(cost);

            $("#costTip").text(allCost+ 'PLN');

        })
    </script>
    
    @stop