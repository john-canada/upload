

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download files</title>
</head>
<body>
    
<form method="post" action="upload.php" enctype="multipart/form-data" >
<input type="file" name="file">
<input type="submit" value="Upload">

</form>

<?php
   // display download files and make it available for download
   $files=scandir('uploads'); 
    foreach($files as $file){ ?>
    <p>
       <a download="<?php echo $file;?>" href="uploads/<?php echo $file;?>"><?php echo $file;?></a>
    </p>   
   <?php }

?>

</body>
</html>