<?php
require_once("db.php");
$sql = "SELECT * FROM despesas ORDER BY despesaId DESC";
$result = mysqli_query($conn,$sql);
?>
<html>
<head>
<title>Listagem de Despesas</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
<style type="text/css">
	
	.brand{
		font-family: 'Lobster', cursive;
		font-size:40px;

	}

	.add{
		font-family: 'Lobster', cursive;
		font-size:30px;
		margin-bottom: -30px;
		font-weight: bold;
		margin-top: -10px;

	}

	.hr{
		margin-left: -20px;
	}

	thead{
		font-weight: bold;
		color: #777;
		}


	.bigger{
		padding: 10px;
	}

	table{
		margin-top: -20px;
	}

	.navbar-default{
		background-color: #7fffd4;
	}

	.navbar-default .navbar-brand {
  		color: White;
  		text-shadow: 2px 2px #777;
	}
	.navbar-default .navbar-brand:hover,
	.navbar-default .navbar-brand:focus {
  		color: GhostWhite;
  		background-color: transparent;
	}
	#nav1{
		margin-right: -20px;
		margin-top: 2px;
	}



</style>
<nav class="navbar navbar-default">
<form name="frmUser" method="post" action="">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div class="container-fluid hr">
    <div class="navbar-header">
    <a href="index.php" class="brand navbar-brand">Despesas Pessoais</a></div>
        <div class="collapse navbar-collapse navbar-right" id="nav1">
      <ul class="nav navbar-nav">
        <li><a class="scroll add" href="add_desp.php"><img alt='Adicionar Despesa' title='Adicionar Despesa' src='images/adicionar.png' width='40px' height='50px'/><span class="sr-only">(current)</span></a></li>
</nav>
<table border="0" class=" table table-hover table-striped ">
<thead>
<tr>
<td>Nome de usuário</td>
<td>Nome da Despesa</td>
<td>Descrição da Despesa</td>
<td>Valor</td>
<td>Editar/Excluir</td>
</tr>
</thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["user"]; ?></td>
<td><?php echo $row["despesa"]; ?></td>
<td><?php echo $row["descDespesa"]; ?></td>
<td><?php echo $row["valor"]; ?></td>
<td><a href="edit_desp.php?despesaId=<?php echo $row["despesaId"]; ?>" class="link"><img alt='Edit' title='Editar' src='images/modificar.png' width='15px' height='15px' hspace='10' /></a>  <a href="delete_desp.php?despesaId=<?php echo $row["despesaId"]; ?>"  class="link"><img alt='Delete' title='Deletar' src='images/deletar.png' width='15px' height='15px'hspace='10' /></a></td>
</tr>
<?php
$i++;
}
?>
</table>
</form>
</div>
</body></html>