 <!-- Just for testing  -->


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Validation</title>
     <script src="../assets/js/jquery-3.6.0.min.js" type="text/javascript"></script>

     <script src="../include/userRegistration.js"></script>
 </head>

 <body>
     <label for="">Code :</label>
     <input type="number" id="authCode" min="100000" max="999999">
     <input type="text" id="email" value="<?php echo $_GET["email"] ?>" readonly>
     <button onclick="validate()">Go</button>
 </body>

 </html>