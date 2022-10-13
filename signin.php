<?php
$conn = mysqli_connect("localhost", "root", "", "loginform");
$insert = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['cpassword'])) 
    {
        $email = $_POST["email1"];
        $password = $_POST["password1"];
        $cpassword = $_POST["cpassword"];
        $sql ="INSERT INTO `signin` (`email`, `password`, `cpassword`) VALUES ('$email', '$password', '$cpassword');";

$result = mysqli_query($conn, $sql);
        if ($result) {
            $insert = true;

        } else 
        {
            echo "record does not insert" . mysqli_error($conn);
        }
    }
}
?>