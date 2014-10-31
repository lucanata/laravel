@extends('layout')
@section('content')
	
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                New user registration
            </h1>
        </div>
    <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            New user
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="register">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Surname</label>
                                            <input class="form-control" type="text" name="surname">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" type="text" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="pass1">
                                        </div>
                                        <div class="form-group">
                                            <label>Repeat password</label>
                                            <input class="form-control" type="password" name="pass2">
                                        </div>
                                        <div class="form-group">
                                            <label>Role:</label>
                                            @foreach (Role::all() as $role)
                                            	<div class="radio">
                                                	<label>
                                                    	<input type="radio" name="optionsRadios" id="{{ $role->name }}" value="{{ $role->name }}">
                                                		{{ $role->name }}
                                                	</label>
                                            	</div>
                                            @endforeach
                                        </div>
                                        <button type="submit" formmethod="post" formaction="register" class="btn btn-primary btn-lg btn-block">
                                    		Register
                                		</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@stop