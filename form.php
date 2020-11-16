<!DOCTYPE html>
<html>
<head>
	<title>ITF lab</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#303030;">
	<form action = "insert.php" method = "post" id="CommentForm" >
		<h3 style='color:white;'>Name:</h3><br>
		<input type="text" name = "name" id="idName" placeholder="Enter Name"> <br>
		<h3 style='color:white;'>Comment:</h3><br>
		<textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment"></textarea><br>  
		<h3 style='color:white;'>Link:</h3><br>
		<input type="text" name = "link" id="idLink" placeholder="Enter Link"> <br><br>
		<button type="submit" class="btn btn-success">Submit</button>
	</form> 
</body>
</html>
