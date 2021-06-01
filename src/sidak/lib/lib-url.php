<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page']; 
	}

	switch ($page) {
		case 'data':
			require_once "data.php";
			break;

		case 'data-add':
			require_once "data-add.php";
			break;

		case 'data-edit':
			require_once "data-edit.php";
			break;
			
		case 'forgot':
			require_once "forgot.php";
			break;
			
		case 'reset':
			require_once "reset.php";
			break;
			
		case 'pendidikan':
			require_once "pendidikan.php";
			break;

		case 'pendidikan-add':
			require_once "pendidikan-add.php";
			break;

		case 'pendidikan-edit':
			require_once "pendidikan-edit.php";
			break;

		case 'keluarga':
			require_once "keluarga.php";
			break;

		case 'keluarga-add':
			require_once "keluarga-add.php";
			break;

		case 'keluarga-edit':
			require_once "keluarga-edit.php";
			break;

		default:
			require_once "index-content.php";
			break;
	}
?>