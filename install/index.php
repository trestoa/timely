<!DOCTYPE html>
<html>
    <head>
        <title>timely installation wizard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../static/css/bootstrap.css" rel="stylesheet" media="screen">
    </head>
    <body>
    	<div class="container">
            <h1>timely installation wizard</h1>
            <?php
                if(isset($_GET['step'])){
                    $step = $_GET['step'];
                }
                else{
                    $step = 1;
                }
                include('step_' . $step . '.php');
            ?>
        </div>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>