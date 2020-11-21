<html>
<head>
<title>Cookies, Página 1</title>
<body>
<?php
    if(isset($_COOKIE['contador'])){
        setcookie('contador',($_COOKIE['contador']+1));

    }
    else{
        setcookie('contador', 1);
    }
    echo  "Você visitou essas páginas ".$_COOKIE['contador']. " vezes";
?>
</body></html>