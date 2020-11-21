<?php session_start(); 
?>

<html>
<head>
<title>Sessões, Página 1</title>
</head>
<body>
    
<?php
if(!isset($_SESSION['visitas']))
    $_SESSION['visitas'] = 0;
?>
Esta é sua visita número
<?php echo $_SESSION['visitas']++ ?>. <br>
<?php echo session_id(); 
session_regenerate_id();
?> 
</body>
</html>