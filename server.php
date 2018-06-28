<!DOCTYPE html>
<html>
<body>
    <?php                                 
        $username="root";
        $password = "N3rf1r311A";
        
        //create connection
        $conn = new PDO("mysql:host=localhost:3306;dbname=deliveryorders", $username, $password);
        
        //Check connection
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully \n";
        $name = $_POST["name"];
        $water = $_POST["water"];
        $location = $_POST["location"];
        $quantity = $_POST["number"];
        if (date("l") == "Monday")
        {
            echo "monday";
        }
        else if (date("l") == "Tuesday")
        {
            echo "tuesday";
        }
        else if (date("l") == "Wednesday")
        {
            echo "wednesday";
        }
        else if (date("l") == "Thursday")
        {
            echo "thursday";
        }
        else if (date("l") == "Friday")
        {
            echo "friday";
        }
        else
        {
            echo "this date is ineligible for delivery";
        }
    ?>
</body>
</html>