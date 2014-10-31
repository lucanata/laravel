<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gestion</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    @if (Session::has('flash_notice'))
        <div id="flash_error">
            <div class="alert alert-success alert-dismissable">
                <center>
                    {{ Session::get('flash_notice') }}
                </center>
            </div>
        </div>
    @endif

    @if (Session::has('flash_error'))
        <div id="flash_error">
            <div class="alert alert-danger alert-dismissable">
                <center>
                    {{ Session::get('flash_error') }}
                </center>
            </div>
        </div>
    @endif

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
	

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>