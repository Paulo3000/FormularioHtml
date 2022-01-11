<html>
 <head>
  <title>Somar valores</title>
 </head>
<body>

<form name ="f_cad" method="get" action="index.php">

<label>Nome:</label><br/>
<input type="text" name="f_nome" size="40" maxlength="30"/><br/><br/>


<input type="submit" value="Enviar"/>
<input type="reset" value="Limpar"/>
</form>

<?php

$vnome =$_GET["f_nome"];
$vsenha =$_GET["f_senha"];
echo " meu nome é $vnome";

 

?>

</body>
</html>