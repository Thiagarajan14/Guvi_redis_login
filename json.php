<?php
    $connection = mysqli_connect("localhost","root","","college") or die("Error " . mysqli_error($connection));

    $sql = "select * from registration";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    $user = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $user[] = $row;
    }
    echo json_encode($user);

    $fp = fopen('users.json', 'w');
    fwrite($fp, json_encode($user));
    fclose($fp);

    mysqli_close($connection);
?>