<?php

    $connect = mysqli_connect("localhost", "root", "", "knowlegetest");
    $query = "SELECT id, CONCAT(first_name, ' ', last_name) as name, email, group_name FROM students";
    $result = mysqli_query($connect,$query);
    $table = [];

	while($data = mysqli_fetch_assoc($result)){
        $table['data'][] = $data;
    }
	echo json_encode($table);
