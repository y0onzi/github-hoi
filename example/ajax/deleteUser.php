<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
    include("db_connection.php");

    // get user id
    $user_id = $_POST['id'];

    // delete User
    $query = "DELETE FROM DB";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }
}
?>