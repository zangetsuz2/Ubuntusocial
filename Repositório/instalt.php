<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubuntu Social</title>
	<script type="text/javascript" src="scriptUS.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="styleUs.css">


</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top ">
		<div class="container">
			<div class="navbar-header" ">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="/" style="padding-top: 0px;"><img src="fotos/logo.png" style="width: 100%; margin-right: -400px;""  ></a>
				<!--fazer o search ser responsivo-->
			</div>

					<!--<div class="form-group">
						<input type="text" class="form-control" placeholder="Search" size="80%" >
					<button type="submit" class="btn btn-default">Pesquisar</button>
					
				</div>-->


				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">

						<li><form class="navbar-form navbar-header navbar-right " action="pesquisa.php" method="get">
							<div class="input-group " style="margin-left: 10px; margin-right: 50px; ">
								<input type="search" name="pesquisa" class="form-control" size="70%" placeholder="Procurando a instituição ideal para doar ? " required>
								<div class="input-group-btn">
									<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
								</div>
							</div>
						</form></li>

						<li><a href="/#home">Ínicio</a></li>
						<li><a href="/#portfolio">Projetos</a></li>
						<li><a href="#">Quem Somos</a></li>


					</ul>

				</div>

			</div>

		</nav>

		<div class="container-fluid">
			
			<div class="row content"  style="margin-top:50px">
				<div class="project_cover hidden-xs hidden-sm" style="background-image: url(fotos/ff2c4539-1d10-42fa-ac2a-2f8fd9e635de.jpg);">
					<!--<img src="fotos/apaees.jpg" alt="apae de vila velha
					" class="box" style="margin-left: 30px; max-height:240px;" id="fotos">-->
					<!--trocar qnd for passar para php-->
					<span id="fotos"></span>
				</div>


				<div class="col-sm-3" style="padding: 10px 0px; " >
					
					<div class="panel panel-default text-center " style="margin-right: 0px;
    margin-left: 0px;">
						<div class="panel-heading">
							<h1 id="nome">Apae de vila velha</h1>
						</div>
						<div class="panel-body">
							<form method="post">
							<p ><strong>Área de atuação: </strong> </p>
							<textarea id="quem" class="form-control" rows="5">teste</textarea>
							<p ><strong>Número de impactados: </strong> </p>
							<input id="Num" type="number" class="form-control" placeholder="Não fornecido">
							<p ><strong>Endereço: </strong></p>
							<textarea id="endereco" class="form-control" rows="3" >teste</textarea>
							<p ><strong>Contato: </strong> </p>
								<input id="telefone" type="number" class="form-control">
							<p ><strong>Email: </strong></p>
							<input id="email" type="email" class="form-control">
							
							<div class="input-group-btn">
									<button type="submit" class="btn btn-default"></span> Salvar</button>
									<button type="reset" class="btn btn-default"></span> Cancelar</button>
							</div>
						</form>

  </div>
</div> 
						


					</div>

					<div class="col-sm-9" style="padding-right: 0px" >
						<!-- Teste-->
						<div class="topnav row" style="margin: 0px">

							<a class="active col-sm-4" name="oi" onclick="menualt('h.sobre', 'oi')" href="#home" id="h.sobre">Sobre</a></a>
							<a class=" col-sm-4" href="#news" name="oi" onclick="menualt('h.doa', 'oi')" id = "h.doa">Doações</a>
							<a class=" col-sm-4" href="#volunt" name="oi" onclick="menualt('h.voluntarios', 'oi')" id = "h.voluntarios" >Voluntários</a>
							<!--
								se voltar botar col-sm-3
								<a class=" col-sm-3" href="#contact" name="oi" onclick="menu('h.contatos', 'oi')" id = "h.contatos" >Comentários</a> -->
						</div>
						<!--<h1 style="text-align: center; " id="nome1"> Apae de vila velha </h1>-->
						<div id = "conteudo" class="containerm">
							<div class="row" style="margin-top: 0px"><big><b>Quem Somos ? </b></big></div>
							<div class="jumbotrom"> 
								<textarea id='desc' class='form-control' rows='5'></textarea>
							</div>
								
						</div>
					</div>
				</div>
			</div>

				<!--<footer class="container-fluid">
					<p></p>
				</footer>-->
				




		



				<!--<footer class="container-fluid">
					<p></p>
				</footer>-->
				<?php

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ubuntusocial";
			//$servername = "177.52.161.146";
			//$username = "daniell2_lucas";
			//$password = "1ixHK6vi";
			//$dbname = "daniell2_ubuntusocial";

// Create connection
				$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				$nome = $_GET['inst'];
				$sql = "select nome,textodesc,textovol,email,telefone,endereco,info,fotos from instituicoes where nome like '%$nome%';";

				$result = mysqli_query($conn, $sql);
				$depois = 'class="box" style="margin-left: 30px; max-height:240px">';

				if (mysqli_num_rows($result) > 0) {
					
    // output data of each row
					//document.getElementById('voluntario').innerHTML = '" .utf8_encode ($row["textovol"]). "' ;
					//						document.getElementById('info').innerHTML = '" .utf8_encode ($row["info"]). "' ;
					echo "<span>".$row["nome"]."</span>";
					while($row = mysqli_fetch_assoc($result)) {

						$anome = '"'.utf8_encode ($row["nome"]).'"';
						$foto = '"'.utf8_encode ($row["fotos"]).'"';

//


// trocar o quem por segmento
						echo"<script type='text/javascript'>document.getElementById('nome').innerHTML = " .$anome. " ; 
						document.getElementById('quem').value = '" .utf8_encode ($row["textodesc"]). "' ;
						document.getElementById('email').value = '" .utf8_encode ($row["email"]). "' ;
						document.getElementById('telefone').value = '" .utf8_encode ($row["telefone"]). "' ;
						document.getElementById('endereco').value = '" .utf8_encode ($row["endereco"]). "' ;
						document.getElementById('desc').value = '" .utf8_encode ($row["textodesc"]). "' ;
						document.getElementById('volunta').value = '" .utf8_encode ($row["textovol"]). "' ;
						document.getElementById('fotos').innerHTML = '<img  src=".$foto." alt=".$anome." ".$depois." ' ;					
						</script>";
						
						


					}
				} else {
					echo "0 results";

				}

				mysqli_close($conn);

				?>





			</body>
			</html>