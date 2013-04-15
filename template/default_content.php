<div class="container">
	<!-- Login for mobile devices -->
	<div class="visible-phone">
    	<ul class="nav nav-pills">
       		<li class="active">
            	<a>Log In</a>
            </li>
       		<li>
            	<a>Sign Up</a>
           	</li>
        </ul>
    	<div class="login-phone">
        	<form class="nav-form" action="<?php echo MAIN_URL . '/action/login.php' ?>" method="post">
            <div class="control-group">
            <label class="control-label" for="login-username">Username</label>
            <div class="controls">
            <input type="text" class="input-block-level" name="username" id="login-username" placeholder="Username">
            </div>
            </div>
            <div class="control-group">
            <label class="control-label" for="login-password">Password</label>
            <div class="controls">
            <input type="password" class="input-block-level" name="password" id="login-password" placeholder="Password">
            </div>
            </div>
            <div class="control-group">
            <div class="controls pull-right">
            <button class="btn btn-primary" id="login-btn" type="submit">Log In</button>
            </div>
            </div>
            </form>
        </div>
        <div class="signup-phone">
            <form class="nav-form" action="<?php echo MAIN_URL . '/action/signup.php' ?>" method="post" onSubmit="return check_signup()">
            <div class="control-group">
            <label class="control-label" for="signup-username">Username</label>
            <div class="controls">
            <input type="text" class="input-block-level" id="signup-username" name="username" placeholder="Username">
            </div>
            </div>
            <div class="control-group">
            <label class="control-label" for="signup-password">Password</label>
            <div class="controls">
            <input type="password" class="input-block-level" id="signup-password" name="password" placeholder="Password">
            </div>
            </div>
            <div class="control-group">
            <label class="control-label" for="signup-repassword">Retype Password</label>
            <div class="controls">
            <input type="password" class="input-block-level" id="signup-repassword" placeholder="Password">
            </div>
            </div>
            <div class="control-group">
            <label class="control-label" for="signup-email">Email</label>
            <div class="controls">
            <input type="email" class="input-block-level" id="signup-email" name="email" placeholder="Email">
            </div>
            </div>
            <div class="control-group">
            <div class="controls pull-right">
            <button class="btn btn-primary" type="submit">Log In</button>
            </div>
            </div>
            </form>
        </div>
    </div>
    <header>
        <h1>timely</h1>
        <p>A simple webbased calender.</p>
    </header>
    <hr>
    <div class="content">
        
    </div>
</div>