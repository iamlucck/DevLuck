<html>
<head>
<title>Cookies, Página 1</title>
<body>
<?php
if(isset($_COOKIE['nome']))
    echo "Seu  nome é $_COOKIE[nome].";
else
    echo  "Eu não sei o seu nome.";
?>
</body></html>