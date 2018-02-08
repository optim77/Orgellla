<div id="data" class="col-sm-12 mt-5 ">
    <form class="form-horizontal" method="POST" action="{{ route('editProfileAction') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Name</label>

            <div class="col-md-12">
                <input id="name" type="text" class="form-control" name="name" value="{{ $data['name'] }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
            <label for="surname" class="col-md-4 control-label">Surname</label>

            <div class="col-md-12">
                <input id="surname" type="text" class="form-control" name="surname" value="{{ $data['surname'] }}" required autofocus>

                @if ($errors->has('surname'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
            <label for="street" class="col-md-4 control-label">Street</label>

            <div class="col-md-12">
                <input id="street" type="text" class="form-control" name="street" value="{{ $data['street'] }}"  autofocus>

                @if ($errors->has('street'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('street') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
            <label for="city" class="col-md-4 control-label">City</label>

            <div class="col-md-12">
                <input id="city" type="text" class="form-control" name="city" value="{{ $data['city'] }}"  autofocus>

                @if ($errors->has('city'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
            <label for="number" class="col-md-4 control-label">Number</label>

            <div class="col-md-12">
                <input id="number" type="text" class="form-control" name="number" value="{{ $data['number'] }}"  autofocus>

                @if ($errors->has('number'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
            <label for="zip" class="col-md-4 control-label">Zip-Code</label>

            <div class="col-md-12">
                <input id="zip" type="text" class="form-control" name="zip" value="{{ $data['zip'] }}"  autofocus>

                @if ($errors->has('zip'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <label for="phone" class="col-md-4 control-label">Phone</label>

            <div class="col-md-12">
                <input id="phone" type="text" class="form-control" name="phone" value="{{ $data['phone'] }}" required autofocus>

                @if ($errors->has('phone'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Update
                </button>

            </div>
        </div>
    </form>
</div>