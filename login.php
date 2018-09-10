<?php	

	include ('User.php');

	$email = $_GET['email'];
	$password = $_GET['password'];

	include ('database.php');

	$result = $mysqli->query("SELECT * FROM users WHERE email='" . $email . "' AND password='" . $password . "'");


	if ($result) 
	 	{
	 		// echo print_r($result);
	 		$row = $result->fetch_assoc();

	 		// print_r($row);

            if ($row != null ) {
                $user = new User($row['id'], $row['name'], $row['email']);
            	$_SESSION['username'] = $user->getUserName();
            	echo $_SESSION['username'];
            	return $user;
        	}
   
        } else {
        	echo  $mysqli->error;
        	// return $result;
        }

?>