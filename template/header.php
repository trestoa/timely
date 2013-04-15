<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $GLOBALS['title']?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo MAIN_URL . '/static/css/bootstrap.min.css' ?>" rel="stylesheet" media="screen">
<link href="<?php echo MAIN_URL . '/static/css/bootstrap-responsive.min.css' ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo MAIN_URL . '/static/css/style.css' ?>">
</head>
<body>
<!-- Load jquery and bootstrap js at very first -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php echo MAIN_URL . '/static/js/bootstrap.min.js' ?>"></script>
<div class="navbar navbar-static-top">
<div class="navbar-inner">
<div class="container">
<a class="brand" href="#">timely</a>
<?php include($GLOBALS['tmpl_navbar']) ?>
</div>
</div>
</div>
<div id="javascript-alert-area">
</div> 