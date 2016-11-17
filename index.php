<?php

	$view = isset($_GET['view']) ? $_GET['view'] : 'index';
	require('core/libs/smarty/Smarty.class.php');

	if (file_exists('core/controllers/'.$view.'Controller.php')) {
		# code...
		include('core/controllers/'.$view.'Controller.php');
	} else { 
		//paginan de error
		include('core/controllers/indexController.php');
	}
