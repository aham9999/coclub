
<?php
include('connection.php'); 

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    
    $event_name = $_POST["eventname"];
    $content = $_POST["content"];
    $googleform = $_POST["googleform"];
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];	
		$folder = "images/".$filename;
		
	

		// Get all the submitted data from the form
		$sql = "INSERT INTO events (images,event_name, content,googleform) VALUES ('$filename','$event_name', '$content','$googleform')";

		// Execute query
		mysqli_query($con, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
	}

    
  
     
}



?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="css/upload_event.css"/>
<div id="content">

<form class="myform" method="POST" action="" enctype="multipart/form-data">
    <lable for="eventname">Enter Event Name</lable></br>
    <input type="text" name="eventname"></br>
    <lable for="content">Event Details</lable></br>
    <input type="text" style="padding: 160px;" name="content"></br>
    <lable for="googleform">Registration Link</lable><br>
    <input type="text" name="googleform"></br>

	<input type="file" name="uploadfile" value=""/>
    
		
	<div>
		<button type="submit" name="upload">UPLOAD</button>
		</div>
</form>
</div>
</body>
</html>
