@extends('master')
@section('promo')


    <div class="container">
        <div class="jumbotron ">
            <div class="row">
                <div class="col-sm-12">
                    @foreach($product as $p)
                        <p class="p-3">
                            <a href="{{route('showSlug',$p->slug)}}">
                                <img class="img-responsive img-circle" style="width: 100px;"  src="../../../upload/photos/{{$p->photo1}}">
                                {{$p->name}}
                            </a>

                        </p>
                        @endforeach
                </div>
                <div class="col-sm-12">
                    <p>
                        {{$user->name}} {{$user->surname}}  Tel: {{isset($user->phone) ? $user->phone : null}}
                    </p>
                </div>
                <div class="col-sm-12 bg-white" style="overflow-y: scroll; height:400px;">

                    @if($conv != null)

                        {!! $conv !!}

                        @endif

                </div>
                <div class="col-sm-12">
                    <form class="form-horizontal" action="{{route('messages')}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="user" value="{{$user->id}}">
                        <input type="hidden" name="productId" value="{{$p->id}}">
                        <textarea name="message"  class="form-control mt-2"  rows="2"></textarea>
                        <div class="col-sm-12 text-right mt-2">
                            <input type="submit" class="btn btn-info">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    @stop