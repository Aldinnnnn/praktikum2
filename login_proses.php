<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Proses</title>
  </head>
  <body>
    <h1>Submit form dengan method GET</h1>
    <p>Welcome <?php echo $_GET["username"]; ?></p>
    <p>Your password is <?php echo $_GET["password"]; ?></p>
    <p>Remember me is <?php echo $_GET["remember"]; ?></p>
    <p><a href="form_login6.html">Back to login</a></p> 
  </body>
</html>
