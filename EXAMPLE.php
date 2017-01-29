<?php

    include('SMS.php')
        
        $clientId = '098765432';
        $secretKey = '123124324';
        $shortCode = '292901233';
        $chikkaAPI = new ChikkaSMS($clientId,$secretKey,$shortCode);
        $response = $chikkaAPI->sendText('1234561','639166785501','tests');
        
        header("HTTP/1.1 ".$response->status." ".$response->message);

        exit($response->$description);

?>