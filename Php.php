<?php

$ContentFromServer = $_POST['Mess'];
$UserName = $_POST["client"];
$UserA = "User 1";
$UserB = "User 2";

$Feild;
if ($UserName === "User1") {
    $Feild =  "Message by User 1";
}
elseif ($UserName === "User2") {
    $Feild = "Message by User 2";
    $UserB = "You";
}

$Link = mysqli_connect("localhost","root", "","server");
if ($ContentFromServer === "") {
   $Veiw1 = mysqli_query($Link, 'SELECT `Message by User 1`FROM `message holder`');
   $Veiw2 = mysqli_query($Link, 'SELECT `Message by User 2`FROM `message holder`');
   $Fetch1 = mysqli_fetch_assoc($Veiw1);
   $Fetch2 = mysqli_fetch_assoc($Veiw2);
echo '<a href=""><b>'.$UserA.' says: </b></a>'.$Fetch1["Message by User 1"].'<br>'.'<a href=""><b>'.$UserB.' says: </b></a>'.$Fetch2["Message by User 2"];
}
else {
   mysqli_query($Link, "UPDATE `message holder` SET `".$Feild."` = '{$ContentFromServer}' "); 
   $Veiw1 = mysqli_query($Link, 'SELECT `Message by User 1`FROM `message holder`');
   $Veiw2 = mysqli_query($Link, 'SELECT `Message by User 2`FROM `message holder`');
   $Fetch1 = mysqli_fetch_assoc($Veiw1);
   $Fetch2 = mysqli_fetch_assoc($Veiw2);
echo '<a href=""><b>User 1 says : </b></a>'.$Fetch1["Message by User 1"].'<br>'.'<a href=""><b>User 2 says : </b></a>'.$Fetch2["Message by User 2"];
}

?>