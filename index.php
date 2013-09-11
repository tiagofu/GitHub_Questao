<!DOCTYPE html>
<html lang="en">
	<head>		
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<script type="text/javascript" src="TinyMCE/jscripts/tiny_mce/tiny_mce.js"></script>
		<script type="text/javascript" src="jquery_min.js"></script>
		
		<script type="text/javascript">
			
			var ativo1 = 1;
			var ativo2 = 1;
			
			function mostrarAtivo(tag){
				$('li').removeClass('active');
				jQuery(tag).parent().addClass("active");
			}

			$(document).ready(function(){
			jQuery("#respostas1").parent().addClass("active");
			 $('#alternativaB').hide();
			 
			 $('#respostas1').click(function(event){
			 event.preventDefault();
			 $("#alternativaA").show("slow");
			 $("#alternativaB").hide("slow");
			 ativo2 = 1; 
			 });
			 
			 $('#respostas2').click(function(event){
			 event.preventDefault();
			 $("#alternativaB").show("slow");
			 $("#alternativaA").hide("slow");
			 ativo2 = 2; 		
			 });	 
			 
			 
			 $('#ocultar').click(function(event){
			 event.preventDefault();
			 $("#conteudo").hide("slow");
			 $("#conteudo2").hide("slow");
			 $("#conteudo2").hide("slow");
			 });
			 });
			 
		</script>
		
		
		<title>index</title>
		<meta name="description" content="" />
		<meta name="author" content="Eduardo" />

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<style type="text/css">
			@import "questao.css";
		</style>
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	</head>

	<body>
		<?php include("TinyMCE/editorjs.php"); ?>
		<div id="questCorpo">
			<header>
				<h2> LOGO </h2>
			</header>
			
			<nav id="comptp"> 
				<ul>
					<li><a href="#"> 1 </a></li>
					<li><a href="#"> 2 </a></li>
					<li><a href="#"> 3 </a></li>
				</ul>	
			</nav>
			
			<nav id="alttp"> 
				<ul>
					<li><a href="#" id="respostas1" onclick="mostrarAtivo(this);"> 1 </a></li>
					<li><a href="#" id="respostas2" onclick="mostrarAtivo(this);"> 2 </a></li>
				</ul>	
			</nav>
			
			<footer>
			  <form method="post" action="view.php">
			  	<input type="hidden" name="tipo" value="" />
				<div id="enun"> 
					<textarea name="enunciado" style="width:100%; height:100px;"></textarea>
				</div>
				
				
				<div id="complemento"> 
					<textarea name="texto" style="width:100%; height:220px;"></textarea>
				</div>
				
				
				
				<div id="alternativaA"> 
					<p>&nbsp;<input type="radio" name="altervativa"/> A) &nbsp; <input type="text" name="altA" /> </p>
					<p>&nbsp;<input type="radio" name="altervativa"/> B) &nbsp; <input type="text" name="altB" /> </p>
					<p>&nbsp;<input type="radio" name="altervativa"/> C) &nbsp; <input type="text" name="altC" /> </p>
					<p>&nbsp;<input type="radio" name="altervativa"/> D) &nbsp; <input type="text" name="altD" /> </p>
					<p>&nbsp;<input type="radio" name="altervativa"/> E) &nbsp; <input type="text" name="altE" /> </p>
				</div>
				
				<div id="alternativaB"> 
					<p>&nbsp;<input type="radio" name="altervativa"/> A) &nbsp; <input type="file" /></p>
					<p>&nbsp;<input type="radio" name="altervativa"/> B) &nbsp; <input type="file" /> </p>
					<p>&nbsp;<input type="radio" name="altervativa"/> C) &nbsp; <input type="file" /> </p>
					<p>&nbsp;<input type="radio" name="altervativa"/> D) &nbsp; <input type="file" /> </p>
					<p>&nbsp;<input type="radio" name="altervativa"/> E) &nbsp; <input type="file" /> </p>
				</div>
				<div> <input type="submit" name="envia" value="Ver" onclick="this.form.target='_blank';return true;" /></div>
			  </form>
			</footer>
		</div>
	</body>
</html>
