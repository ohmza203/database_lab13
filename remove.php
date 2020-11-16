<html>
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color:#303030;">
        <?php

            $conn = mysqli_init();
            mysqli_real_connect($conn, 'ohmbase.mysql.database.azure.com', 'ohmzasa203@ohmbase', 'Ohmmie203', 'itflab', 3306);
            if (mysqli_connect_errno($conn))
            {
                die('Failed to connect to MySQL: '.mysqli_connect_error());
            }

            $id = $_REQUEST['delete_id'];
            $sql = "DELETE FROM guestbook WHERE id='$id'";


            if (mysqli_query($conn, $sql)) {
                echo "<center><h2 style="color:white;">Record has been removed</h2></center>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
  
            mysqli_close($conn);
        ?>
        <center><a href = "index.php"><button type="button" class="btn btn-info">Continue</button></a></center>
    </body>
</html>
