<?php

session_start();
include('../../database.php');
include('../../app_controller.php');
include('../../header.php');

	$user_id = $_GET['id'];
 	
	$user = Users::getUser($user_id);

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="../../css/bootstrap.css"  />
	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="../../js/bootstrap.min.js" integrity="" medial="all"></script>


</head>
<body>

<?php 

include('../../nav.php');
include('../../login_modal.php');

?>

<div class="container">

	<div class="row">
	
		<h1><?= $user->getUserName() ?></h1>

	</div>

</div>


	<script src="/bootcamp/twitbay/js/app.js" integrity="" medial="all"></script>

</body>
</html>