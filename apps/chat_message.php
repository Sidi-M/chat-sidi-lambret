<?php
$query = "SELECT * FROM message LEFT JOIN users ON users.id=message.id_auteur ORDER BY message.id DESC LIMIT 5";
$mtchat = mysqli_query($database, $query);
while ($message = mysqli_fetch_assoc($mtchat))
{
	require('views/chat_message.phtml');
}
?>