<?php
//Author: Vanessa S. Cortez-Ocon
//
//This php code gets information gathered from contactus.html form and 
//saves it to get sent to company email 

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$city = $_POST['cityname'];
$subject = $_POST['subject'];
$tel = $_POST['tel'];

echo "<h1> Thank you, $firstName! </h1>";

echo "<p> We received your request. </p>";

echo "<p><strong>Name:</strong> $firstName $lastName</p>";
echo "<p><strong>Location:</strong> $city</p>";
echo "<p><strong>Phone:</strong> $tel </p>";
echo "<p><strong>Service / Question:</strong> $subject</p>";

?>