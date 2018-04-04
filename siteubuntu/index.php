<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubuntu Social</title>
	<script type="text/javascript" src="scriptUbuntu.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="style.css">


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
				<a class="navbar-brand" href="#home" style="padding-top: 0px;"><img src="fotos/logo.png" style="width: 100%; margin-right: -400px;""  ></a>
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
								<input type="search" class="form-control" size="70%" placeholder="Procurando a instituição ideal para doar ? " required>
								<div class="input-group-btn">
									<button type="button" class="btn btn-default" id="teste"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
								</div>
							</div>
						</form></li>

						<li><a href="#home">Ínicio</a></li>
						<li><a href="#portfolio">Projetos</a></li>
						<li><a href="#pricing">Quem Somos</a></li>


					</ul>

				</div>

			</div>

		</nav>

<!--<div class="jumbotron text-center colorhead ">
		<h1>Ubuntu Social</h1> 
		<p>A forma mais fácil de doar é aqui</p> 
		<form class="form-inline">
			<div class="input-group">
				<input type="search" class="form-control" size="75" placeholder="Procurando a instituição ideal para doar ? " required>
				<div class="input-group-btn">
					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
				</div>
			</div>
		</form>

	</div>-->
	<div id="home" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->

		<!--<ol class="carousel-indicators">
			<li data-target="#home" data-slide-to="0" class="active"></li>
			<li data-target="#home" data-slide-to="1"></li>
			<!-<li data-target="#home" data-slide-to="2"></li>
		</ol>-->

		<!-- Wrapper for slides -->

		<div class="carousel-inner" role="listbox" style="margin-top: 50px;">
			<div class="item active">
				<img src="fotos/ff2c4539-1d10-42fa-ac2a-2f8fd9e635de.jpg" alt="Ubuntu Vila Velha" >

				<div class="carousel-caption">
					<!--<h3>New York</h3>
						<p>The atmosphere in New York is lorem ipsum.</p>-->

					</div> 
				</div>

				<!--<div class="item">
					<img src="fotos/amigos.jpg" alt="Los Angeles">

					<div class="carousel-caption">
					<h3>Chicago</h3>
						<p>Thank you, Chicago - A night we won't forget.</p>
					</div> 
				</div>-->

			<!--
			<div class="item">
				<img src="fotos/30197922-1490-49ae-968a-f4522093f221.jpg" alt="Chicago">
				<div class="carousel-caption">
					<h3>LA</h3>
					<p>Even though the traffic was a mess, we had the best time.</p>
				</div> 
			</div>-->
		</div>

		<!-- Left and right controls -->
		<div class="carousel-indicators" style="margin-bottom: 5%;">
			<div>
				<img src="fotos/doar mais.png" alt="DOAR MAIS" style="width: 50%;
				height:50%;" >
			</div> 
			
			<!--<form class="form-inline">
				<div class="input-group">
					<input type="search" class="form-control" size="" placeholder="Procurando a instituição ideal para doar ? " required>
					<div class="input-group-btn">
						<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
					</div>
				</div>
			</form>-->
		</div>

		<a class="left carousel-control" href="#home" role="button" data-slide="prev">
			<!--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>-->
		</a>
		<a class="right carousel-control" href="#home" role="button" data-slide="next">
		<!--	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="bg-grey container-fluid text-center" id="portfolio">
		<h1>Projetos</h1>
		<div class="row ">
			<div class="col-sm-4"><a href="inst.php?inst=gg">
				<div class="thumbnail"  >
					<img src="fotos/gg5.jpg" alt="Instituto GG5 de Desenvolvimento Comunitário"  style="max-height:240px; ">
				<!--muda essa porra-->	<p style="margin-right: 5%; margin-left: 5%;" ><strong id="5">Instituto GG5 de Desenvolvimento Comunitário</strong></p>
					<div class="thumbnail" style=" max-height:80px; overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical; border: 0px;"><p  style="margin: 0 15px; ">O Instituto GG5 é a agência de Desenvolvimento local na Região 5, e apoiados seguintes projetos: Banco de Desenvolvimento Comunitário Terra: Recebe contas, promove créditos produtivos, de consumo e habitacional, faz cadastro da Tarifa Social de Energia e outros atendimentos
					</p></div>
				</div>
			</a></div>
			<div class="col-sm-4"><a href="inst.php?inst=apae de vila velha">
				<div class="thumbnail">
					<img src="fotos/apaees.jpg" alt="apae de vila velha
