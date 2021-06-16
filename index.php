<?php


$message ='{1:F01ACTZTZT0AXXX1011111222}{2:I103CORUTZT0XXXXN}{3:{103:TIS}{113:NNNN}{108:001MSOG21190005M}{121:5f99ea71-4e15-42ad-a72a-cd4f23c9f2c8}}{4::20:ABT6000:23B:CRED:32A:210615TZS20260:33B:TZS200250:50K:/00100737NTONSITE TESP O BOX 95068KIONONDONIDAR ES SALAAM:57A:TANZTZT0:59:/015250048170NGOPAL TEST:70:PAYMENT FOR AID:71A:OUR-}';



$message_parsed = explode(':',$message);

//var_dump($message_parsed);

foreach($message_parsed as $item){
	$new = explode('1:', $item);
	var_dump($new);
}
?>