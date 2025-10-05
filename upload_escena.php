<?php
$escena = file_get_contents("php://input");
if (json_decode($escena) != null) {
        $hash = substr(md5($escena), 16);
        file_put_contents("escenes/{$hash}.txt", $escena);
        echo $hash;
} else {
        echo "error: invalid escena description";
}
?>


