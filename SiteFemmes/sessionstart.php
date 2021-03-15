<?php
	session_start();
	if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){
	    echo 'User resolution: ' . $_SESSION['screen_width'] . 'x' . $_SESSION['screen_height'];
	} else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) {
	    $_SESSION['screen_width'] = $_REQUEST['width'];
	    $_SESSION['screen_height'] = $_REQUEST['height'];
	    header('Location: ' . $_SERVER['PHP_SELF']);
	} else {
	    echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>';
	}
?>