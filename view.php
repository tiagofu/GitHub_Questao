<?php 

    require("Template.class.php"); 

    $tpl = new Template("view.html"); 
     
	 
	$tipo = $_REQUEST['tipo'];
	$enunciado = $_REQUEST['enunciado']; 
	$texto = $_REQUEST['texto'];
	$altA = $_REQUEST['altA'];
	$altB = $_REQUEST['altB'];
	$altC = $_REQUEST['altC'];
	$altD = $_REQUEST['altD'];
	$altE = $_REQUEST['altE'];
	
	$erro = "aa";
	
	if($enunciado == ""){
		$erro = "nao inseriu o enunciado /n";
	}
	if($texto == ""){
		$erro = $erro + "nao inserir texto";
	}
		$tpl->ENUNCIADO = $erro; 
		$tpl->COMPLEMENTO = $texto;
		$tpl->A = $altA;
		$tpl->B = $altB;
		$tpl->C	= $altC;
		$tpl->D = $altD;
		$tpl->E = $altE;
	if($erro != ""){
		$tpl->ERRO =  "<script> alert('".$erro."'); </script>";
	}
	
	 
    $tpl->show(); 
?>