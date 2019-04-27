<?php
    session_start();
    $regno = $_SESSION['regno'];
    
    $reg = md5($regno);
    $cwd = getcwd();
    $target_dir =  $cwd.'/upload/'.$reg;
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

foreach($_FILES['fileToUpload']['name'] as $key=>$val){

    $target_file = $target_dir ."/". basename($_FILES["fileToUpload"]["name"][$key]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
// Check if file already exists
    if (file_exists($target_file)) {
        $message = "Sorry, file already exists.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"][$key] > 500000) {
        $message = "Sorry, your file is too large.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($fileType != "pdf" ) {
        $message = "Sorry, only PDF files are allowed.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $message =  "Sorry, your file was not uploaded.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$key], $target_file)) {
            $message =  "The file ". basename( $_FILES["fileToUpload"]["name"][$key]). " has been uploaded.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0;url=profile.php\">";
        } else {
            $message =  "Sorry, there was an error uploading your file.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0;url=profile.php\">";
        }
    }
}
?>