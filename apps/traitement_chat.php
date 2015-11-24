<?php
$content = "";
if (isset($_POST['content'], $_SESSION['id']))
{
    $content = mysqli_real_escape_string($database, $_POST['content']);
    
    if (strlen($_POST['content']) < 1 || strlen($_POST['content']) > 2048)
    {
        $errors[] = "Incorrect content, must be between 2 and 2048 characters";
    }
    $query = "INSERT INTO message (id_auteur, message) VALUES('".$_SESSION['id']."','".$content."')";
    $resultat = mysqli_query($database, $query);
}

?>
