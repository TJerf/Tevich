<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>settings</title>
</head>
<body>
    <form action="prefs.php" method="POST">
        <label for="username">Username:</label> 
        <input name="username" type="text" />
        <br>
        <label for="password">Password:</label> 
        <input name="password" type="password" />
        <br>
        <label for="user_theme">Select your theme:</label> 
        <select name="user_theme">
            <?php
                function get_enum_values($conn, $table, $field )
                {
                    $result = mysqli_query($conn, "SHOW COLUMNS FROM {$table} WHERE Field = '{$field}'" );
                    $type = mysqli_fetch_row($result)[1];
                    preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
                    $enum = explode("','", $matches[1]);
                    return $enum;
                }

                $link = mysqli_connect("localhost","root","","tevich");

                if (mysqli_connect_errno())
                    exit("khata!!!". mysqli_connect_error());

                $theme_options = get_enum_values($link, "preference", "theme");

                foreach ($theme_options as $theme) {
                    echo("<option value='$theme'>$theme</option>");
                }

                mysqli_close($link);
            ?>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>