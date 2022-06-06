<?php

    $connection = mysqli_connect('localhost','root','','book_db');
    if(isset($_POST['send2'])){
        $first_n = $_POST['fname'];
        $last_n = $_POST['lname'];
        $email_add = $_POST['email'];

        $request = " insert into newsletter(f_name, l_name, email) values('$first_n','$last_n','$email_add')";

        mysqli_query($connection, $request);

        header('location:http://localhost/worldcoast/Src/Pages/success.php');


    }else{
        echo "something went wrong try again";
    }


?>