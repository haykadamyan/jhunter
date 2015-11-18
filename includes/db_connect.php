<?php
    $con = mysqli_connect("hxbs8nkiec.database.windows.net:1433", "hayk", "Password15", "yourHelpToday") or die("Can't connect to database");

    function getObjectFromQuery($query){
        global $con;
        $query = mysqli_query($con, $query);
        $res = mysqli_fetch_assoc($query);
        return $res;
    }

?>