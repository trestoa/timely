<?php

/**********************************************************************

timely, a webbased calender
Copyright (C) 2013  Markus Klein <m@mklein.co.at>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.


Made with <3

***********************************************************************/

?>
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
</div>
<div class="main-content-wrapper">
	<div class="container div-center">
        <div class="row-fluid">
            <div class="span4">
                <div class="content">
                    <img src="<?php echo(MAIN_URL) ?>/static/img/manage.png" alt="" class="thumbnail-image">
                    <div class="caption">
                        <h2>Central Managed</h2>
                        <p>Save your appointments central on the server and access them from everywhere.</p>
                    </div>
                </div>
            </div>
            <div class="span4">
            	<img src="<?php echo(MAIN_URL) ?>/static/img/simple.png" alt="" class="thumbnail-image">
                <div class="content">
                    <div class="caption">
                        <h2>Simple Interface</h2>
                        <p>Not much colors, images or content. The lightweight interface helps you to focus your appointments.</p>
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="content">
                    <img src="<?php echo(MAIN_URL) ?>/static/img/dynamic.png" alt="" class="thumbnail-image">
                    <div class="caption">
                        <h2>Fast and Dynamic</h2>
                        <p>Every month is just one click away.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>