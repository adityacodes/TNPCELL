@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @if(Session::has('success'))
    
            <div class="alert alert-success alert-dismissible spacer2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Success:</strong> {{Session::get('success')}}
            </div>
        @endif
        @if(Session::has('warning'))
    
            <div class="alert alert-danger alert-dismissible spacer2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Warning:</strong> {{Session::get('warning')}}
            </div>
        @endif
      </div>

      <div class="row mainbody">  
        <div class="col-md-8 col-md-offset-2" style="margin-top: 20px;">
            <div class="card">
                <div class="header">

                    <strong class="login"><i class="fa fa-pencil"></i> Login Here</strong>

                    <a href="{{ url('/register') }}">
                        <button class="btn btn-primary btn-md pull-right">
                            <i class="fa fa-btn fa-user"></i> Register
                        </button>
                    </a>
                    <div class="clearfix"></div>
                    <hr>
                </div>
                <div class="content">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope-o fa-fw"></i>
                                    </span>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-key fa-fw"></i>
                                    </span>
                                    <input id="password" type="password" class="form-control" name="password">
                                </div>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-md">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
