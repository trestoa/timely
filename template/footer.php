<!-- Load addiotional and main script at very last! -->
<?php 
if(isset($additional_script)){
	echo($additional_script . "\n");
}
?>
<script src="<?php echo MAIN_URL . '/static/js/main.js' ?>"></script>
<footer>
<p>powered by: <a href="http://php.net/">PHP</a> and <a href="http://twitter.github.com">Twitter Bootstrap</a></p>
<p>open source: <a href="https://github.com/kleiinnn">Github</a></p>
<p>&copy; 2013, <a href="http://mklein.co.at/">Markus Klein</a></p>
<p>made with &hearts;</p>
</footer>
</body>
</html>