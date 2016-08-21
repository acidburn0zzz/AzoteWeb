@extends('layouts.admin.admin')
@section('title') User create @endsection
@section('page-title') User (Web Account): Create @endsection
@section('content')
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="m-b-30">
                                <a href="{{ route('admin.users') }}" class="btn btn-primary waves-effect waves-light btn-lg m-b-5"><i class="zmdi zmdi-long-arrow-return"></i> Return to list</a>
                            </div>
                                {!! Form::open(['route' => 'admin.user.store', 'files' => true]) !!}
                                {{ method_field('POST') }}
                            <div class="row">
                                <div class="row">
                                    {{ Html::image('imgs/avatar/default.jpg', 'avatar', ['class' => 'img-circle img-thumbnail center-block m-b-30']) }}

                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }}">
                                                <label for="firstname">Firstname:</label>
                                                {!! Form::text('firstname', null, ['class' => 'form-control', 'id' => 'firstname']) !!}
                                                @if ($errors->has('firstname'))
                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('firstname') }}</strong>
                                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
                                                <label for="lastname">Lastname:</label>
                                                {!! Form::text('lastname', null, ['class' => 'form-control', 'id' => 'lastname']) !!}
                                                @if ($errors->has('lastname'))
                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('lastname') }}</strong>
                                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">Email:</label>
                                        {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('rank') ? ' has-error' : '' }}">
                                        <label for="rank">Rank:</label>
                                        {!! Form::select('rank', ['0' => 'User', '4' => 'Admin'], null,['class' => 'form-control', 'id' => 'rank']) !!}
                                        @if ($errors->has('rank'))
                                            <span class="help-block">
                                                                            <strong>{{ $errors->first('rank') }}</strong>
                                                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">Password:</label>
                                        {!! Form::password('password',['class' => 'form-control']) !!}
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('passwordConfirmation') ? ' has-error' : '' }}">
                                        <label for="password_confirmation">Confirmation:</label>
                                        {!! Form::password('passwordConfirmation',['class' => 'form-control']) !!}
                                        @if ($errors->has('passwordConfirmation'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('passwordConfirmation') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('active') ? ' has-error' : '' }}">
                                        <div class="checkbox checkbox-primary">
                                                {!! Form::checkbox('active',1,null, ['id' => 'active']) !!}
                                            <label for="active">Active user directly</label>
                                        </div>
                                        <small>(If you didn't check, an email will be send to user)</small>
                                    @if ($errors->has('active'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('active') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                </div>
                            </div>
                                {!! Form::submit('Create', ['class' => 'btn btn-info']) !!}
                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection