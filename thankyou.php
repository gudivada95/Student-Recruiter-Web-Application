<?php
require 'connection.php';
$conn    = Connect();
$firstName = $conn->real_escape_string($_POST['firstName']);
$lastName = $conn->real_escape_string($_POST['lastName']);
$email = $conn->real_escape_string($_POST['email']);
$gender = $conn->real_escape_string($_POST['gender']);
$street = $conn->real_escape_string($_POST['street']);
$state = $conn->real_escape_string($_POST['state']);
$city = $conn->real_escape_string($_POST['city']);
$zip = $conn->real_escape_string($_POST['zip']);

$dep1 = $conn->real_escape_string($_POST['dep1']);
$dep2 = $conn->real_escape_string($_POST['dep2']);
$dep3 = $conn->real_escape_string($_POST['dep3']);
$ath1 = $conn->real_escape_string($_POST['ath1']);
$ath2 = $conn->real_escape_string($_POST['ath2']);
$noSession = $conn->real_escape_string($_POST['noSession']);
$tour = $conn->real_escape_string($_POST['tour']);
$lunch = $conn->real_escape_string($_POST['lunch']);
$aid = $conn->real_escape_string($_POST['aid']);
$birth = $conn->real_escape_string($_POST['birth']);
$phone = $conn->real_escape_string($_POST['phone']);






$query   = "INSERT into Student (firstName,lastName,email,gender,street,state,city,zip,department1,department2,department3,athletic1,athletic2,noSession,campusTour,lunch,studentAid,birthDate,telephone) VALUES('" . $firstName . "','" . $lastName . "','" . $email . "','" . $gender . "','" . $street . "','" . $state . "','" . $city . "','" . $zip . "','" . $dep1 . "','" . $dep2 . "','" . $dep3 . "','" . $ath1 . "','" . $ath2 . "','" . $noSession . "','" . $tour . "','" . $lunch . "','" . $aid . "','" . $birth . "','" . $phone . "')";

$success = $conn->query($query);
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
echo "Thank You For Submitting Your Information! We are excited to host you on campus! Schedules are generated weekly on Sundays at 11:59 PM EST";


$conn->close();
?>

<html lang="en">

<head>
      <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ECU Student Recruiter</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
  <link rel="stylesheet" href="style.css">
    <a href="http://studentrecruiter.x10host.com/root/test/getSchedule.php">Check your Schedule</a>

    </head>
        </html>
    </head>