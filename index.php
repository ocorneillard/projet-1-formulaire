<?php
$pays = "Belgique";
$sanitizearray = array(
  'fname' => FILTER_SANITIZE_STRING,
  'lname' => FILTER_SANITIZE_STRING,
  'genre' => FILTER_SANITIZE_STRING,
  'email' => FILTER_VALIDATE_EMAIL,
  'pays'  => FILTER_SANITIZE_STRING,
  'sujet' => FILTER_SANITIZE_STRING,
  'com'   => FILTER_SANITIZE_STRING);

   $result = filter_input_array(INPUT_POST,$sanitizearray);

print_r($result);
$genre = $_POST["genre"];
if (   isset($_POST["submit"])   ) {


  foreach ( $sanitizearray as $m) {
    $m = trim($m);
  }

  foreach($result as $key => $value){
    $$key = $value;
  }

    if ($fname == "")
    {
      $fnameerror = "fnameerror";
    }

    if ($lname =="")
      {
      $lnameerror = "lnameerror";
      }
    if ($email =="")
      {
        $emailerror = "emailerror";
      }
    if ($genre =="")
      {
        $genreerror = "genreerror";
      }
    if ($com =="")
      {
        $comerror = "comerror";
      }

    if ($fnameerror == null && $lnameerror == null && $emailerror == null && $genreerror == null && $comerror == null){
      $mail = "dorian.c.collier@gmail.com";
      $subject = "Problème : $fname" ;
      $message = "$fname $lname, $email,  $genre \n Problème rencontré : $com $sujet \n Pays : $pays" ;
      mail($mail, $subject, $message);
      header("LOCATION: confirmation.php");
}
}

 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font.css" type="text/css" >
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>Formulaire</title>
  </head>
  <body>

    <header>
      <nav>
      </nav>
    </header>
    <section id="photo--cover" class="section--header">
      <div class="section--txt">
        <div class="section--txt--position">
          <h2> Accessoires pour Raspberry Pi</h2>
          <img src="img/hackers-poulette-logo.png" height="300" alt="">
        </div>
      </div>
    </section>
                          <!-- Formulaire de contact -->

    <section class="form--contact">
      <div class="form--title">
        <h2>Formulaire de contact</h2>
      </div>
      <form action="index.php" method="post">
        <div class="form--txt">
          <div class="form--txt--position">

            <div class="section--prenom">
              <label for="Prénom"></label>
              Prénom* :
                <input id="Prénom" class="<?= $fnameerror ?>" type="text" name="fname" value="<?= $fname ?>" placeholder="John">
                <?php
                  if (isset($fnameerror)) {
                    echo "<span> Prénom incorrect. </span>";
                  }
                  ?>

              <div class="section--nom">
                <label for="Nom"></label>
                Nom* :
                <input id="Nom" type="text" class="<?= $lnameerror ?>" name="lname" value="<?= $lname ?>" placeholder="Smith">
                <?php
                  if (isset($lname)) {
                    echo "<span> Nom incorrect. </span>";
                  }
                  ?>
              </div>
            </div>


            <div class="gemail">
              <div class="section--genre">
                <label for="genre"></label>
                  Homme <input id="genre" type="radio" class="<?= $genreerror ?>" name="genre" value="man">
                  Femme <input id="genre" type="radio" class="<?= $genreerror ?>" name="genre" value="woman">
                  <?php
                    if (isset($genreerror)) {
                      echo "<span> Spécifiez votre sexe.</span>";
                    }
                    ?>
              </div>

              <div class="section--email">
                <label for="email"></label>
                Email* :
                <input id="email" type="email" name="email" class="<?= $emailerror ?>" value="<?= $email ?>" placeholder="John.smith@gmail.com">
                <?php
                  if (isset($genreerror)) {
                    echo "<span> Adresse incorrecte.</span>";
                  }
                  ?>
              </div>
            </div>


            <div class="country">
              <label for="pays"></label>
              Pays* :
              <select id="pays" name="pays">
                <option value="<?= $pays ?>" selected="selected"><?= $pays ?> </option>

                <option value="Afghanistan">Afghanistan </option>
                <option value="Afrique_Centrale">Afrique_Centrale </option>
                <option value="Afrique_du_sud">Afrique_du_Sud </option>
                <option value="Albanie">Albanie </option>
                <option value="Algerie">Algerie </option>
                <option value="Allemagne">Allemagne </option>
                <option value="Andorre">Andorre </option>
                <option value="Angola">Angola </option>
                <option value="Anguilla">Anguilla </option>
                <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                <option value="Argentine">Argentine </option>
                <option value="Armenie">Armenie </option>
                <option value="Australie">Australie </option>
                <option value="Autriche">Autriche </option>
                <option value="Azerbaidjan">Azerbaidjan </option>

                <option value="Bahamas">Bahamas </option>
                <option value="Bangladesh">Bangladesh </option>
                <option value="Barbade">Barbade </option>
                <option value="Bahrein">Bahrein </option>
                <option value="Belgique">Belgique </option>
                <option value="Belize">Belize </option>
                <option value="Benin">Benin </option>
                <option value="Bermudes">Bermudes </option>
                <option value="Bielorussie">Bielorussie </option>
                <option value="Bolivie">Bolivie </option>
                <option value="Botswana">Botswana </option>
                <option value="Bhoutan">Bhoutan </option>
                <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                <option value="Bresil">Bresil </option>
                <option value="Brunei">Brunei </option>
                <option value="Bulgarie">Bulgarie </option>
                <option value="Burkina_Faso">Burkina_Faso </option>
                <option value="Burundi">Burundi </option>

                <option value="Caiman">Caiman </option>
                <option value="Cambodge">Cambodge </option>
                <option value="Cameroun">Cameroun </option>
                <option value="Canada">Canada </option>
                <option value="Canaries">Canaries </option>
                <option value="Cap_vert">Cap_Vert </option>
                <option value="Chili">Chili </option>
                <option value="Chine">Chine </option>
                <option value="Chypre">Chypre </option>
                <option value="Colombie">Colombie </option>
                <option value="Comores">Colombie </option>
                <option value="Congo">Congo </option>
                <option value="Congo_democratique">Congo_democratique </option>
                <option value="Cook">Cook </option>
                <option value="Coree_du_Nord">Coree_du_Nord </option>
                <option value="Coree_du_Sud">Coree_du_Sud </option>
                <option value="Costa_Rica">Costa_Rica </option>
                <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                <option value="Croatie">Croatie </option>
                <option value="Cuba">Cuba </option>

                <option value="Danemark">Danemark </option>
                <option value="Djibouti">Djibouti </option>
                <option value="Dominique">Dominique </option>

                <option value="Egypte">Egypte </option>
                <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                <option value="Equateur">Equateur </option>
                <option value="Erythree">Erythree </option>
                <option value="Espagne">Espagne </option>
                <option value="Estonie">Estonie </option>
                <option value="Etats_Unis">Etats_Unis </option>
                <option value="Ethiopie">Ethiopie </option>

                <option value="Falkland">Falkland </option>
                <option value="Feroe">Feroe </option>
                <option value="Fidji">Fidji </option>
                <option value="Finlande">Finlande </option>
                <option value="France">France </option>

                <option value="Gabon">Gabon </option>
                <option value="Gambie">Gambie </option>
                <option value="Georgie">Georgie </option>
                <option value="Ghana">Ghana </option>
                <option value="Gibraltar">Gibraltar </option>
                <option value="Grece">Grece </option>
                <option value="Grenade">Grenade </option>
                <option value="Groenland">Groenland </option>
                <option value="Guadeloupe">Guadeloupe </option>
                <option value="Guam">Guam </option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernesey">Guernesey </option>
                <option value="Guinee">Guinee </option>
                <option value="Guinee_Bissau">Guinee_Bissau </option>
                <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                <option value="Guyana">Guyana </option>
                <option value="Guyane_Francaise ">Guyane_Francaise </option>

                <option value="Haiti">Haiti </option>
                <option value="Hawaii">Hawaii </option>
                <option value="Honduras">Honduras </option>
                <option value="Hong_Kong">Hong_Kong </option>
                <option value="Hongrie">Hongrie </option>

                <option value="Inde">Inde </option>
                <option value="Indonesie">Indonesie </option>
                <option value="Iran">Iran </option>
                <option value="Iraq">Iraq </option>
                <option value="Irlande">Irlande </option>
                <option value="Islande">Islande </option>
                <option value="Israel">Israel </option>
                <option value="Italie">italie </option>

                <option value="Jamaique">Jamaique </option>
                <option value="Jan Mayen">Jan Mayen </option>
                <option value="Japon">Japon </option>
                <option value="Jersey">Jersey </option>
                <option value="Jordanie">Jordanie </option>

                <option value="Kazakhstan">Kazakhstan </option>
                <option value="Kenya">Kenya </option>
                <option value="Kirghizstan">Kirghizistan </option>
                <option value="Kiribati">Kiribati </option>
                <option value="Koweit">Koweit </option>

                <option value="Laos">Laos </option>
                <option value="Lesotho">Lesotho </option>
                <option value="Lettonie">Lettonie </option>
                <option value="Liban">Liban </option>
                <option value="Liberia">Liberia </option>
                <option value="Liechtenstein">Liechtenstein </option>
                <option value="Lituanie">Lituanie </option>
                <option value="Luxembourg">Luxembourg </option>
                <option value="Lybie">Lybie </option>

                <option value="Macao">Macao </option>
                <option value="Macedoine">Macedoine </option>
                <option value="Madagascar">Madagascar </option>
                <option value="Madère">Madère </option>
                <option value="Malaisie">Malaisie </option>
                <option value="Malawi">Malawi </option>
                <option value="Maldives">Maldives </option>
                <option value="Mali">Mali </option>
                <option value="Malte">Malte </option>
                <option value="Man">Man </option>
                <option value="Mariannes du Nord">Mariannes du Nord </option>
                <option value="Maroc">Maroc </option>
                <option value="Marshall">Marshall </option>
                <option value="Martinique">Martinique </option>
                <option value="Maurice">Maurice </option>
                <option value="Mauritanie">Mauritanie </option>
                <option value="Mayotte">Mayotte </option>
                <option value="Mexique">Mexique </option>
                <option value="Micronesie">Micronesie </option>
                <option value="Midway">Midway </option>
                <option value="Moldavie">Moldavie </option>
                <option value="Monaco">Monaco </option>
                <option value="Mongolie">Mongolie </option>
                <option value="Montserrat">Montserrat </option>
                <option value="Mozambique">Mozambique </option>

                <option value="Namibie">Namibie </option>
                <option value="Nauru">Nauru </option>
                <option value="Nepal">Nepal </option>
                <option value="Nicaragua">Nicaragua </option>
                <option value="Niger">Niger </option>
                <option value="Nigeria">Nigeria </option>
                <option value="Niue">Niue </option>
                <option value="Norfolk">Norfolk </option>
                <option value="Norvege">Norvege </option>
                <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

                <option value="Oman">Oman </option>
                <option value="Ouganda">Ouganda </option>
                <option value="Ouzbekistan">Ouzbekistan </option>

                <option value="Pakistan">Pakistan </option>
                <option value="Palau">Palau </option>
                <option value="Palestine">Palestine </option>
                <option value="Panama">Panama </option>
                <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                <option value="Paraguay">Paraguay </option>
                <option value="Pays_Bas">Pays_Bas </option>
                <option value="Perou">Perou </option>
                <option value="Philippines">Philippines </option>
                <option value="Pologne">Pologne </option>
                <option value="Polynesie">Polynesie </option>
                <option value="Porto_Rico">Porto_Rico </option>
                <option value="Portugal">Portugal </option>

                <option value="Qatar">Qatar </option>

                <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                <option value="Republique_Tcheque">Republique_Tcheque </option>
                <option value="Reunion">Reunion </option>
                <option value="Roumanie">Roumanie </option>
                <option value="Royaume_Uni">Royaume_Uni </option>
                <option value="Russie">Russie </option>
                <option value="Rwanda">Rwanda </option>

                <option value="Sahara Occidental">Sahara Occidental </option>
                <option value="Sainte_Lucie">Sainte_Lucie </option>
                <option value="Saint_Marin">Saint_Marin </option>
                <option value="Salomon">Salomon </option>
                <option value="Salvador">Salvador </option>
                <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                <option value="Samoa_Americaine">Samoa_Americaine </option>
                <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                <option value="Senegal">Senegal </option>
                <option value="Seychelles">Seychelles </option>
                <option value="Sierra Leone">Sierra Leone </option>
                <option value="Singapour">Singapour </option>
                <option value="Slovaquie">Slovaquie </option>
                <option value="Slovenie">Slovenie</option>
                <option value="Somalie">Somalie </option>
                <option value="Soudan">Soudan </option>
                <option value="Sri_Lanka">Sri_Lanka </option>
                <option value="Suede">Suede </option>
                <option value="Suisse">Suisse </option>
                <option value="Surinam">Surinam </option>
                <option value="Swaziland">Swaziland </option>
                <option value="Syrie">Syrie </option>

                <option value="Tadjikistan">Tadjikistan </option>
                <option value="Taiwan">Taiwan </option>
                <option value="Tonga">Tonga </option>
                <option value="Tanzanie">Tanzanie </option>
                <option value="Tchad">Tchad </option>
                <option value="Thailande">Thailande </option>
                <option value="Tibet">Tibet </option>
                <option value="Timor_Oriental">Timor_Oriental </option>
                <option value="Togo">Togo </option>
                <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                <option value="Tristan da cunha">Tristan de cuncha </option>
                <option value="Tunisie">Tunisie </option>
                <option value="Turkmenistan">Turmenistan </option>
                <option value="Turquie">Turquie </option>

                <option value="Ukraine">Ukraine </option>
                <option value="Uruguay">Uruguay </option>

                <option value="Vanuatu">Vanuatu </option>
                <option value="Vatican">Vatican </option>
                <option value="Venezuela">Venezuela </option>
                <option value="Vierges_Americaines">Vierges_Americaines </option>
                <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                <option value="Vietnam">Vietnam </option>

                <option value="Wake">Wake </option>
                <option value="Wallis et Futuma">Wallis et Futuma </option>

                <option value="Yemen">Yemen </option>
                <option value="Yougoslavie">Yougoslavie </option>

                <option value="Zambie">Zambie </option>
                <option value="Zimbabwe">Zimbabwe </option>

              </select>
            </div>

          </div>
        </div>
    </section>

                          <!-- Photo -->
    <section id="photo--cover2" class="section--header">
      <div class="section--txt">
        <div class="section--txt--position">


        </div>
      </div>
    </section>

    <section class="section--trouble--box">
      <div class="section--trouble--txt">

        <label for="sujet"></label>
        <div class="radio">
          <span class="radio1">
            <input type="radio" name="sujet" value="clientele">Service clientèle
          </span>

          <span class="radio2">
            <input type="radio" name="sujet" value="technique">Service technique
          </span>

          <span class="radio3">
            <input type="radio" name="sujet" value="additionnel">Service additionnel
          </span>

          <span class="radio4">
            <input type="radio" name="sujet" value="autre">Autre
          </span>
        </div>

        <div class="section--trouble--txt-position">
          <div class="validation--message">
            <label for="message"></label>
            <p>Dites-nous en plus à propos du problème rencontré* : </p>
            <textarea placeholder="Notez votre message ici" id="message" name="com" value="" class="<?= $comerror ?>"><?= $com ?></textarea>
            <?php
              if (isset($comerror)) {
                echo "<span> Vous devez poster un message. </span>";
              }
              ?>
          </div>

          <div class="validation--btn">
            <input type="submit" name="submit" value="Envoyer">
          </div>
        </div>
      </div>
    </section>
    </form>




  <footer>
        <div class="footer--grid">
          <div class="footer--f">
            <a href="#" class="fa fa-facebook"></a>
          </div>
          <div class="footer--t">
            <a href="#" class="fa fa-twitter"></a>
          </div>
          <div class="footer--l">
            <a href="#" class="fa fa-linkedin"></a>
          </div>
          <div class="footer--logo">
            <img src="img/becode.png" height="90" alt="">
          </div>
          <div class="right">
            Tous droits réservés.
          </div>
        </div>
  </footer>
</body>
</html>
