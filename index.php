<?php
	session_start();

	$database = mysqli_connect('192.168.1.9', 'mp_chat', 'mp_chat', 'mp_chat');
	if ( $database == false ) {
		die(mysqli_connect_error());
	}

	$ways = array('home', 'login', 'mp', 'addMp', 'profil', 'register', 'postRegister' , 'userlist', 'archives', 'edit_profil');

	$traitements = array( 'login', 'logout', 'addMp', 'register', 'edit_profil', 'profil');

	$traitementsAdmin = array('statut');

	$page = 'home';
	$errors = array();
	if ( isset($_GET['page']) ) {
		if ( in_array($_GET['page'], $traitements) ) {
			require('apps/traitement_'.$_GET['page'].'.php');
		}
		else if ( isset($_SESSION['id']) && $_SESSION['rights'] == 2 ) {
			if ( in_array($_GET['page'], $traitementsAdmin) ) {
				require('apps/traitement_'.$_GET['page'].'.php');
			}
		}
		if ( in_array($_GET['page'], $ways) ) {
			$page = $_GET['page'];
		}
	}

	require('apps/skel.php');
?>