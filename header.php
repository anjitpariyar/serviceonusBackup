<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#0e3c85">
	<link rel="icon" href="gallery/Logo-Option-fav.png">
	<title>SERVICE ON US- PRODUCT BEHIND THE SERVICE</title>

	<!-- materailizeicon -->
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">

	<!-- flaticon -->
	<link rel="stylesheet" href="./css/font/flaticon.css">
	
	<!-- animate -->
	<!-- <link rel="stylesheet" href="./css/animate.css"> -->

	<!-- slick -->
	<link rel="stylesheet" href="./css/slick/slick-theme.css">
	<link rel="stylesheet" href="./css/slick/slick.css">
	

	<!-- bootstrap -->
	<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">

	<!-- style -->

	<?php $currentpage = $_SERVER['REQUEST_URI'];
	// echo ($currentpage);
	if($currentpage=="/service/" || $currentpage=="/service/index.php") { echo '<link rel="stylesheet" href="./css/style.css">'; }
	else{
		echo '<link rel="stylesheet" href="./css/otherpage.css">';
	}
	?>
</head>
<body>
	
	


