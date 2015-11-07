<?php
    $con = mysqli_connect("localhost", "root", "root", "yourHelpToday") or die("Can't connect to database");

    function getObjectFromQuery($query){
        global $con;
        $query = mysqli_query($con, $query);
        $res = mysqli_fetch_assoc($query);
        return $res;
    }

?>