

@if(isset($category))
    @foreach($category as $c)

    {{csrf_field()}}
    @include('forms.formerrors')
    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',$c->name,['class' => 'form-control','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo1','Main photo:') !!}
        {!! Form::file('photo1',['class' => 'form-control']) !!}
    </div>

    @endforeach
    @else

    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class' => 'form-control','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo1','Main photo:') !!}
        {!! Form::file('photo1',['class' => 'form-control']) !!}
    </div>

    @endif


