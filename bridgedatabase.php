<?php  
$conn = mysqli_connect("localhost","root","","deproject");

$name = $_POST["name"];
// echo "$name \n";

$mobile = $_POST["mobile"];
// echo "$dob \n";

$doc = $_POST["doc"];
// echo "$gender \n";

$district = $_POST["district"];
// echo "$email \n";

$city = $_POST["taluka"];
// echo "$mobile \n";

$address = $_POST["address"];
// echo "$address \n";

$description = $_POST["description"];
// echo "$state \n";

$image = $_POST["image"];
// echo "$image \n";

$query = "INSERT INTO `flyovercomplain`(`Name`, `mobile no`, `date of complain`, `district`, `city`, `Address`, `description`, `image`) VALUES ('[$name]','[$mobile]','[$doc]','[$district]','[$city]','[$address]','[$description]','[$image]')";

$insert = mysqli_query($conn,$query);

?>