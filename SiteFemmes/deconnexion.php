<?php
	session_start();
	session_destroy();
	echo '<META http-EQUIV="Refresh" CONTENT="0; url=index.php"/>';
?>