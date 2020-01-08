<?php

if(!empty($_REQUEST['formValues'])){
    $formValues = json_decode($_REQUEST['formValues']);
    $response = [];

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
        $response['isMailSend'] = true;
    } else {
        $response['isMailSend'] = false;
    }

    echo json_encode($response);
    // return $response;
}
