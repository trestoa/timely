<ul class="nav pull-right">
	<li>
    	<p><p class="navbar-text">You are logged in as </p>
    </li>
    <li class="dropdown">
    	<a href="#" class="dropdown-toogle" data-toggle="dropdown">
			<?php echo $_SESSION['username']?>
            <b class="caret"></b>
       	</a>
        <ul class="dropdown-menu">
        	<li><a tabindex="-1" href="./action/view_account.php">Your account</a></li>
            <li><a tabindex="-1" href="./action/logout.php">Logout</a></li>
        </ul>
    </li>
    <li>
    	<form class="navbar-search pull-left">
        	<input type="text" class="search-query" placeholder="Search">
        </form>
    </li>
</ul>