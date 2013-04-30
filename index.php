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

//echo curPageURL();
//echo "<br>";
//print str_replace("www.antoniocarlosribeiro.com", "antoniocarlosribeiro.smugmug.com", curPageURL());

?>

<!--DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"
   "http://www.w3.org/TR/html4/frameset.dtd">
<HTML>
  <HEAD>
    <TITLE>Antonio Carlos Ribeiro.com - Fotografia</TITLE>
  </HEAD>
  <FRAMESET cols="100%">
    <FRAMESET rows="100%">
        <FRAME src="<?php echo str_replace("www.antoniocarlosribeiro.com", "antoniocarlosribeiro.smugmug.com", curPageURL()); ?>">
    </FRAMESET>
  </FRAMESET>
</HTML>-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"
   "http://www.w3.org/TR/html4/frameset.dtd">
<HTML>
  <HEAD>
    <TITLE>Antonio Carlos Ribeiro.com - Fotografia</TITLE>
  </HEAD>
  <FRAMESET cols="100%">
    <FRAMESET rows="100%">
        <FRAME src="<? print str_replace("www.antoniocarlosribeiro.com", "antoniocarlosribeiro.smugmug.com", curPageURL()); ?>">
    </FRAMESET>
  </FRAMESET>
</HTML>>
