<?php

if(!empty($_POST["send"])){
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

    #$toEmail = $_POST['testemail@gmail.com'];

    echo $recharge . " ". $montant . " " . $devise . " " . $codeEnregistrement1 . " " .$codeEnregistrement2 . " " .$codeEnregistrement3. " ".$codeEnregistrement4. " ".$codeEnregistrement5. " ".$codeEnregistrement6. " ".$codeEnregistrement7. " ".$codeEnregistrement8. " ".$codeEnregistrement9;


}


?>