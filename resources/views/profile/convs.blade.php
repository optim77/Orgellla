@extends('main.profile')
@section('contentProfile')
    <div class="container p-5">

        @foreach($convs as $conv)
        <a class="text-dark" href="{{route('showSlug',$conv->product->slug)}}">
            <img  class=" img-responsive" style="width: 100px" src="upload/photos/{{$conv->product->photo1}}">
            {{$conv->product->name}}
        </a>

        <a class="h1 text-center" href="{{route('loadConv',$conv->file)}}"><i class="fas fa-envelope-square"></i></a>
        <hr>
            <a href="">
                @if($conv->f_user == \Illuminate\Support\Facades\Auth::id())

                @elseif($conv->s_user == \Illuminate\Support\Facades\Auth::id())

                @endif
            </a>


            @endforeach

    </div>


@stop