<?php

Class Users {

	public function listAll() {
        require('database.php');
        if ($result = $mysqli->query('SELECT * FROM users')) {
            while ($row = $result->fetch_assoc()) {
                echo '<a href="/bootcamp/twitbay/views/user/show.php?id=' . $row["id"] . '" />' . $row["name"] . '</a><br>';
            }
        }
    }

    public static function getUser($id) {
        require('database.php');

        $query = 'SELECT * FROM users WHERE id=' . $id;

        // echo $query;

        $result = $mysqli->query($query);

        if ($result) {

        	// print_r($result->fetch_assoc());

            while ($row = $result->fetch_assoc())
            {	
            	// echo $row;
                $user = new User($row['id'], $row['name'], $row['email']);
                return $user;
            }

        }
    }
}