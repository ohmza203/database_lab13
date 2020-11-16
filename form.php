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
	<form class="form-horizontal" action = "insert.php" method = "post" id="CommentForm" >
		<div class="form-group">
		    <label class="control-label col-sm-2" for="name">Name:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name = "name" id="idName" placeholder="Enter Name">
		    </div>
		 </div>
		 <div class="form-group">
		    <label class="control-label col-sm-2" for="comment">Comment:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name = "comment" id="idComment" placeholder="Enter Comment">
		    </div>
		  </div>
	</form> 
</body>
</html>
