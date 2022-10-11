<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica medica</title>
</head>


<body>
<center><h1>MARCAÇÃO DE CONSULTAS</h1></center>
<form method=POST>
Nome do Paciente:<input type="text" name="nome"><br><br>
Data da consulta: <input type="text" name="data"><br><br>
Valor da consulta <input type="text" name="valor"><br><br>
<br>
<select name="tipo">
  <option value="particular">Particular</option>
  <option value="social" selected>Social</option>
</select>
<br>
<input type="radio" id="" name="medico" value="rodrigo">
<label for="rodrigo">Rodrigo</label><br>

<input type="radio" id="" name="medico" value="angela">
<label for="angela">Angela</label><br>

<input type="radio" id="" name="medico" value="ricardo">
<label for="ricardo">Ricardo</label><br>

<input type="radio" id="" name="medico" value="Cibele">
<label for="cibele">Cibele</label><br>

<input type="radio" id="" name="medico" value="Enrico">
<label for="Enrico">Enrico</label><br>
<br>
<p><b>Exames Solicitados</b></p> 
<input type="checkbox" value="sangue" name=dis[]> Sangue: <br/>
<input type="checkbox" value="ultrasom" name=dis[]> Ultrassom:<br/> 
<input type="checkbox" value="urina" name=dis[]> Urina: <br>
<input type="checkbox" value="urina" name=dis[]> Tomografia: <br>
<br>
<input type=submit value="marcar consulta" name="marcar">
</body>
</form>
</html>

<!-- Variavel vetor -->
<?php
if(isset($_POST["marcar"]))
{
    echo "<h3> CONSULTA SELECIONADA:</h3>";
    for($i = 0; $i < count($_POST["dis"]); $i++)
    echo $_POST["dis"][$i]."<br>";

    if($_POST["tipo"]=="particular")
    {
        echo "Particular: ".($_POST["valor"]*10);
    }
    else
    {
        echo "Social: ".($_POST["valor"]*0.05);
        echo "<br>";
    }


if($_POST["medico"]=="rodrigo")
{
    echo "<b><font color:red>Médico indisponível no momento</font></b> <br>";
}

for($i = 0; $i < count($_POST["dis"]); $i++)
{
if($_POST["dis"][$i]=="ultrasom")
{
echo "<i><font color=blue> Exame não realizado pela clinica </font></i> <br>";
}
}

echo "<a href=index.html> </a>";
}
?>
