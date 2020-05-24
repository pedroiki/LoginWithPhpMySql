<!-- made by Carlos Pedro Gomes -->
<?php
    session.start();
    if(isset($_SESSION['adm'] )) {
         echo 'Welcome' .$_SESSION['adm']. '  - Admin ' ;
       }else if(isset($_SESSION['nor'] )) {

   }else{
          echo '<scrip type="text/javascript">windon.location = "index.php" </scrip>';
       }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Your are IN</title>
  </head>
  <body>

   <a href="out.php" >out</a>

  </body>
</html>
