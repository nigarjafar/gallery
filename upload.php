<!DOCTYPE html>
<html>
	<head>
		<title>Upload a file</title>
		<link rel="stylesheet" href="css/bootstrap.css">
   	<link rel="stylesheet" href="css/bootstrap-theme.css">
	</head>
	<body>
		<div class="container">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input class="form-control" type="text" name="name">
				</div>
				<div class="form-group">
					<input class="form-control" type="file" name="file">
				</div>
				<div class="form-group">
					<input class="form-control btn btn-success" type="submit" name="submit">
				</div>
			</form>
			<?php
				include "db.php";
				if(isset($_POST['submit'])){
					if(!empty($_POST['name'])){
						if(!empty($_FILES['file'])){
							
							$name=$_POST['name'];
							$fileSource=$_FILES['file']['tmp_name'];
							$fileType=pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
							$fileFolder=null;
							
							if($fileType=="jpg" || $fileType=="png" || $fileType=="jpeg" || $fileType=="JPG" || $fileType=="PNG" || $fileType=="JPEG"){
								$fileFolder="image";
							}else if($fileType=="wmv" || $fileType=="mp4" || $fileType=="avi" || $fileType=="WMV" || $fileType=="MP4" || $fileType=="AVI"){
								$fileFolder="video";
							}else if($fileType=="mp3" || $fileType=="MP3" || $fileType=="wav" || $fileType=="WAV"){
								$fileFolder="audio";
							}else
								echo "This file type is not supported";
							
							//If a file has been chosen to upload
							if($fileFolder){
								$targetFile="uploads/$fileFolder/".date('dmYGIs').".".$fileType;
								$connection->insert("gallery","name,type,location","'$name','$fileFolder','$targetFile'");
								move_uploaded_file($fileSource,$targetFile);
							}
							
						}else
							echo "Add a file";
					}else
						echo "Write a name";
				}
			?>
		</div>
	</body>
</html>