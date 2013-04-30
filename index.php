<?php

  function curPageURL() {
	$pageURL = 'http';
	if (isset($_SERVER["HTTPS"]) and $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}

	return $pageURL;
  }

  function replace($smug, $url) {
	$url = str_replace("www.antoniocarlosribeiro.com", $smug, $url);
	$url = str_replace("antoniocarlosribeiro.com", $smug, $url);
	$url = str_replace("172.17.0.2/consultoriu.com/acr.php", $smug, $url);
	return $url;
  }

  // var_dump( replace("antoniocarlosribeiro.smugmug.com", curPageURL()) );
  // die;
?>

<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE>Antonio Carlos Ribeiro.com - Fotografia</TITLE>
	</HEAD>
	<FRAMESET cols="100%">
		<FRAMESET rows="100%">
			<FRAME src="<? print replace("antoniocarlosribeiro.smugmug.com", curPageURL()); ?>">
		</FRAMESET>
	</FRAMESET>
</HTML>
