<?php
class LoginController{
  public function __construct(){}
  public function run(){
    require_once Views . 'formulaire_login.php';
    include "modeles/modele_user.php";

    if ($_POST["pseudo"]=="" && $_POST["email"]=="" )
    {
      echo "Votre pseudo ou votre mot de passe n'a pas été encodé !";
    }
    else
    {
      log_in($_POST["pseudo"],$_POST["pass"]);
    }

  }
}
 ?>
