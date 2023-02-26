<?php
    $connection = mysqli_connect('localhost','root','','travel_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $whereAt = $_POST['where'];
        $arriving = $_POST['message'];
        $leaving = $_POST['leaving'];

        $request = " insert into book_form(name, email, number, whereAt, arriving, leaving) values
        ('$name','$email','$number','$whereAt','$arriving','$leaving')";

        mysqli_query($connection, $request);

        header('location:book.php');
    }else{ 
        echo 'something went wrong try again'; 
    }
?>