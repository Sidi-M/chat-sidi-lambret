<?php
$titre = "ShadowPikachu";

if (isset($_GET['ajax']))
{
	require('apps/chat_message.php');	
}
else {
	
require('views/skel.phtml');
}
?>