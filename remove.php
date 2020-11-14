<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'ohmbase.mysql.database.azure.com', 'ohmzasa203@ohmbase', 'Ohmmie203', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "DELETE FROM guestbook WHERE ('$name', '$comment', '$link')";


if (mysqli_query($conn, $sql)) {
    echo "Record has been remove";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
<html>
    <head>
    </head>
    <body>
        <a href = "index.php">Continue</a>
    </body>
</html>
