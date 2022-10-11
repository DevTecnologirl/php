<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Academico</title>
</head>

<body>
    <!-EXERCICIO REFERENTE AO SABADO LETIVO - REALIZADO POR: Camilly Duarte- -->

   
<form method=POST>
<center>
<h5><b> SISTEMA ACADEMICO </b></h5>
<img href= >

Nota P1: <input type=text name=bim1> <br><br>
Nota P2: <input type=text name=bim2><br><br>
Nota P3: <input type=text name=bim3><br><br>
Nota P4: <input type=text name=bim4><br><br>

<select name="Calculos Disponiveis">
  <option value="media">Media</option>
  <option value="soma" selected>Soma</option>
 
</select>

<br><br>

<h6> Atividades Desenvolvidas</h6>
<!----------------------- VETOR DIS[]------------------>
<input type=checkbox name=dis[] value=prova>Prova
<input type=checkbox name=dis[] value=trabalho>Trabalho
<input type=checkbox name=dis[] value=teste>Teste
<input type=checkbox name=dis[] value=seminario>Seminario

<input type=submit name="Fechar Calculos">
</center>
</form>
</body>

<?php
if(isset($_POST["botao"])){
    echo "Disciplinas selecionadas:<br>";
    for($i = 0; $i < count($_POST["dis"]); $i++)
    echo $_POST["dis"][$i]."<br>";
    
?>

</html>

