@if(isset($product))


    @foreach($product as $p)


        {{csrf_field()}}
        @include('forms.formerrors')
        <div class="form-group">
            {!! Form::label('name','Title:') !!}
            {!! Form::text('name',$p->name,['class' => 'form-control','required']) !!}
        </div>



        <div class="form-group">
            {!! Form::label('description','Description:') !!}
            {!! Form::textarea('description',$p->description,['class' => 'form-control', 'size' => '30x5','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id','Category:') !!}
            {!! Form::select('category_id',$categories,$p->category_id,['class' => 'form-control','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('price','Price:') !!}
            {!! Form::text('price',$p->price,['class' => 'form-control w-25','required']) !!}

        </div>

        <div class="">
            <div class="row">

                @if($p->photo1 !== null)
                    <div class="col-sm-6">
                        <img class="w-50" src="../../upload/photos/{{$p->photo1}}"><br>
                        <a href="{{route('adminDeletePhoto',[$p->photo1, $p->slug,'photo1'])}}" class="btn btn-danger mt-1">X</a>
                    </div>
                @elseif($p->photo2 !== null)
                    <div class="col-sm-6">
                        <img src="../../upload/photos/{{$p->photo2}}">
                        <button class="btn btn-danger mt-1">X</button>
                    </div>
                @elseif($p->photo3 !== null)
                    <div class="col-sm-6">
                        <img src="../../upload/photos/{{$p->photo3}}">
                        <button class="btn btn-danger mt-1">X</button>
                    </div>
                @elseif($p->photo4 !== null)
                    <div class="col-sm-6">
                        <img src="../../upload/photos/{{$p->photo4}}">
                        <button class="btn btn-danger mt-1">X</button>
                    </div>
                @elseif($p->photo5 !== null)
                    <div class="col-sm-6">
                        <img src="../../upload/photos/{{$p->photo5}}">
                        <button class="btn btn-danger mt-1">X</button>
                    </div>
                @elseif($p->photo6 !== null)
                    <div class="col-sm-6">
                        <img src="../../upload/photos/{{$p->photo6}}">
                        <button class="btn btn-danger mt-1">X</button>
                    </div>
                @endif
            </div>
        </div>

        <script>

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function deleteImage(a,b) {
                alert(a);
            }

        </script>

        <div class="form-group mt-2">
            {!! Form::submit('Create',['class' => 'btn btn-info']) !!}
        </div>



        @endforeach
    @else
    {{csrf_field()}}
    @include('forms.formerrors')
    <div class="form-group">
        {!! Form::label('name','Title:') !!}
        {!! Form::text('name',null,['class' => 'form-control','required']) !!}
    </div>



    <div class="form-group">
        {!! Form::label('description','Description:') !!}
        {!! Form::textarea('description',null,['class' => 'form-control', 'size' => '30x5','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id','Category:') !!}
        {!! Form::select('category_id',$categories,null,['class' => 'form-control','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('price','Price:') !!}
        {!! Form::text('price',null,['class' => 'form-control w-25','required']) !!}

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

    <div class="form-group mt-2">
        {!! Form::submit('Create',['class' => 'btn btn-info']) !!}
    </div>

    @endif



