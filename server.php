<!DOCTYPE html>
<html>
<body>
    <?php                                 
        $servername="jdbc:mysql://localhost:3306/deliveryorders"
        $username = "dewskies";
        $password = "N3rf1r311A";
        
        //create connection
        $conn = new mysqli($servername, $username, $password);
        
        //Check connection
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
    ?>
</body>
</html>