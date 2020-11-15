<!DOCTYPE html>
<html>
<head>
	<title>Comment Form</title>
</head>
<body>
<?php$edit_id = $_REQUEST['edit_id']; ?>
  <form action = "edit.php?edit_id=<?php echo $edit_id; ?>" method = "post" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" id="idName" placeholder="Enter Name"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment"></textarea><br>  
    Link:<br>
    <input type="text" name = "link" id="idLink" placeholder="Enter Link"> <br><br>
    <input type="submit" id="commentBtn">
  </form> 
</body>
</html>
