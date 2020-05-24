<!-- Made by Carlos Pedro Gomes -->
<?php
    mysql_connect('localhost', 'root' , ' ') or die(mysql_erros());
    mysql_select_db('vi') or die(mysql_error() );

if(isset($_POST["email"] ) && isset($_POST['passwd'])){
    $email= $_Post["email"];
    $passwd= $_Post["passwd"];

    $get = mysql_query("SELECT * FROM usuarios WHERE email = 'email' and passwd = '$passwd' " );
    $num = mysql_num_rows($get);

  if($num == 1) {

    while ($percorrer = mysql_fetch_array($get)) {
     $adm = $percorrer['adm'];
     $nome = $percorrer['nome'];

      session_start();
       if($adm ==1) {
         $_SESSION['adm'] = $nome;
       }else{
        $_SESSION['nor'] = $nome;
       }
      echo '<scrip type="text/javascript">windon.location = "in.php" </scrip>';
    }
      }else{
      echo 'Email or password wrong.';
    }
}
 ?>
