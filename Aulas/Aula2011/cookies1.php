<?php $b = setcookie ('nome','Fábrica de Software');
?>

<html>
<head>
<title>Cookies, Página 1</title>
<body><?php
if ($b)
    echo "Cookie enviado com sucesso";
else
    echo "Erro ao enviar o cookie.";
?></body>
</html>