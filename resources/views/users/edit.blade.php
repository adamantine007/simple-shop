@extends('app')

@section('content')

    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]) !!}

        <div class="col-xs-5 col-xs-offset-1 col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">

            <!-- Name form field -->
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Surname form field -->
            <div class="form-group">
                {!! Form::label('surname', 'Surname:') !!}
                {!! Form::text('surname', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Middle name form field -->
            <div class="form-group">
                {!! Form::label('middle_name', 'Middle name:') !!}
                {!! Form::text('middle_name', null, ['class' => 'form-control']) !!}
            </div>

        </div>

        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">

            <!-- Phone form field -->
            <div class="form-group">
                {!! Form::label('phone', 'Phone:') !!}
                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Address form field -->
            <div class="form-group">
                {!! Form::label('address', 'Address:') !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
            </div>

        </div>

    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <!-- Submit form button -->
        <div class="form-group">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

    {!! Form::close() !!}

@endsection