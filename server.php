<!DOCTYPE html>
<html>
<body>
    <?php  
        if (isset ($_POST['submit']))
        {
            $servername = "localhost";
            $username="root";
            $password = "N3rf1r311A";
            $dbname = "code";

            //create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            if($conn->connect_error)
            {
                die("Connection failed: " . $conn->connect_error);
            }
            //Check connection
            if (isset($_POST['submit']))
            {
                echo "Connected successfully \n";
                if(isset($_POST['title']))
                {
                    $nom = $_POST['title'];
                    echo $nom;
                }
                if(isset($_POST['location']))
                {
                    $place = $_POST['location'];
                    echo $place;
                }
                if(isset($_POST['type']))
                {
                    $type = $_POST['type'];
                    echo $type;
                }
                if(isset($_POST['number']))
                {
                    $value = $_POST['number'];
                    echo $value;
                }
                if(isset($_POST['address']))
                {
                    $addy = $_POST['address'];
                    echo $addy;
                }
            }
            $today = date('Y-m-d');
            if (date("l") == "Monday")
            {
                $sql = "INSERT INTO monday (name, water, quantity, date, location, address) VALUES ('$nom', '$type', '$value', '$today', '$place', '$addy')";
                if($conn->query($sql) === true)
                {
                    echo "monday delivery entered!";
                }
                else
                {
                    echo "Error: $conn->error";
                }
            }
            else if (date("l") == "Tuesday")
            {
                $sql = "INSERT INTO tuesday (name, water, quantity, date, location, address) VALUES ('$nom', '$type', '$value', '$today', '$place', '$addy')";
                if($conn->query($sql) === true)
                {
                    echo "tuesday";
                }
                else
                {
                    echo "Error: $conn->error";
                }
            }
            else if (date("l") == "Wednesday")
            {
                $sql = "INSERT INTO wednesday (name, water, quantity, date, location, address) VALUES ('$nom', '$type', '$value', '$today', '$place', '$addy')";
                if($conn->query($sql) === true)
                {
                    echo "wednesday delivery entered!";
                }
                else
                {
                    echo "Error: $conn->error";
                }
            }
            else if (date("l") == "Thursday")
            {
                $sql = "INSERT INTO thursday (name, water, quantity, date, location, address) VALUES ('$nom', '$type', '$value', '$today', '$place', '$addy')";
                if ($conn->query($sql) === true)
                {
                    echo "thursday delivery entered!";
                }
                else
                {
                    echo "Error: $conn->error";
                }
            }
            else if (date("l") == "Friday")
            {
                $sql = "INSERT INTO friday (name, water, quantity, date, location, address) VALUES ('$nom', '$type', '$value', '$today', '$place', '$addy')";
                if ($conn->query($sql) === true)
                {
                    echo "friday delivery entered!";
                }
                else
                {
                    echo "Error: $conn->error";
                }
            }
            else
            { 
                $sql = "INSERT INTO monday (name, water, quantity, date, location, address) VALUES ('$nom', '$type', '$value', '$today', '$place', '$addy')";
                if ($conn->query($sql) === true)
                {
                    echo "delivery entered!";
                }
                else
                {
                    echo "Error: $conn->error";    
                }
                //echo "this date is ineligible for delivery";
            }
            $conn = null;
        }
    ?>
</body>
</html>