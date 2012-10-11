<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> New Document </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
 </head>

 <body>
  <div id="north">
	<a href="./"><img src="gfx/eco_transparent-small.png" alt="Eco Solutions" /></a>
	<ul>
		<li><a href="./">forside</a></li>
		<li><a href="?side=vann_avlop">vann og avl&Oslash;p</a></li>
		<li><a href="?side=renseanlegg">renseanlegg</a></li>
		<li><a href="?side=referanseprosjekter">referanseprosjekter</a></li>
		<li><a href="?side=teknisk_info">teknisk informasjon</a></li>
	</ul>
	
</div>


<div id="content">
	<?php
	switch ($page) {
		case "hjem":
			require_once('home.php');
			break;
		case "om":
			require_once('about.php');
			break;
			
		case "vann_avlop":
			require_once('vann_avlop.php');
			break;
		case "renseanlegg":
			require_once('renseanlegg.php');
			break;
		case "referanseprosjekter":
			require_once('referanser.php');
			break;
		case "teknisk_info":
			require_once('teknisk.php');
			break;

		default:
			require_once('home.php');
			break;
	}
	?>
	
</div>
 </body>
</html>
