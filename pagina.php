<? 
	include_once("mkte_x/_biblioteca/server/autoconfig.php");
	
 	include_once($__CFG["MKTE_PATH_RELATIVE"] . "/_biblioteca/proxy/cls_categoria.php"); 
	include_once($__CFG["MKTE_PATH_RELATIVE"] . "/_biblioteca/proxy/cls_pagina.php"); 
	
	$obj_pagi = new cls_pagina();
	$vt_paginas = $obj_pagi->busca_paginas($_GET);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?=$vt_paginas[0]["tx_titulo"]?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="mkte_x/_css/base_page.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/mkte_x/_scripts/jquery-1.7.1.min.js"></script>    
</head>
<body bgcolor="transparent" allowtransparency="true">
<center>
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="miolo" style="max-width:900px">
  <tr>
    <td>
    <h1><?=$vt_paginas[0]["tx_titulo"]?> </h1>
      <?=$vt_paginas[0]["tx_corpo"]?>    
    </td>
  </tr>
</table>
</center>
</body>
</html>