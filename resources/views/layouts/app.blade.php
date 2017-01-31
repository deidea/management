<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Management</title>

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

	<!--[if lt IE 9]>
    	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	@if (Auth::check())
		<nav class="navbar navbar-default navbar-static-top">
	        <div class="container">
	            <div class="navbar-header">
	                <!-- Collapsed Hamburger -->
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
	                    <span class="sr-only">Toggle Navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>

	                <!-- Branding Image -->
	                <a class="navbar-brand" href="{{ url('/') }}">
	                    Management
	                </a>
	            </div>

	            <div class="collapse navbar-collapse" id="app-navbar-collapse">
	                <!-- Left Side Of Navbar -->
	                <ul class="nav navbar-nav">
	                    <li>{{ link_to_action('CustomerController@index', 'Customers') }}</li>
	                    <li>{{ link_to_action('ProjectController@index', 'Projects') }}</li>
	                </ul>

	                <!-- Right Side Of Navbar -->
	                <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }}
								<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
									<a href="{{ url('/logout') }}">
										<i class="fa fa-btn fa-sign-out"></i>Logout
									</a>
								</li>
                            </ul>
                        </li>
	                </ul>
	            </div>
	        </div>
	    </nav>
	@endif



	<div class="container">
		@yield('content')
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
