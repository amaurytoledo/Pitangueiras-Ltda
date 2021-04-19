<html>
<head>
<title> Cadastro de Gestor ou Técnico </title>
</head>
<body>
<form method="POST" action="cadastro.php">
<input type="radio" id="gest" name="funcao" value="gest">
<label for="gest">Gestor</label><br>
<input type="radio" id="tec" name="funcao" value="tec">
<label for="tec">Técnico</label><br>
<label>Login:</label><input type="text" name="login" id="login"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
</form>
</body>
</html>