<script type="text/javascript">
	
	function validaForm()
	{
		document.getElementById('erro').innerhtml="";
		document.getElementById('erro').style.display="none";
		document.getElementById('usuario').style.border="";
        document.getElementById('senha').style.border="";


		if (document.getElementById('usuario').value == "")
		{
			document.getElementById('erro').innerhtml="Preencha o campo usuario <br>";
			document.getElementById('erro').style.display="block";
			document.getElementById('usuario').style.border="2px solid red";
			return false;
		}
		if (document.getElementById('senha').value == "")
		{
			document.getElementById('erro').innerhtml+="Preencha o campo senha";
			document.getElementById('erro').style.display="block";
			document.getElementById('senha').style.border="2px solid red";
			return false;
		}
		else
		{
			return true;
		}
	}
</script>