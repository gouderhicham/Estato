<?php

    $conn = new mysqli("localhost", "root", "", "real-estate");
    $result = $conn->query("SELECT * FROM user");
   $data = array();
   while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
?>