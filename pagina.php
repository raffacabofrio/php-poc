<? 
	include_once("mkte_x/_biblioteca/server/autoconfig.php");
	
	include_once($__CFG["MKTE_PATH_RELATIVE"] . "/_biblioteca/server/verifica_url_personalizada.php");
	verifica_url_personalizada();	
	
	
 	include_once($__CFG["MKTE_PATH_RELATIVE"] . "/_biblioteca/proxy/cls_categoria.php"); 
	include_once($__CFG["MKTE_PATH_RELATIVE"] . "/_biblioteca/proxy/cls_pagina.php"); 

	$obj_cate    = new cls_categoria();
	$obj_cate->categoria_target = "PAGI";
	
	$obj_pagi = new cls_pagina();
	$vt_paginas = $obj_pagi->busca_paginas($_GET);
	
	//echo "<PRE>";
	//var_dump($vt_paginas);
	//echo "</PRE>";
	
	if($vt_paginas[0]["tx_path"] != "")
	{
		$tx_path_amigavel = $vt_paginas[0]["tx_path_amigavel"] . "//" . $vt_paginas[0]["tx_titulo"];
		$tx_path          = $vt_paginas[0]["tx_path"] . "/" . $vt_paginas[0]["cd_pagina"];		
		$html_menu_onde_estou        = $obj_cate->imprime_menu_onde_estou($tx_path, $tx_path_amigavel);
	}
	else
	{
		$tx_path_amigavel = $vt_paginas[0]["tx_titulo"];
		$tx_path          = $vt_paginas[0]["cd_pagina"];		
		$html_menu_onde_estou        = $obj_cate->imprime_menu_onde_estou($tx_path, $tx_path_amigavel);
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=$vt_paginas[0]["tx_titulo"]?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


<!-- CSS PERSONALIZADO -->
<? 
	if($__CFG["CONFIG"]["tx_url_css"] != "") 
	{
		echo "<link href=\"" . $__CFG["URL"] . $__CFG["CONFIG"]["tx_url_css"] . "\" rel=\"stylesheet\" type=\"text/css\" />";
	}
	else
	{
?>
		<link href="mkte_x/_css/base_page.css" rel="stylesheet" type="text/css" />
<? } ?>
<!-- CSS PERSONALIZADO -->



	<!-- INÍCIO JQUERY -->
	<script type="text/javascript" src="/mkte_x/_scripts/jquery-1.7.1.min.js"></script>
	<!-- FIM JQUERY -->
    
    
</head>

<body bgcolor="transparent" allowtransparency="true">
<center>
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="miolo" style="max-width:900px">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" id="titulo">
      <tr>
        <td valign="middle"><h1 class="menu_onde_estou"><?=$html_menu_onde_estou?></h1></td>
        <td width="110" align="right"><div id="bg_voltar"> <a href="javascript:window.history.go(-1)" title="Voltar"> <img src="mkte_x/images/bt_voltar.png" alt="Voltar" name="bt_voltar" class="bt_voltar" id="bt_voltar" /></a> </div></td>
      </tr>
    </table>      </td>
  </tr>
  <tr>
    <td>
      <?=$vt_paginas[0]["tx_corpo"]?>    
        
   	  <?
			//----------------------------------------------
			//ATIVAR COMENTÁRIOS???
			
			if($__CFG["CONFIG"]["in_comentarios_pagina"] == "S")
			{
				include_once($__CFG["MKTE_PATH_RELATIVE"] . "/_biblioteca/proxy/cls_mural.php");
				$obj_mural = new cls_mural();
			
				$tx_codigo_generico = "PAGI_" . $_GET["cd_pagina"];
				$obj_mural->widget($tx_codigo_generico);
			}
		?>
    
    
    </td>
  </tr>
</table>
</center>
</body>
</html>