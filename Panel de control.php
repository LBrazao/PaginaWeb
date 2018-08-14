<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />

	<title>Panel de control - TC Revista</title>

	<style>
		body{
			margin:10px;
			
		}
		
		.primeralinea{
			display:inline-block; 
			width:auto; 
			position:relative;
		}
		
		.segundalinea{
			width:auto; 
			position:relative;
		}
		
		[class*="box"]{
			width:100%;
			display:inline-block;
			align-top:0px;
		}
		
		[class*="box"]>*{
			margin:15px;
		}
		
		.box1 input, .box1 select,.box1 fieldset{
			text-size:11px;
			margin-top:5px;
			padding:5px;
		}
		input[type=number]{
			width:60px;
		}
		textarea{
			margin:auto;
			width:100%;
			position:inherit;
			border:1px solid black;
		}
		
		fieldset{
			border:0px;
		}
	</style>
</head>

<body>
<?php
function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}
?>

<script type="text/javascript" language="javascript" src="codigo-javascript.js"></script>

<script type="text/javascript" language="javascript" src="codigo-javascript1.js"></script>

	<form class="box1" name="cargaNoticia" id="cargaNoticia" method="post" action="subirNoticia.php" enctype="multipart/form-data"> 
	
		<div class="primeralinea">
			Titulo:
			<input type="text" name="titulo" id="titulo" size=40 placeholder="Titulo de la noticia"> <br>
		</div>
		
		<div class="primeralinea">
			Categoria: 
			<select  name="categoria[]" id="categoria" multiple >
				<option value="turismo carretera"onClick="{activarF()}">Turismo Carretera</option>
				<option value="tc pista"onClick="{activarF()}">TC Pista</option>
				<option value="super tc2000"onClick="{activarF()}">Super TC2000</option>
				<option value="tc2000"onClick="{activarF()}">TC2000</option>
				<option value="top race"onClick="{activarF()}">Top Race</option>
				<option value="top race series"onClick="{activarF()}">Top Race Series</option>
				<option value="turismo nacional"onClick="{activarF()}">Turismo Nacional</option>
				<option value="rally argentino"onClick="{activarF()}">Rally Argentino</option>
				<option value="formula renault"onClick="{activarF()}">Formula Renault</option>
				<option value="turismo pista"onClick="{activarF()}">Turismo Pista</option>
				<option value="rally cross country"onClick="{activarF()}">Rally Cross Country</option>
				
			</select>
			<script>
				function activarF(){
					var y=document.getElementById("fCarrera");
					y.disabled=false;
				}
			</script>
		</div>
						
		<div class="primeralinea">
			Fecha:
			<input type="number" name="fCarrera" id="fCarrera" min=1  disabled><br>
		</div>
	
		<div class=primeralinea>
			<label for="enVivo">EN VIVO </label> <input type="checkbox" name="enVivo" id="enVivo" value="enVivo" onClick="if(this.checked){activarVivo()}else{desactivarVivo()}">	
			
			<script>
				function activarVivo(){
					//document.getElementById("NprincipalC").disabled=true;
					document.getElementById("NsecundariaC").disabled=true;
					document.getElementById("NterciariaC").disabled=true;
					document.getElementById("NoticiaC").disabled=true;
					//document.getElementById("Nprincipal").disabled=true;
					document.getElementById("Nsecundaria").disabled=true;
					document.getElementById("Nterciaria").disabled=true;
					document.getElementById("Noticia").disabled=true;
					
					document.getElementById("NprincipalC").checked=true;
					document.getElementById("Nprincipal").checked=true
				}
				function desactivarVivo(){
					//document.getElementById("NprincipalC").disabled=false;
					document.getElementById("NsecundariaC").disabled=false;
					document.getElementById("NterciariaC").disabled=false;
					document.getElementById("NoticiaC").disabled=false;
					//document.getElementById("Nprincipal").disabled=false;
					document.getElementById("Nsecundaria").disabled=false;
					document.getElementById("Nterciaria").disabled=false;
					document.getElementById("Noticia").disabled=false;
				}
			</script>
		</div>

		<div class="primeralinea">
			<label for="vinculo">Vincular noticia</label> <input type="checkbox" name="vinculo" id="vinculo" value="vinculo" onClick="if(this.checked){activarVinculo()}else{desactivarVinculo()}">
			<input type="text" name="vinculoURL" id="vinculoURL" disabled>
			<script>
				function activarVinculo(){
					var y=document.getElementById("vinculoURL");
					y.disabled=false;
				}
				function desactivarVinculo(){
					var y=document.getElementById("vinculoURL");
					y.disabled=true;
				}
			</script>
		</div> 
			
		<div class="primeralinea" >
			<fieldset id="paginaPrincipal">
				<legend>Pagina principal</legend>
				 <label>
					<input type="radio" name="tiponoticia" id="Nprincipal" value="Nprincipal"> Noticia principal 
				 </label>
				 <label>
					<input type="radio" name="tiponoticia" id="Nsecundaria" value="Nsecundaria"> Noticia secundaria 
				 </label> <br>
				 <label>
					<input type="radio" name="tiponoticia" id="Nterciaria" value="Nterciaria"> Noticia terciaria 
				 </label>
				 <label>
					<input type="radio" name="tiponoticia" id="Noticia" value="Noticia"> Noticia General 
				 </label>
			</fieldset>
		</div>
		
		<div class="primeralinea" >
			<fieldset id="paginaCategorias">
			<legend>Pagina principal de categorias</legend>
				 <label>
					<input type="radio" name="tiponoticiaC" id="NprincipalC" value="Nprincipal"> Noticia principal 
				 </label>
				 <label>
					<input type="radio" name="tiponoticiaC" id="NsecundariaC" value="Nsecundaria"> Noticia secundaria 
				 </label> <br>
				 <label>
					<input type="radio" name="tiponoticiaC" id="NterciariaC" value="Nterciaria"> Noticia terciaria 
				 </label>
				 <label>
					<input type="radio" name="tiponoticiaC" id="NoticiaC" value="Noticia"> Noticia General 
				 </label>
			</fieldset>
		</div>
				
		<div class="primeralinea">
			<label for="fotofile">Agregar foto </label> <input type="file" name="fotofile" id="fotofile" accept="image/*" required><br> <br>
			<label for="video"> Agregar video </label> <input type="checkbox" name="video" id="video" value="video" onClick="if(this.checked){activarV()}else{desactivarV()}">
			
			<input type="text" name="videoURL" id="videoURL" disabled>
			
			<script>
				function activarV(){
					var y=document.getElementById("videoURL");
					y.disabled=false;
					document.getElementById("fotofile").disabled=true;
				}
				function desactivarV(){
					var y=document.getElementById("videoURL");
					y.disabled=true;
					document.getElementById("fotofile").disabled=false;
				}
			</script>
		</div> 
		
		
		<div class="segundalinea">
			Cuerpo: <br>
			<textarea name="cuerpo" id="cuerpo" placeholder="Titulo de la noticia" rows=15></textarea> <br>
		</div>
	
		<button type="submit" name="enviar"> Subir noticia</button>
	</form>
	

</body>

</html>
