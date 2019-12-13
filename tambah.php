<?php

    include('koneksi.php');

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pesan = $_POST['pesan'];
    // INSERT INTO tiket ('nama kolom','nama kolom') VALUES ('isinya' , 'isinya');
    $query = "INSERT INTO tiket VALUES (Null,'$firstname','$lastname','$email','$phone','$pesan')";
    // $query = "SELECT  * FROM tiket";
    mysqli_query($koneksi,$query);

    header("location:contact_us.php");

    
    

    
    //inputannya melalui file contact_us 

?>