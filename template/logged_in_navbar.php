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

<ul class="nav pull-right">
<li class="dropdown">
<a href="#" class="dropdown-toogle" data-toggle="dropdown">
<?php echo $_SESSION['username']?>
<b class="caret"></b>
</a>
<ul class="dropdown-menu">
<!-- Not implemented yet!! -->
<!--li><a tabindex="-1" href="<?php /*echo(MAIN_URL . "/action/view_account.php")*/?>">Your account</a></li-->
<li><a tabindex="-1" href="<?php echo(MAIN_URL . "/action/logout.php")?>">Logout</a></li>
</ul>
</li>
<!-- Not implemented as well. -->
<!--li>
<form class="navbar-search pull-left">
<input type="text" class="search-query" placeholder="Search">
</form-->
</li>
</ul>	