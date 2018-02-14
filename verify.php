<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $fname = $_POST["fname"] ;
    $lname = $_POST["lname"] ;
    $email = $_POST["email"] ;
    $pays = $_POST["pays"] ;
    $sujet = $_POST["sujet"] ;
    $com =$_POST["com"] ;

    $data = ["Prénom :" => $fname, "Nom :" => $lname, "Email :" => $email, "Pays" => $pays, "Sujet :" => $sujet, "Commentaire :" => $com] ;
    print_r($data);



     ?>
  </body>
</html>
