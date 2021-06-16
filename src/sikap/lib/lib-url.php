<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page']; 
	}

	switch ($page) {
/*		case 'data':
			require_once "data.php";
			break;

			case 'data-add':
				require_once "data-add.php";
				break;

		case 'data-edit':
			require_once "data-edit.php";
			break;
*/		
		case 'kehadiran':
			require_once "kehadiran.php";
			break;
			
		case 'forgot':
			require_once "forgot.php";
			break;
			
		case 'reset':
			require_once "reset.php";
			break;

		case 'cuti':
			require_once "cuti.php";
			break;

		case 'cuti-add':
			require_once "cuti-add.php";
			break;

		case 'izin':
			require_once "izin.php";
			break;

		case 'izin-add':
			require_once "izin-add.php";
			break;

		case 'laporan':
			require_once "laporan.php";
			break;
			
		default:
			require_once "index-content.php";
			break;
	}		

?>