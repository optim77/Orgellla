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

    {!! Form::label('amount','Amount:') !!}
    {!! Form::text('amount',null,['class' => 'form-control w-25','required']) !!}
</div>

<div class="">
    <div class="row">
        <div class="col-sm-4">
            {!! Form::label('photo1','Main photo:') !!}
            {!! Form::file('photo1',['class' => 'form-control']) !!}
        </div>
        <div class="col-sm-4">
            {!! Form::label('photo2','Main photo:') !!}
            {!! Form::file('photo2',['class' => 'form-control']) !!}
        </div>
        <div class="col-sm-4">
            {!! Form::label('photo3','Main photo:') !!}
            {!! Form::file('photo3',['class' => 'form-control']) !!}
        </div>
        <div class="col-sm-4">
            {!! Form::label('photo4','Main photo:') !!}
            {!! Form::file('photo4',['class' => 'form-control']) !!}
        </div>
        <div class="col-sm-4">
            {!! Form::label('photo5','Main photo:') !!}
            {!! Form::file('photo5',['class' => 'form-control']) !!}
        </div>
        <div class="col-sm-4">
            {!! Form::label('photo6','Main photo:') !!}
            {!! Form::file('photo6',['class' => 'form-control']) !!}
        </div>

    </div>
</div>
<div class="form-group mt-2">
    <labl for="start">Publish date</labl>
    <input id="start" name="start" type="datetime-local" class="form-control">
</div>


<div class="form-group mt-2">
    {!! Form::submit('Create',['class' => 'btn btn-info']) !!}
</div>