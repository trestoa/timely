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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $GLOBALS['title']?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo MAIN_URL . '/static/css/bootstrap.css' ?>" rel="stylesheet" media="screen">
<link href="<?php echo MAIN_URL . '/static/css/bootstrap-responsive.min.css' ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo MAIN_URL . '/static/css/style.css' ?>">
</head>
<body>
<!-- Load jquery and bootstrap js at very first -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php echo MAIN_URL . '/static/js/bootstrap.min.js' ?>"></script>
<div class="navbar navbar-static-top navbar-inverse">
<div class="navbar-inner">
<div class="container">
<a class="brand" href="#">timely</a>
<?php include($GLOBALS['tmpl_navbar']) ?>
</div>
</div>
</div>
<div id="javascript-alert-area">
</div> 