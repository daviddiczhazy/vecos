<?php

$prijemca = "info@vecos.sk";

if ($meno && $email && $text){

mail("$prijemca", "kontakt", "$meno Posiela tento text: $text",
"from: $email");

echo "Váš <b>email bol</b> úspešne <b>odoslaný</b>!";

}

elseif (($meno && $email && $text) == false){

echo "Váš <b>email nebol odoslaný</b>. <b>Nezadali ste všetky</b> povinné
<b>údaje</b>.";

}

?>
