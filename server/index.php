<?php

include 'cnx.php';

if(!empty($_REQUEST['formValues'])){
    $formValues = json_decode($_REQUEST['formValues']);
    $response = [];

    $rqt = "SELECT id FROM reservation WHERE mail = '".$formValues[2]->value."' LIMIT 1";
    $sql = $cnx->prepare($rqt);
    $sql->execute();
    $isMailExist = $sql->fetchAll(PDO::FETCH_ASSOC);

    if(empty($isMailExist)){
        $rqt = "INSERT INTO reservation (nom, prenom, mail, tel) VALUES ('".$formValues[0]->value."', '".$formValues[1]->value."', '".$formValues[2]->value."', '".$formValues[3]->value."')";
        $sql = $cnx->prepare($rqt);
        $sql->execute();

        $response['isMailSend'] = sendMail($formValues);
        $response['message'] = "Un mail de confirmation à été envoyé à l'adresse renseigné";
    }
    else{
        $response['isMailSend'] = false;
        $response['message'] = "Vous avez déjà reçu une invitation pour la conférence. Veuillez contactez l'administration pour plus d'informations.";
    }

    echo json_encode($response);
}

function sendMail($formValues){
    $to      = $formValues[2]->value;
    $subject = 'Validation de votre réservation à l\'IPSSI day - 25 Juin ';

    $message = 'Bonjour Madame/Monsieur '.$formValues[0]->value.' '.$formValues[1]->value.'<br><br>';
    $message .= 'Nous vous remercions d\'avoir réserver votre place pour l\'IPSSI CONF DAY qui se déroulera le 25 Juin 2020 en nos locaux.<br><br>';
    $message .= 'Nous vous contacterons prochainement pour vous transmettre votre place pour pouvoir accéder à l\'évènement.';
    $message .= '<br><br>';
    $message .= 'Ceci est un message automatique genere par le serveur<br>Merci de ne pas y repondre.';

    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = 'To: '.$formValues[0]->value.' '.$formValues[1]->value.' <'.$formValues[2]->value.'>';
    $headers[] = 'From: IPSSI <ipssi_day@ecole-ipssi.com>';

    if(mail($to, $subject, $message, implode("\r\n", $headers))){
        return true;
    } else {
        return false;
    }
}
