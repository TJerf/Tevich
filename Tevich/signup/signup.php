<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tevhich Sign Up Step1 UserName Pass</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body style="background-color: rgb(129, 26, 26)">
    <div class="signup-container">
      <div class="signup-box" style="height:auto">
        <div id="cb" class="close-btn">
          <button>
            <svg width="20" height="20" viewBox="0 0 20 20" focusable="false" aria-hidden="true" role="presentation">
              <path d="M8.5 10 4 5.5 5.5 4 10 8.5 14.5 4 16 5.5 11.5 10l4.5 4.5-1.5 1.5-4.5-4.5L5.5 16 4 14.5 8.5 10z"></path>
            </svg>
          </button>
        </div>
        <div class="welcome-msg">
          <?php
            if (empty($_POST))
              exit("No data!");

            $username = $_POST['username'];
            $password = $_POST['password'];
            $birthdate = "{$_POST['birth_year']}-{$_POST['birth_month']}-{$_POST['birth_day']}";
            $pp_filename = $_FILES["profile-picture"]["name"]; 
            $tempname = $_FILES["profile-picture"]["tmp_name"];  
            $folder = "UploadedFiles/".$pp_filename;

            if(isset($username) && !empty($username)) {
              $link = mysqli_connect("localhost","root","","tevich");

              if (mysqli_connect_errno())
                exit("khata!!!". mysqli_connect_error());

                if (move_uploaded_file($tempname, "../".$folder)) {

                  $msg = "Image uploaded successfully";
      
                }else{
      
                  $msg = "Failed to upload image";
                }

              $image_query = "INSERT INTO `image` (`id`, `url`) VALUES (NULL, '$folder')";
              $image_id_query = "SELECT * FROM `image` WHERE id = @@identity";

              mysqli_query($link, $image_query);
              $pp_id = mysqli_fetch_row(mysqli_query($link, $image_id_query))[0];
              
              $query = "INSERT INTO `user` (`id`, `user_name`, `display_name`, `password`, `birth_date`, `created_time`, `view_count`, `broadcaster_type`, `profile_icon_id`, `offline_image_id`, `prefs id`, `description`) VALUES (NULL, '$username', '$username', '$password', '$birthdate', current_timestamp(), '0', 'N/A', '$pp_id', '$pp_id', '1', 'Hi I am $username')";

              // if (mysqli_query($link, $query) === true) {
              //   echo("<p>Welcome to Tevich, $username?!</p>");
              // } else {
              //   echo("<p>Not welcome!!!!!!</p>");
              // }

              mysqli_close($link);
            } 
            // else {
            //   echo("<p>Boro Khaneatan >:(</p>");
            // }
          ?>
        </div>
      </div>
    </div>
  </body>
  <script src="app.js"></script>
</html>
