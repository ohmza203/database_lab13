<html>
    <head>
        <title>ITF Lab</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color:#303030;">
        <?php
            $conn = mysqli_init();
            mysqli_real_connect($conn, 'ohmbase.mysql.database.azure.com', 'ohmzasa203@ohmbase', 'Ohmmie203', 'itflab', 3306);
            if (mysqli_connect_errno($conn))
            {
                die('Failed to connect to MySQL: '.mysqli_connect_error());
            }
            $res = mysqli_query($conn, 'SELECT * FROM guestbook');
        ?>
        <table class="table table-dark table-hover table table-bordered table table-hover">
            <tr>
                <th width="25%"> <div align="center"><h4>Name</h4></div></th>
                <th width="37%"> <div align="center"><h4>Comment </h4></div></th>
                <th width="25%"> <div align="center"><h4>Link </h4></div></th>
                <th width="13%"> <div align="center"><h4>Action </h4></div></th>
            </tr>
        <?php
            while($Result = mysqli_fetch_array($res))
            {
        ?>
            <tr>
                <td><?php echo $Result['Name'];?></div></td>
                <td><?php echo $Result['Comment'];?></td>
                <td><?php echo $Result['Link'];?></td>
                <td><?php echo $Result['Action'];?><center><a href = "remove.php?delete_id=<?php echo $Result['ID']; ?>"><button type="button" class="btn btn-warning">Remove</button></a>
                    <a href = "edit_form.php?edit_id=<?php echo $Result['ID']; echo $Result['Name']; echo $Result['Comment']; echo $Result['Link']; ?>"><button type="button" class="btn btn-warning">Edit</button></a></center></td>
            </tr>
        <?php
            }
        ?>
        </table>
        <?php
            mysqli_close($conn);
        ?>
        <center><a href = "form.php"><button type="button" class="btn btn-info">Add</button></a></center>
    </body>
</html>
