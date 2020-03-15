<?php 


if (isset($_POST['enviar'])){
    if (!empty($_POST['name'])&& !empty ($_POST['asunto'])&&  !empty($_POST['msg'])&&  !empty($_POST['email'])){
        
        $name = $_POST['name'];
        $asunto = $_POST['asunto'];
        $msg = $_POST['msg']; 
        $email = $_POST['email'];
        $header = "From: juvi69elpapu@gmail.com" . " \r\n";
         $header.= "Reply-To:juvi69elpapu@gmail.com" .  " \r\n";
        $header.="X-Mailer: PHP/". phpversion();
        
        $mail = @mail ($email,$asunto,$msg,$header);
        if ($mail){
            echo "<h4>Fue enviado correctamente</h4>";
        }
    }
    
     
}