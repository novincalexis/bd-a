<?php
if( $_POST ){
   $error = false;

   $msg = '';
   $societe = strip_tags($_POST['Société']);
   $nom = strip_tags($_POST['Nom']);
   $prenom = strip_tags($_POST['Prénom']);
   $adresse = strip_tags($_POST['Adresse']);
   $cp = strip_tags($_POST['CP']);
   $ville = strip_tags($_POST['Ville']);
   $telephone = strip_tags($_POST['Tél']);
   $email = strip_tags($_POST['Email']);
   $com = strip_tags($_POST['Message']);

   if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
      $error = true;
      $msg .= 'Veuillez saisir une adresse email valide<br>';
      $classes['Email'] = 'form__input_error';
   }
   if ( strlen($nom) < 2 ) {
      $error = true;
      $msg .= 'Veuillez saisir votre nom<br>';
      $classes['Nom'] = 'form__input_error';
   }
   if ( strlen($prenom) < 2 ) {
      $error = true;
      $msg .= 'Veuillez saisir votre prénom<br>';
      $classes['Prénom'] = 'form__input_error';
   }
   if ( strlen($telephone) < 10 ) {
      $error = true;
      $msg .= 'Veuillez saisir votre numéro de téléphone<br>';
      $classes['Tél'] = 'form__input_error';
   }

   if( !$error ) {
      $message = 'Bonjour,<br><br>Un internaute vous a laissé un message depuis votre site internet :<br><br>';
      foreach( $_POST as $champ => $val ){
         $message .= $champ . ' : ' . nl2br(strip_tags($val)) . '<br><br>';
      }
      $message = wordwrap($message, 70, "\r\n");
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= 'From: ' . $nom . ' <' . $email . '>' . "\r\n";

      $envoi = mail( 'contact@bdagencements.com' , '[BD Agencements] - Contact depuis le site web' , $message, $headers);

      if ( true === $envoi ){
         $msg = '<div class="form__msg">Votre message a bien été envoyé.</div>';
         $nom = $prenom = $email = $telephone = $societe = $adresse = $cp = $Message = '';

      }
   }
}
?>

<?php
    $page = "contact";
    include "incl_header.php";
?>

<main class="main">
    <div class="container">

        <div class="layout layout_2">
            <div class="layout__inner">
                <div class="layout__col">

                    <div class="coord">
                        <div class="coord__deco">
                            <img src="img/sep.png" alt="">
                        </div>
                        <div class="coord__content">
                            <div class="coord__name">BD Agencements</div>
                            <p>
                                Bureaux et atelier<br>
                                ZA les Baliveaux<br>
                                77120 Amillis
                            </p>
                            <p>
                                Tél : 01 64 20 81 70<br>
                                <a href="mailto:contact@bdagencements.com">contact@bdagencements.com</a>
                            </p>
                            <p class="small">
                                Du lundi au vendredi - 7h30 à 12h - 13h30 à 17h30
                            </p>
                        </div>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2631.1973871426057!2d3.126759316042345!3d48.73992611699403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e8b1a259b69cbd%3A0x3a1473218617af09!2sBlezy+Davalo!5e0!3m2!1sfr!2sfr!4v1530176994190" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
                <div class="layout__col">
                    <div class="txtblock">
                        <div class="txtblock__inner">
                            <div class="txtblock__topttl">Contactez-nous</div>
                            <p class="bold">Remplissez le formulaire ci-dessous pour nous contacter</h1>
                            <div class="txtblock__txt">
                                <form class="form form_contact" action="contact.php" method="post">
                                    <div class="form__msg">
                                        <?php echo $msg; ?>
                                    </div>
                                    <div class="form__grp">
                                        <label for="Société" class="form__label">Société</label>
                                        <input type="text" name="Société" id="Société" class="form__input" value="<?php echo $societe; ?>">
                                    </div>
                                    <div class="form__grp">
                                        <label for="Nom" class="form__label">Nom *</label>
                                        <input type="text" name="Nom" id="Nom" class="form__input <?php echo $classes['Nom']; ?>" value="<?php echo $nom; ?>" required>
                                    </div>
                                    <div class="form__grp">
                                        <label for="Prénom" class="form__label">Prénom *</label>
                                        <input type="text" name="Prénom" id="Prénom" class="form__input <?php echo $classes['Prénom']; ?>" value="<?php echo $prenom; ?>" required>
                                    </div>
                                    <div class="form__grp">
                                        <label for="Adresse" class="form__label">Adresse</label>
                                        <input type="text" name="Adresse" id="Adresse" class="form__input" value="<?php echo $adresse; ?>">
                                    </div>
                                    <div class="form__grp">
                                        <label for="CP" class="form__label">Code postal</label>
                                        <input type="text" name="CP" id="CP" class="form__input" value="<?php echo $cp; ?>">
                                    </div>
                                    <div class="form__grp">
                                        <label for="Ville" class="form__label">Ville</label>
                                        <input type="text" name="Ville" id="Ville" class="form__input" value="<?php echo $ville; ?>">
                                    </div>
                                    <div class="form__grp">
                                        <label for="Tél" class="form__label">Téléphone *</label>
                                        <input type="tel" name="Tél" id="Tél" class="form__input <?php echo $classes['Tél']; ?>" value="<?php echo $telephone; ?>" required>
                                    </div>
                                    <div class="form__grp">
                                        <label for="Email" class="form__label">Email *</label>
                                        <input type="email" name="Email" id="Email" class="form__input <?php echo $classes['Email']; ?>" value="<?php echo $email; ?>" required>
                                    </div>
                                    <div class="form__grp form__grp_labeltop">
                                        <label for="Message" class="form__label">Message</label>
                                        <textarea name="Message" id="Message" class="form__input" rows="8"><?php echo $com; ?></textarea>
                                    </div>
                                    <div class="form__grp form__grp_right">
                                        <span class="smaller">* Champs obligatoires</span>
                                    </div>
                                    <div class="form__grp form__grp_right">
                                        <button type="submit" class="form__submit btn btn_neutre">Envoyer ></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include "incl_footer.php"; ?>

