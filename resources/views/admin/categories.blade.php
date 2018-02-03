@extends('master')
@section('promo')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Image</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>

        @foreach($categories as $c)
            <tr>
                <th scope="row">1</th>
                <td>{{$c->id}}</td>
                <td>{{$c->name}}</td>
                <td>{{$c->slug}}</td>
                <td>{{$c->image}}</td>
                <td><a href="{{route('editCategory',$c->id)}}"><i class="fas fa-edit"></i></a></td>
                <td><a href="{{route('destroyCategory',$c->id)}}"><i class="fas fa-trash-alt"></i></a></td>
            </tr>

        @endforeach
        </tbody>
    </table>


    @stop