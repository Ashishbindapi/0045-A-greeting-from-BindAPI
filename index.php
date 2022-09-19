<?php
    $servername = "localhost";
    $dbname = "dev7";
    $username = "root";
    $password = "";

    $angle = new Database($servername,$dbname,$username,$password);
    if(isset($_POST['submit']))
        {
            $first_name = $_POST['first_name'];
            $second_name = $_POST['second_name'];
            $mobile = $_POST['mobile'];

            $angle->data($first_name,$second_name,$mobile);
    }

    if($_POST)
    {
        echo "<h4> Success </h4>";
    }

    Class Database
    {
        public $conn;

        public function __construct($servername, $dbname, $username, $password)
        {
            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        }
        public function data($first_name,$second_name,$mobile)
        {
            $query = "INSERT INTO form VALUES(NULL, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$first_name, $second_name,$mobile]);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post" class="text">
        <input type="text" name="first_name" placeholder="First Name"><br>
        <input type="text" name="second_name" placeholder="Second Name"><br>
        <input type="text" name="mobile" placeholder="mobile Number"><br>
        <button type="submit"name="submit">Submit</button>
        <?php
            if(isset($_POST['submit']))
                {
                    $first_name = $_POST['first_name'];
                    $second_name = $_POST['second_name'];
                
                   echo "<h2>Hello $first_name $second_name! Greetings from BindAPI</h2>";
                }
            ?>
    </form>
</body>
</html>

