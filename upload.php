
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if file already exists
if (file_exists($target_file)) {
  
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {

echo '<script type="text/javascript">

         alert("File size too large");

</script>';
    $uploadOk = 0;
}
// Allow certain file formats 
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "docx" && $imageFileType != "doc" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "csv" && $imageFileType != "xlsx" && $imageFileType != "pptx" && $imageFileType != "exe") {

    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
       // header( "refresh:2;url=/chat" );
    } else {
       
    }
}
//ob_end_flush();
 include("user.php");
?>