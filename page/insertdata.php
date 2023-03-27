<?php
        $mysqli =new mysqli("localhost","root","", "demo1");
        //check connection
        if($mysqli === false){
            die("ERROR:Could not connect. ". $mysqli ->connect_error);
        }
        //
        $sql ="INSERT INTO persons (id,img,nameS,price, button) VALUES('1','.','letruongthanhluan1505@mail.com')";
        if($mysqli ->query($sql) === true){
            echo"Records inserted successfully.";
        }
        else{
            echo"ERROR:Could not able to execute $sql.".$mysqli->error;
        }
        //close
        $mysqli ->close();
?>