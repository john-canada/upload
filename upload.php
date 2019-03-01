<?php

$file = $_FILES['file']; 
// save file to uploads foldersfgsdfg
move_uploaded_file($file['tmp_name'], 'uploads/' . $file['name']);

//redirect to index.php

header('location:index.php');