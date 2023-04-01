<?php
        $mysqli =new mysqli("localhost","root","","LISTPRODUCT");
        //check connection
        if($mysqli === false){
            die("ERROR:Could not connect. ". $mysqli ->connect_error);
        }
        //
        $sql ="CREATE TABLE blog(
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            img VARCHAR(100) NOT NULL,
            cardname  VARCHAR(50) NOT NULL,
            descriptions VARCHAR(30) NOT NULL
        )";
       
        if($mysqli ->query($sql)=== true){
            echo "Table creat succsessfully.";
        }
        else{
            echo"ERROT:Could not able to execute $sql.".$mysqli->error;
        }

        //close connection
        $mysqli->close();
    ?>
