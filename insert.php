<?php 

$conn = mysqli_connect("localhost", "root", "", "wtproject");
$insert = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['firstname'])) {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $Hotelname = $_POST["Hotelname"];
        $Departurecity = $_POST["Departurecity"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
       
    
      $sql= "INSERT INTO `customer` (`firstname`, `lastname`, `hotelname`, `departurecity`, `phone`, `email`) VALUES ('$firstname', '$lastname', '$Hotelname', '$Departurecity', '$phone', '$email');";
       
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $insert = true;

        } else {
            echo "record does not insert" . mysqli_error($conn);
        }
    }
}
?>