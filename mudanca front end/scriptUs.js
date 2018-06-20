function menu(id, name){
	var nome = document.getElementsByName(name);
	for (var i = nome.length - 1; i >= 0; i--) {
		nome[i].className = "col-sm-3";
	}
	document.getElementById(id).className = "active col-sm-3";
	switch (id){
		case "h.sobre":
		document.getElementById("conteudo").innerHTML =  "<div class='row' style='margin-top: 0px'><big><b>Quem Somos ? </b></big></div><div class='jumbotrom'><p><big id='quem'> 	Comunidade que se une para prevenir e tratar a deficiência e promover o bem estar e desenvolvimento da pessoa com deficiência.</big></p></div>";
		break;
		case "h.info":
		document.getElementById("conteudo").innerHTML =  "<b>Gostaria de ajudar ?</b></big></div><div class='jumbotrom'><p><big><span class='glyphicons glyphicons-dining-set'></span>Alimento<br><span class='glyphicons glyphicons-t-shirt'></span>Roupa<br><span class='glyphicons glyphicons-education'></span>Materias Didáticos<br><span class='glyphicons glyphicons-soccer-ball'></span>Brinquedos<br><span class='glyphicons glyphicons-usd'></span>Dinheiro<br><span class='glyphicons glyphicons-cleaning'></span>Materiais de Limpeza <br>";
		break;	
		case "h.vonluntarios":
		document.getElementById("conteudo").innerHTML =  "<p><big id='voluntario'>	Precisamos de Voluntários que tenham facilidade de cozinhar, limpeza, relacionar com crianças, etc. Comprometimento, ir de coração, para fazer a Instituição crescer.</big></p></div>";
		break;
		case "h.contatos":
		document.getElementById("conteudo").innerHTML =   "";
		break;
	}

}

//wesley
function validaForm()
{
	var counterro = 0;
	document.getElementById('erro').innerHTML="";
	document.getElementById('erro').style.display="none";
	document.getElementById('usuario').style.border="";
	document.getElementById('senha').style.border="";

	if (document.getElementById('usuario').value== "" && document.getElementById('senha').value == "")
	{
		document.getElementById('erro').innerHTML="Preencha o campo usuario<br>Preencha o campo senha";
		document.getElementById('erro').style.display="block";
		document.getElementById('usuario').style.border="2px solid red";
		document.getElementById('senha').style.border="2px solid red";
		counterro+=1;
	}
	if (document.getElementById('usuario').value == "")
	{
		document.getElementById('erro').innerHTML="Preencha o campo usuario <br>";
		document.getElementById('erro').style.display="block";
		document.getElementById('usuario').style.border="2px solid red";
		counterro+=1;
	}
	if (document.getElementById('senha').value == "")
	{
		document.getElementById('erro').innerHTML+="Preencha o campo senha";
		document.getElementById('erro').style.display="block";
		document.getElementById('senha').style.border="2px solid red";
		counterro+=1;
	}
	if(counterro>=1)
	{
		return false;
	}
	else
	{
		return true;
	}
}

function validaFormCad()
{
	var counterro1=0;
	document.getElementById('erro1').innerHTML="";
	document.getElementById('erro1').style.display="none";
	document.getElementById('usuario').style.border="";
	document.getElementById('senha').style.border="";


	if (document.getElementById('nomeinst').value == "")
	{
		document.getElementById('erro1').innerHTML="Preencha o campo Nome da instituição <br>";
		document.getElementById('erro1').style.display="block";
		document.getElementById('nomeinst').style.border="2px solid red";
		counterro1+=1;
	}
	if (document.getElementById('telefone').value == "")
	{
		document.getElementById('erro1').innerHTML+="Preencha o campo Telefone <br>";
		document.getElementById('erro1').style.display="block";
		document.getElementById('telefone').style.border="2px solid red";
		counterro1+=1;
	}
	if (document.getElementById('email').value == "")
	{
		document.getElementById('erro1').innerHTML+="Preencha o campo Email <br>";
		document.getElementById('erro1').style.display="block";
		document.getElementById('email').style.border="2px solid red";
		counterro1+=1;
	}
	if (document.getElementById('usu').value == "")
	{
		document.getElementById('erro1').innerHTML+="Preencha o campo Usuário <br>";
		document.getElementById('erro1').style.display="block";
		document.getElementById('usu').style.border="2px solid red";
		counterro1+=1;
	}
	if (document.getElementById('pass').value == "")
	{
		document.getElementById('erro1').innerHTML+="Preencha o campo Senha <br>";
		document.getElementById('erro1').style.display="block";
		document.getElementById('pass').style.border="2px solid red";
		counterro1+=1;
	}
	if(counterro1>=1)
	{
		return false;
	}
	else
	{
		return true;
	}
}