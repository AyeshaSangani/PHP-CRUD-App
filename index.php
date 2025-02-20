<?php

include 'connection.php';

if (isset($_POST['submit'])) {
  

$title = $_POST['title'];
$msg = $_POST['msg'];


$sql = "insert into  keepnotes.stickynotes(title, msg) 
  values ('$title' , '$msg')";

  $result = mysqli_query($connection, $sql);


  if ($result) {
    echo "<script>alert('Data Add successfully!');</script>";
    header("Location: read.php");
}
else {
    echo "Error" . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KeepNotes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <!-- =================== -->
   
  <link rel="stylesheet" href="./style.css">

     <!-- ================ -->

    <link rel="icon" type="image/png" href="./l.webp">
    
</head>

<body>


    <!-- ============ -->
    <div class="topbar p-3 text-center text-white" style="background-color: black; border-top:5px solid rgb(25, 85, 175) ; ">
    
        <h3><b><u>CRUD APP using PHP</u></b></h3>
    </div>

    <!-- ============ -->


    <div class="container">

        <div class="card p-3 mt-5">
            <h2 class="text-uppercase"><b><u>Keep Notes App</u></b></h2>

            <form method="post">

                <div class="mb-3">
                    <label for="title" class="form-label">Enter Title</label>
                    <input type="text" class="form-control" placeholder="Enter Your Title" name="title" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Enter Your Message</label>
                    <textarea class="form-control" name="msg" placeholder="Enter Your Message" rows="3" required></textarea>
                </div>

                <button class="btn btn-outline-dark" type="submit" name="submit"> <b>Save </b></button>

            </form>



        </div>



    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
