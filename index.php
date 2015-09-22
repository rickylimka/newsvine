<html>

<head>
	<title>test upload videos</title>
</head>

<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		Select image to upload:
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit" value="Upload Image" name="submit">
	</form>
	
	<Label>This is a test video from server</label><br/>
	<iframe width="420" height="315"
		src="uploads/test.mp4">
	</iframe>
	<br/>
	<Label>This is a test video from youtube</label><br/>
	<iframe width="420" height="315"
		src="http://www.youtube.com/embed/XGSy3_Czz8k?autoplay=1">
	</iframe>
</body>
</html>
