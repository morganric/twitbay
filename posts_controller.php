<?php

include('Post.php');

Class Posts {


	public function getAll() {
        require('database.php');
        $posts = [];


        if ($result = $mysqli->query('SELECT * FROM posts')) {
            while ($row = $result->fetch_assoc()) {

            	$post = new Post($row['id'], $row['user_id'], $row['title'], 
            		$row['body'], $row['images']);
                $posts[] =  $post;
            }

            return $posts;
        }
    }
}