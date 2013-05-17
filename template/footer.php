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
<!-- Load additional and main script at very last! -->
<?php 
if(isset($additional_script)){
	echo($additional_script . "\n");
}
?>
<script src="<?php echo MAIN_URL . '/static/js/main.js' ?>"></script>
<footer>
<p>powered by: <a href="http://php.net/">PHP</a>, <a href="http://jquery.com/">jQuery</a> and <a href="http://twitter.github.com">Twitter Bootstrap</a></p>
<p>open source: <a href="https://github.com/kleiinnn/timely">Github</a></p>
<p>hosted by <?php echo('<a href="' . HOSTER_URL . '">' . HOSTER_NAME . '</a>'); ?></p>
<p>contact: <?php echo('<a href="mailto:' . CONTACT_EMAIL . '">' . CONTACT_EMAIL . '</a>'); ?>
<p>&copy; 2013, <a href="http://mklein.co.at/">Markus Klein</a></p>
<p>made with &hearts;</p>
</footer>
</body>
</html>