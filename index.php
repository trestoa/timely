<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calender</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./static/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="./static/css/style.css">
    </head>
    
    <body>
    	<div class="navbar navbar-fixed-top">
          <div class="navbar-inner">
                	<div class="container">
                    <a class="brand" href="#">Calender</a>
                    <ul class="nav pull-right">
                    	<li class="dropdown">
                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Log In
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                            	<li>
                                    <form class="nav-form">
                                    	<div class="control-group">
                                        	<label class="control-label" for="login-username">Username</label>
                                            <div class="controls">
                                    			<input type="text" class="input-block-level" id="login-username" placeholder="Username">
                                           	</div>
                                        </div>
                                        <div class="control-group">
                                        	<label class="control-label" for="login-password">Password</label>
                                            <div class="controls">
                                    			<input type="password" class="input-block-level" id="login-password" placeholder="Password">
                                           	</div>
                                        </div>
                                        <div class="control-group">
                                        	<div class="controls pull-right">
                                        		<button class="btn btn-primary">Log In</button>
                                           	</div>
                                     	</div>
                                    </form>
                               	</li>
                            </ul>
                       	</li>
                        <li class="dropdown">
                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Sign Up
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                            	<li>
                                    <form class="nav-form">
                                    	<div class="control-group">
                                        	<label class="control-label" for="signup-username">Username</label>
                                            <div class="controls">
                                    			<input type="text" class="input-block-level" id="signup-username" placeholder="Username">
                                           	</div>
                                        </div>
                                        <div class="control-group">
                                        	<label class="control-label" for="signup-password">Password</label>
                                            <div class="controls">
                                    			<input type="password" class="input-block-level" id="signup-password" placeholder="Password">
                                           	</div>
                                        </div>
                                        <div class="control-group">
                                        	<label class="control-label" for="signup-repassword">Retype Password</label>
                                            <div class="controls">
                                    			<input type="password" class="input-block-level" id="signup-repassword" placeholder="Password">
                                           	</div>
                                        </div>
                                        <div class="control-group">
                                        	<label class="control-label" for="signup-email">Password</label>
                                            <div class="controls">
                                    			<input type="email" class="input-block-level" id="signup-email" placeholder="Email">
                                           	</div>
                                        </div>
                                        <div class="control-group">
                                        	<div class="controls pull-right">
                                        		<button class="btn btn-primary">Log In</button>
                                           	</div>
                                     	</div>
                                    </form>
                               	</li>
                            </ul>
                       	</li>
                    </ul>
                </div>
           	</div>
        </div>
        <div class="container">
        	<header>
            	<h1>Calender</h1>
                <p>A simple webbased calender.</p>
            </header>
            <hr>
            <div class="content">
            	
           	</div>
        </div>
        
        <footer>
        	<p>powered by: <a href="http://php.net/">PHP</a> and <a href="http://twitter.github.com">Twitter Bootstrap</a></p>
            <p>open source: <a href="https://github.com/kleiinnn">Github</a></p>
            <p>&copy;2013, Markus Klein</p>
        </footer>
        <script src="http://code.jquery.com/jquery.js"></script>
		<script src="./static/js/bootstrap.min.js"></script>
    </body>
</html>
