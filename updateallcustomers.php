<?php

    include "connection.php" ;
    $fn=$_POST['fn'] ;
    $ln=$_POST['ln'] ;
    $ad=$_POST['ad'] ;
    $id=$_POST['id'] ;

    // Calculate the amount of rows
    $rows=0 ;
    foreach ($id as $row)
    {
        $rows++ ;
    }

    // Update the data

    for($x=0; $x<=$rows; $x++)
    {
        $add=$db->prepare("UPDATE customers SET firstname=:fn, lastname=:ln, streetaddress=:ad WHERE id_customers=:id") ;
        $add->bindParam(':fn', $fn[$x]);
        $add->bindParam(':ln', $ln[$x]);
        $add->bindParam(':ad', $ad[$x]);
        $add->bindParam(':id', $id[$x]);

        $add->execute() ;
    }

    header('Location: customers.php') ;
?>