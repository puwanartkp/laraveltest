<?php

        $conn = new mysqli("localhost", "root", "", "arena_groove") or die(mysqli_error());

        $query = $conn->query("SELECT * FROM `member` WHERE `id` = '$_SESSION[user_login]'") or die(mysqli_error());
        $fetch = $query->fetch_array();
        $member_name = $fetch['member_name'];
    
?>
