<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_array()){

    //echo "<pre>";
    //var_dump($row);
    
    array_push($data, $row);
};

echo json_encode($data);
?>