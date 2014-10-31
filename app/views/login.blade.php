@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Log In</h3>
                    </div>
                    <div class="panel-body">
                        	<form role="form" action="login" method="post">
                            <fieldset>
                                <div class="form-group">
                                	<center>
                                    	<input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                	</center>
                                </div>
                                <div class="form-group">
                                    <center>
                                    	<input class="form-control" placeholder="Password" name="password" type="password" value=""><br>
                                	</center>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <center>
                                <button type="submit" formmethod="post" formaction="login" class="btn btn-primary btn-lg btn-block">
                                    Login
                                </button>
                                <!-- <input type="submit" formmethod="post" formaction="login" value="Login"> -->
                                </center>
                            </fieldset>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>			
	
@stop