" class="box" style="max-height:240px">
					<p style="margin-right: 2%; margin-left: 2%;"><strong id="2">Apae de Vila Velha
</strong></p>
					<div class="thumbnail" style=" max-height:80px; overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical; border: 0px;"><p  style="margin: 0 15px; ">Comunidade que se une para prevenir e tratar a deficiência e promover o bem estar e desenvolvimento da pessoa com deficiência.</p></div>
				</div>
			</a></div>
			<div class="col-sm-4"><a href="inst.php?inst=Revive Sadraque">
				<div class="thumbnail">
					<img src="fotos/revive.jpg" alt="Revive Sadraque"  style="max-height:240px">
					<p style="margin-right: 2%; margin-left: 2%;"><strong id="3">Revive Sadraque</strong></p>
					<div class="thumbnail" style=" max-height:80px; overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical; border: 0px;"><p  style="margin: 10% 15px; ">Coletores de materiais recicláveis.</p></div>
				</div>
			</a></div>
		</div>
		<div class="row ">
			<div class="col-sm-4"><a href="inst.php?inst=Instituto Verde Vida">
				<div class="thumbnail"  >
					<img src="fotos/verdevida.jpg" alt="Instituto Verde Vida"  style="max-height:240px; ">
					<p style="margin-right: 2%; margin-left: 2%;"><strong id="6">Instituto Verde Vida</strong></p>
					<div class="thumbnail" style=" max-height:80px; overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical; border: 0px;"><p  style="margin: 0 15px; ">O Banco Comunitário visa a intervenção na realidade social da comunidade, proporcionando geração de trabalho, renda e inclusão social e garantindo a qualidade de vida humana, ambiental e animal.
					</p></div>
				</div>
			</a></div>
			<div class="col-sm-4"><a href="inst.php?inst=Ballet Stela Maria">
				<div class="thumbnail">
					<img src="fotos/ballet.jpg" alt="Ballet Stela Maria" class="box" style="max-height:240px ">
					<p style="margin-right: 2%; margin-left: 2%;"><strong id="4">Ballet Stela Maria
</strong></p>
					<p  style="margin: 10% 15px; ">O projeto possibilita à crianças a oportunidade aprender Ballet com um preço acessível. </p>
				</div>
			</a></div>
			<div class="col-sm-4"><a href="inst.php?inst=Ascamare">
				<div class="thumbnail">
					<img src="fotos/ascamare.jpg" alt="Ascamare"  style="max-height:240px">
					<p style="margin-right: 2%; margin-left: 2%;"><strong id="7">Ascamare (Associação dos Catadores de Materiais Recicláveis de Vitória)</strong></p>
					<div class="thumbnail" style=" max-height:80px; overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical; border: 0px;"><p  style="margin: 0 15px; ">A Associação é responsável pela triagem do material que chega pela prefeitura, coletado nos condomínios e ao longo da cidade, os separando para depois vender.</p></div>
				</div>
			</a></div>
		</div>



<?php


			//$servername = "localhost";
			//$username = "root";
			//$password = "";
			//$dbname = "ubuntusocial";
			$servername = "177.52.161.146";
			$username = "daniell2_lucas";
			$password = "1ixHK6vi";
			$dbname = "daniell2_ubuntusocial";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
define('CHARSET', 'UTF-8');

$sql = "select nome, idinst from instituicoes
limit 6;";

$result =mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<script>document.getElementById('". $row["idinst"]."').innerHTML = '" .utf8_encode ($row["nome"]). "' ; </script>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>


	</body>
	</html>
