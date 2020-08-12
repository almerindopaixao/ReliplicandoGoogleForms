<?php
  
  $archivo = isset($_FILES['photo']) ? $_POST['state'] : '';

  $name = $_POST["name"];
  $cpf = $_POST["cpf"];
  $address = $_POST["address"];

  $state = isset($_POST["state"]) ? $_POST["state"] : '';

  $date = $_POST["date"];
  $sex = $_POST["sex"];

  $movieTheater = isset($_POST["checkMovieTheater"]) ? $_POST["checkMovieTheater"] : '';

  $music =  isset($_POST["checkMusic"]) ? $_POST["checkMusic"] : '';

  $info = isset($_POST["checkInfo"]) ? $_POST["checkInfo"] : '';

  $login = $_POST["login"];
  $password = $_POST["password"];
  $password2 = $_POST["password2"];

  $fieldsOK = true;

  if ($name == '') {
    $_SESSION['error_name'] = "<small>Informe o nome.</small>";
    $fieldsOK = false;
  }

  if($address == '') {
    $_SESSION['error_address'] = '<small>Informe o endereço.</small>';
    $fieldsOK = false;
  }

  if($password != $password2) {
    $_SESSION['error_passwords'] = '<small>As senhas não combinam.</small>';
    $fieldsOK = false;
  }

  if ($fieldsOK) {
    header('Location: http://localhost/replicaGoogleForms/pages/cadCliente.php');
  }

  $_SESSION['name'] = $name;
  $_SESSION['cpf'] = $cpf;
  $_SESSION['address'] = $address;
  $_SESSION['state'] = $state;
  $_SESSION['date'] = date('d/m/Y', strtotime($date));
  $_SESSION['sex'] = $sex;
  $_SESSION['movieTheater'] = $movieTheater;
  $_SESSION['music'] = $music;
  $_SESSION['info'] = $info;
  $_SESSION['login'] = $login;
  $_SESSION['password'] = $password;

?>