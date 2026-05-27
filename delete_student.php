
<?php

include("config/db.php");

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $query = "DELETE FROM students WHERE id='$id'";

    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        header("Location: view_students.php");
    }
    else
    {
        echo "Student Not Deleted";
    }
}

?>