<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <input type="text" name="first_name" placeholder="First Name">
        <input type="text" name="second_name" placeholder="Second Name">
        <input type="text" name="mobile" placeholder="mobile Number">
        <button type="submit"name="submit">Submit</button>
        <?php
           /* if(isset($_POST['submit']))
                {
                    $first_name = $_POST['first_name'];
                    $second_name = $_POST['second_name'];
                    $mobile = $_POST['mobile'];
                   echo "<h2>Hello $first_name $second_name $mobile! Greetings from BindAPI</h2>";
                } */
            ?>
    </form>
</body>
</html>
<?php
 $servername='localhost';
 $username='root';
 $password='';
 $dbname = "dev7";
 $conn=mysqli_connect($servername,$username,$password,$dbname);

 if(isset($_POST['submit']))
 {
    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $mobile = $_POST['mobile'];
    
     $sql = "INSERT INTO form (first_name,second_name,mobile)
	         VALUES ('$first_name','$second_name','$mobile')";
    
            if(mysqli_query($conn, $sql))
            {
                echo "success";
            } 
 }
?>