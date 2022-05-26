<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Proses</title>
  </head>
  <body>
    <h1>Submit form dengan method POST</h1>
    <p>Welcome <?php echo $_POST["username"]; ?></p>
    <p>Your password is <?php echo $_POST["password"]; ?></p>
    <p>Remember me is <?php echo $_POST["remember"]; ?></p>
    <p><a href="form_login7.html">Back to login</a></p> 
  </body>
</html>
