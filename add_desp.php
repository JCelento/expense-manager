<?php
if(count($_POST)>0) {
    require_once("db.php");
    $sql = "INSERT INTO despesas (user, despesa, descDespesa, valor) VALUES ('" . $_POST["user"] . "','" . $_POST["despesa"] . "','" . $_POST["descDespesa"] . "','" . $_POST["valor"] . "')";
    mysqli_query($conn,$sql);
    $current_id = mysqli_insert_id($conn);
    if(!empty($current_id)) {
        $message = "Despesa adicionada!";
        header("Location:index.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Adicionar Despesa</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<style type="text/css">
	   
	   .brand{
	   		margin-top: -10px;
	       font-family: 'Lobster', cursive;
	       font-size:40px;

	   }

	   label{
		font-family:Arial;
		font-size:14px;
		color:#999999;
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

		a.nounderline:link  
		{  
 			text-decoration:none;  
		}  

		a:hover {
    	text-decoration:none;  
		}

		a:visited {
    	text-decoration:none; 
		}

		a:active{
    	text-decoration:none; 
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
	       margin-right: -10px;
	       margin-top: 5px;
	   }

	   .jumbotron{
	       margin-top: 50px;
	       background-color: rgba(127, 255, 212,0.7);
  		   background-color: -webkit-linear-gradient(bottom,rgba(127, 255, 212,0.4),rgba(127, 255, 212,1)); /*Safari 5.1-6*/
           background: -o-linear-gradient(top,rgba(127, 255, 212,0.4),rgba(127, 255, 212,1)); /*Opera 11.1-12*/
           background: -moz-linear-gradient(top,rgba(127, 255, 212,0.4),rgba(127, 255, 212,1)); /*Fx 3.6-15*/
           background: linear-gradient(to top, rgba(127, 255, 212,0.4), rgba(127, 255, 212,1)); /*Standard*/
	   }

	</style>
</head>
<body>

	<form action="" id="frmUser" method="post" name="frmUser">
		<div class="form-group">
			<div class="message">
				<?php if(isset($message)) { echo $message; } ?>
			</div>			

			 <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- -->
                </div>
                <div class="col-xs-6">
                <div class="container-fluid">
                <div class="jumbotron">
					<div class="row">
						<div class="col-xs-12">
							<div class="header">
								<h3 class="text-center brand nounderline""><a href="add_desp.php">Adicionar Despesa</a></h3><br>
							</div>
							<div class="col-xs-12">
								<div class="form-group">
									<label for="user">Nome de usuário</label> <input class="form-control txtField" name="user" type="text">
								</div>
								<div class="form-group">
									<label for="despesa">Nome da Despesa</label> <input class="form-control txtField" name="despesa" type="text">
								</div>
								<div class="form-group">
									<label for="descDespesa">Descrição da Despesa</label> <input class="form-control txtField" name="descDespesa" type="text">
								</div>
								<div class="form-group">
									<label for="valor">Valor</label> <input class="form-control txtField" min="0" name="valor" step="0.01" type="number">
								</div><button class="btn btn-primary" name="submit" type="submit" value="Enviar">Adicionar</button>
							</div>
						</div>
					</div>
				</div>
					<a href="index.php" class="nounderline">Voltar para a lista de Despesas</a>
                </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- -->
                </div>
            </div>
        </div>
			</div>
		</div>
	</form>
</body>
</html>