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
    <center>"Record has been remove"</center>;
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
