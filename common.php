<?php 
  require_once("../lib/Client.php");
  $client = new Client();

  session_start();

  if(!isset($title)) {
    $title = "Sign in to Accounting";
  }

  /*if (!isset($_SESSION['uid']) && ($_SERVER['REQUEST_URI'] !== '/login.php')) {
		header("Location: login.php");
		die();
  }*/

?>

<head>
	<title> <?php echo $title . " - ABETD Solutions" ?></title>

	<!-- Bootstrap -->
	<link href="dependencies/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="dependencies/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<link href="dependencies/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
	<link href="dependencies/assets/styles.css" rel="stylesheet" media="screen">
	<link href="css/style.css" rel="stylesheet" media="screen">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script src="dependencies/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body

<?php

	/*if(!isset($_SESSION['uid'])) {
		include('./includes/login_nav.php'); 
	}
	else {*/
		include('./includes/nav.php');
	//}

?>
	
