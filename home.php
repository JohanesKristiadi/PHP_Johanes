<?php
    session_start();
    $_SESSION['nama']   = $_POST['nama'];
    $_SESSION['telp']   = $_POST['telepon'];
    $_SESSION['hobi']   = $_POST['hobi'];
    $_SESSION['email']  = $_POST['email'];

    $total = count($_SESSION['hobi']);
    if($_SESSION['nama']==""){
        header("Location:index.php?err=nama harus diisi");
    }
    else if(filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)==""){
        header("Location:index.php?err=format email salah");
    }
    else if(!is_numeric($_SESSION['telp'])){
        header('Location:index.php?err=nomor telepon harus berupa anggka');
    }
    else if(strlen($_SESSION['telp'])<10 || strlen($_SESSION['telp'])>12){
        header("Location:index.php?err=telp harus antara 8-10 angka");
    }
    else if($total <1){
        header("Location:index.php?err=hobi harus diisi");
    }
    else{
        echo "Nama Anda         : ".$_SESSION['nama']."<br>";
        echo "Email Anda        : ".$_SESSION['email']."<br>";
        echo "Nomor Anda        : ".$_SESSION['telp']."<br>";
        echo "Hobi Anda         : ".$_SESSION['hobi']."<br>";
        // echo "Gender Anda       : $gender <br>";
        // echo "Negara Anda       : $negara <br>";
        foreach($_SESSION['hobi'] as $value){
            echo $value.", ";
        }
    }
?>