@extends('main.profile')
@section('contentProfile')
    <div class="container mt-5">

        @foreach($products as $p)

            <div class="container">
                <div class="media">
                    <div class="media-left">
                        <img class=" media-object" width="200px"  src="../upload/photos/{{$p->photo1}}">
                    </div>
                    <div class="media-body">
                        <a class="text-dark" href="{{route('showSlug',$p->slug)}}">
                            <h4 class="media-heading p-2">{{$p->name}}</h4>
                        </a>
                        <p class="media-heading p-2 lead">{{str_limit($p->description,200)}}<p/>
                        <div class="row">
                            <div class="col-sm-8">
                                <h4 class="media-heading p-2 lead">{{$p->price}} PLN</h4>
                            </div>
                            <div class="col-sm-4 text-right">
                                <a href="{{route('userEditProduct',$p->id)}}" class="btn btn-danger">Edytuj</a>
                                <a href="{{route('userDestroyProduct',$p->id)}}" class="btn btn-danger">Zakończ</a>
                            </div>
                        </div>
                        <p></p>
                    </div>
                </div>
                <hr>
            </div>
            
            @endforeach

    </div>
@stop