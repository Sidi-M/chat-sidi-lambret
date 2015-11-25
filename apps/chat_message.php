<?php
$query = "SELECT * FROM message LEFT JOIN users ON users.id=message.id_auteur ORDER BY message.id DESC LIMIT 5";
$mtchat = mysqli_query($database, $query);
$listmessage = array();
while ($message = mysqli_fetch_assoc($mtchat))
{
	$listmessage[] = $message;
}
	$listmessage = array_reverse($listmessage);


	$i = 0;
while ( isset($listmessage[$i])) 
{
	$message = $listmessage[$i];
	require('views/chat_message.phtml');
	$i++;
}
?>