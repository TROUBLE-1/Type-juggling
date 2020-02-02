<!DOCTYPE html>
<html>
   <title>Type Juggling</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="/htmls/css/home.css">
   <body bgcolor="#afafaf">
      <center>
         <h1 style="font-size:60px;">Type Juggling Session!</h1>
         <h1 style="font-size:30px;">Goal: Do a type juggling to get authenticated</h1>
         <?php
          if(isset($_REQUEST['message'])){
            $secret = 'secure_random_secret_value';
            $hmac = md5($secret . $_REQUEST['message']);

            if($hmac == $_REQUEST['hmac']){
            echo "<p style='color:blue;font-size:30px;'>Success</p>";
            }else{
                echo "<p style='color:red;font-size:30px;'>Bad Authentication</p>";
            }
         }else{
              echo "No values are set";
          }
          
        ?>
        
        <img src="htmls/image/Capture1.PNG">
          <h4>Try to find a type juggling vulnerbility with the following code</h4>
        
      </center>
   </body>
</html>