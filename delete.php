<?php

include 'connection.php';

// $id = $_GET['deleteid'];
// echo $id;


if (isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];

$sql = "delete from keepnotes.stickynotes where id = $deleteid" ;

// verify Query

$result = mysqli_query($connection, $sql);

if ($result) {
    header("location: read.php");
}
 else {
    echo "error" . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
  
}


?>