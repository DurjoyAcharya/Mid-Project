<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "java";
$name=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
$eync=password_hash($pass, PASSWORD_DEFAULT);
if (!empty($name)|!empty($email)|!empty($password))
{
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO ourmember (firstname, email, password)
  VALUES ('$name','$email','$eync')";
        $conn->exec($sql);
        echo "<script>"."Successfully Registered"."</script>";
    } catch(PDOException $e) {
        $sql=null;
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
}else
{
    echo 'All fields are required';
    die();
}
?>