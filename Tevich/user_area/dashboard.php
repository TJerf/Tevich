<?php
if (empty($_POST))
    exit("Empty data!");

$username = $_POST["username"];
$password = $_POST["password"];

if (!isset($username) || !isset($password))
    exit("Incomplete input!");

$conn = mysqli_connect("localhost", "root", "", "tevich");

if (mysqli_connect_errno())
    exit("Error while connecting to DB: ".mysqli_connect_error());

$user_query = "SELECT `prefs id`, user_name FROM `user` WHERE user_name='$username' AND password='$password'";
$user = mysqli_fetch_array(mysqli_query($conn, $user_query), MYSQLI_ASSOC);

$pref_query = "SELECT * FROM `preference` where id={$user['prefs id']}";
$pref_result = mysqli_query($conn, $pref_query);

if (!$pref_result)
    exit("Failed to get your preferences!");

$prefs = mysqli_fetch_array($pref_result, MYSQLI_ASSOC);

switch ($prefs['theme']) {
    case 'dark':
        $color = "#262626";
        break;
    case 'pink':
        $color = "#b9a3e3";
        break;
    default:
        $color = "#6441A5";
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
</head>
<body style=<?php echo("background-color:". $color)?>>
    
</body>
</html>