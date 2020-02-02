<!DOCTYPE html>
<html>
   <title>Type Juggling</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="/htmls/css/home.css">
   <body bgcolor="#afafaf">
      <center>
         <h1 style="font-size:60px;">Some type juggling examples</h1>
         <h1 style="font-size:30px;">Goal: Try to compare your input to '0'</h1>
      </center>
      <hr>
      <!----------------------------example no 1 ---------------------------------------->
      <div style="text-align: center;">
         <h2 style="font-size:28px;
            font-family:'Dancing Script',
            cursive;">
            example no 1.
         </h2>
         <div style="padding: 10px;">
            <!----------   form   ----------->
            <form method="POST" name="form" action="#">
               <h3>Input the secret key<br>(numbers only)</h3>
               <br>
               <input type="number" name="key" >
               <input type="submit" name="submit" value="Submit">
            </form>
            <?php include 'challenge/chall1.php' ?>
         </div>
      </div>
      <hr>
      <!----------------------------example no 2 ---------------------------------------->
      <div style="text-align: center;">
         <h2 style="font-size:28px;
            font-family:'Dancing Script',
            cursive;">
            example no 2.
         </h2>
         <div style="padding: 10px;">
            <!----------   form   ----------->
            <form name="login" onsubmit="encryptForm();" action="#">
               <input type="password" name="password">
               <button type="submit">Submit</button>
            </form>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
            <script>
               function encryptForm() {
                   document.login.password.value = CryptoJS.MD5(document.login.password.value);
               }
            </script>
            <?php include 'challenge/chall2.php' ?>
         </div>
      </div>
      <hr>
      <!----------------------------example no 3 ---------------------------------------->
      <div style="text-align: center;">
         <h2 style="font-size:28px;
            font-family:'Dancing Script',
            cursive;">
            example no 3.
         </h2>
         <div style="padding: 10px;">
            <!----------   form   ----------->
            <form name="login3"   onsubmit="encryptForm3();" action="#">
               <br> NAME
               <br>
               <input type="text" name="name3" required="required" style="position: relative;right:38px;">
               <br> PASSWORD
               <br>
               <input type="password" name="password3" required="required">
               <button type="submit">Submit</button>
            </form>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
          <!--  <script>
               function encryptForm3() {
                   document.login3.password3.value = CryptoJS.MD5(document.login3.name3.value + document.login3.password3.value);
               }
            </script> -->
            <?php include 'challenge/chall3.php' ?>
         </div>
      </div>
      <hr>
      <!----------------------------example no 4 ---------------------------------------->
      <div style="text-align: center;">
         <h2 style="font-size:28px;
            font-family:'Dancing Script',
            cursive;">
            example no 4.
         </h2>
         <div style="padding: 10px;">
            <h4>Must contain at least one number and one uppercase <br>and lowercase letter, and at least 8 or more characters</h4>
            <!----------   form   ----------->
            <form name="login4" onsubmit="encryptForm4();" action="#">
               <br> NAME
               <br>
               <input type="text" name="name4" required="required" style="position: relative;right:38px;">
               <br> PASSWORD
               <br>
               <input type="password" name="password4" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
               <button type="submit">Submit</button>
            </form>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
            <!--
            <script>
               function encryptForm4() {
                   document.login4.password4.value = CryptoJS.MD5(document.login4.name4.value + document.login4.password4.value);
               }
            </script> -->
            <?php include 'challenge/chall4.php'
               //  username:aaaahsswrw, Password:aaaAaa12 ?>
         </div>
      </div>
   </body>
</html>