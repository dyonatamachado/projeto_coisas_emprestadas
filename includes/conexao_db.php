<?php
    $conn = new mysqli("localhost", "root", "", "coisasemprestadas");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
?>