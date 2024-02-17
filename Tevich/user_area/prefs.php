<?php
if (empty($_POST))
    exit("Empty data!");

$username = $_POST["username"];
$password = $_POST["password"];
$selected_theme = $_POST["user_theme"];

if (!isset($username) || !isset($password) || !isset($selected_theme))
    exit("Incomplete input!");

$conn = mysqli_connect("localhost", "root", "", "tevich");

if (mysqli_connect_errno())
    exit("Error while connecting to DB: ".mysqli_connect_error());

$user_query = "SELECT `prefs id`, user_name FROM `user` WHERE user_name='$username' AND password='$password'";
$user = mysqli_fetch_array(mysqli_query($conn, $user_query), MYSQLI_ASSOC);

$pref_query = "UPDATE `preference` SET theme='$selected_theme' where id={$user['prefs id']}";
$pref_result = mysqli_query($conn, $pref_query);

if (!$pref_result)
    exit("Failed to update your preferences!");

echo("Your preferences were updated successfully!");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
</head>
<body>
    
</body>
</html>