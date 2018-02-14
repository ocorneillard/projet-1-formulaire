<?php

$options = array(
'first_name' 	=> FILTER_SANITIZE_STRING,
'last_Name' 	=> FILTER_SANITIZE_STRING,
'mail' 		=> FILTER_VALIDATE_EMAIL,
'phone' 		=> FILTER_SANITIZE_NUMBER_INT,
'url' 		=> FILTER_SANITIZE_URL,
'subject' 		=> FILTER_SANITIZE_STRING,
'message' 		=> FILTER_SANITIZE_STRING);

 $result = filter_input_array(INPUT_POST, $options);

 if ($result != null AND $result != FALSE) {

	echo "Tous les champs ont été nettoyés !";

} else {

	echo "Un champ est vide ou n'est pas correct!";

}

foreach($options as $key => $value)
{
   $result[$key]=trim($result[$key]);
}

// FONCTIONNE POUR LE REMPLISSAGE DES INPUTS
$firstname = ($_POST["first_name"] != isset($fname)) ? "oui" : "non";

echo "$firstname" ;


?>


<!DOCTYPE html>
<html>
  <head>
    <style media="screen">
      .non {
        background-color : red;
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="#" method="POST">
      Prénom :<input class="<?= $firstname ?>" type="text" name="first_name" >
      <br>
      Nom :<input type="text" name="last_name" >
      <br>
      Mail :<input type="email" name="mail">
      <br>
      Tel :<input type="tel" name="phone">
      <br>
      Lien :<input type="url" name="url">
      <br>
      Sujet :<input type="text" name="subject">
      <br>
      Message :<input type="text" name="message">
      <br>
      <input type="submit" name="" value="">
    </form>

  <?=

    print_r($result);


  ?>
  </body>
</html>
