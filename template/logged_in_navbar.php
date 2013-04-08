<ul class="nav pull-right">
<li class="dropdown">
<a href="#" class="dropdown-toogle" data-toggle="dropdown">
<?php echo $_SESSION['username']?>
<b class="caret"></b>
</a>
<ul class="dropdown-menu">
<li><a tabindex="-1" href="<?php echo(MAIN_URL . "/action/view_account.php")?>">Your account</a></li>
<li><a tabindex="-1" href="<?php echo(MAIN_URL . "/action/logout.php")?>">Logout</a></li>
</ul>
</li>
<li>
<form class="navbar-search pull-left">
<input type="text" class="search-query" placeholder="Search">
</form>
</li>
</ul>	