<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sou";

    $connect = mysqli_connect($servername,$username,$password,$database);

    if($connect -> connect_error)
    {
        die($connect -> connect_error);
    }
    else
    {
        echo " Successfully Connected";
    }

    $name = $_REQUEST['name'];
    $gender = $_REQUEST['gender'];
    $mobile = $_REQUEST['mobile'];
    $email = $_REQUEST['email'];
    $city = $_REQUEST['city'];
    $feed_back = $_REQUEST['feed_back'];
    $suggest = $_REQUEST['suggest'];

    $query = "INSERT INTO soustudents VALUES('$name','$gender','$mobile','$email','$city','$feed_back','$suggest')";

    if(mysqli_query($connect,$query))
    {
        echo "Successfully Saved";
    }
    else
    {
        echo "ERROR $query.".mysqli_error($connect);
    }
    $connect -> close();
?>