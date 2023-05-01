<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

  header('Content-type: text/xml');
  $userPressed = (int) $_POST['Digits'];
  switch ($userPressed) {
    case 1:
      // Redirection vers l'URL de commande
      echo '<Response><Redirect>https://candyshop25.site</Redirect></Response>';
      break;
    case 2:
      // Message pour contacter le service client
      echo '<Response><Say language="fr-FR" voice="alice">Le service client est actuellement fermé. Merci de réessayer plus tard.</Say></Response>';
      break;
    default:
      // Message d'erreur pour les autres choix
      echo '<Response><Say language="fr-FR" voice="alice">Désolé, nous n\'avons pas compris votre choix. Veuillez réessayer plus tard.</Say></Response>';
      break;
  }
?>
