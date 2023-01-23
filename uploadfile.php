<?php
    $target_dir ="upload/";
    $target_file = $target_dir . basename($_FILES['foto']['name']);
    $imageFileType = strtolower(pathinfo($target file, PATHINFO EXTENSION));
    $finfo = new finfo(FILEINFO_MINE_TYPE);

    $ext = array_search(
        $finfo ->file($_FILES['foto']['tmp_name']),
        array(
            'jpg' => 'image/jpeg',
            'png' => 'image/png',

        ));
    if($ext ==''){
        $err = "Only JPG & PNG file are allowed in poster";
    }elseif(file_exists($target_file)){
            $err = "sorry, file already exist";
    }elseif($_FILES['foto']['size'] > 2097152){
        $err = "sorry, maximal photo size is 2 MB";
    }else{
        if (move_uploaded_file($_FILES["foto"]['tmp_name'], $target_file)){
            $err = "The file ".basename( $_FILES["foto"]["name"]). " Has been upload.";
        }else{
            $err = "sorry, there was an error uploading your file.";
        }
    }
?>