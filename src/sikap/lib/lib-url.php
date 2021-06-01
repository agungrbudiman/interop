<?php 

	if(isset($_GET['page'])){
		$page = $_GET['page']; 
	}else{
		$page = "Page tidak diset di Method GET";
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
			
		default:
			require_once "index-content.php";
			break;	
	}
?>