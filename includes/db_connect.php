<?php
    $con = mysqli_connect("jq94ic8e6g.database.windows.net", "hayk", "", "yourhelpToday") or die("Can't connect to database");

    function getObjectFromQuery($query){
        global $con;
        $query = mysqli_query($con, $query);
        $res = mysqli_fetch_assoc($query);
        return $res;
    }

?>