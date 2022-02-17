<?php
        $server = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'db';
        $connection = new mysqli($server, $username, $password, $database, 4306) or die("not 
        connected");
        echo "connected";
       
        $jsondata = file_get_contents("https://jsonplaceholder.typicode.com/posts");
        $array = json_decode($jsondata,true);
        foreach($array as $row)
        {
            $query = "INSERT INTO posts(userId, id,
            title, body) VALUES ('".$row["userId"]."', '".$row["id"
            ]."', '".$row["title"]."', '".$row["body"]."')";
            
            mysqli_query($connection, $query);

        }
        

        
        echo "\nData Inserted";
       
       ?>





