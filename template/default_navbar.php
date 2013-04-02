<ul class="nav pull-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Log In
            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
            <li>
                <form class="nav-form" action="./action/login.php" method="post">
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
                <form class="nav-form" action="./action/signup.php" method="post" onSubmit="return check_signin()">
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
                        <label class="control-label" for="signup-email">Password</label>
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
            </li>
        </ul>
    </li>
</ul>