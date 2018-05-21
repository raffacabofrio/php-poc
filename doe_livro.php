<?
	include_once("mkte_x/_biblioteca/server/autoconfig.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Doe um livro</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


<link href="mkte_x/_css/base_page.css" rel="stylesheet" type="text/css" />


<!-- TODO: <script type="text/javascript" src="../_biblioteca/scripts/autocontexto.php"></script> -->
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-weight: bold;
}
.style3 {
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
</head>

<body bgcolor="transparent" allowtransparency="true">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    
    <table width="100%" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td height="51" valign="middle"><h1 class="menu_onde_estou"><?=$html_menu_onde_estou?></h1></td>
        <td width="110" align="right"><div id="bg_voltar"> <a href="javascript:window.history.go(-1)" title="Voltar"> <img src="mkte_x/images/bt_voltar.png" alt="Voltar" name="bt_voltar" class="bt_voltar" id="bt_voltar" /></a></div></td>
      </tr>
    </table>
    
    </td>
  </tr>
  <tr>
    <td><form name="frm_fale_conosco" action="mkte_x/fale_conosco/postback.php" method="post" onsubmit="return valida_frm()">
      <p>
        <script type="text/javascript">
	  function valida_frm()
	  {
	   	nome       = document.frm_fale_conosco.tx_nome.value
		telefone   = document.frm_fale_conosco.tx_tel.value
		email      = document.frm_fale_conosco.tx_email.value
		livros   = document.frm_fale_conosco.tx_livros.value
		
		if( nome       == "" ||
			telefone   == "" ||
			email      == "" ||
			livros   == "" )
		{
			alert("Não é permitido qualquer um dos campos SEUS DADOS vazio.\12Preencha todos os campos.")
			return false
		}
	  	
		
		if(email.indexOf("@")== -1 )
		{
			alert("O email informado não é válido.")
			return false
		}
		
		document.frm_fale_conosco.submit()
		
	  }
	  </script>
        <input name="tx_url_modelo" type="hidden" value="http://sharebook.wservices.srv.br/doe_livro_modelo.htm" />
        <input name="tx_email_destino" type="hidden" id="tx_email_destino" value="" />
        <br />
      </p>
<p>&nbsp;</p>
      <table width="500" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_borda">
        <tr>
          <td class="tbl_titulo">Doe um livro :)</td>
        </tr>
        <tr>
          <td><br />
            <br />
            <table width="410" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td width="80" align="right" valign="middle">Nome</td>
                <td width="310"><input name="tx_nome" type="text" class="frm_input_grande" id="tx_nome" >
                  </td>
              </tr>
            <tr>
              <td height="25" align="right" valign="middle">Link do meu perfil no Linkedin</td>
              <td height="25"><input name="tx_linkedin" type="text" class="frm_input_grande" id="tx_linkedin" /></td>
            </tr>
            <tr>
              <td width="80" height="25" align="right" valign="middle">Email</td>
              <td width="310" height="25"><input name="tx_email" type="text" class="frm_input_grande" id="tx_email"  >
              </td>
            </tr>
            <tr>
              <td width="80" height="24" align="right" valign="middle">DDD +<br />
Telefone(s)</td>
              <td width="310" height="24"><input name="tx_tel" type="text" class="frm_input_grande" id="tx_tel"  >
              </td>
            </tr>
            <tr>
              <td width="80" align="right" valign="top">Livros que vou doar<br />
                ( um por linha )</td>
              <td width="310" valign="top"><textarea name="tx_livros" class="frm_text" id="tx_livros"  ></textarea>
              </td>
            </tr>
            <tr>
              <td width="80" align="right" valign="top">&nbsp;</td>
              <td width="310" valign="top">&nbsp;</td>
            </tr>
            <tr valign="middle" align="center">
              <td height="42" colspan="2"><input type="submit" name="Submit3" value="Enviar" class="frm_bt">
                &nbsp;
                <input type="button" name="Submit22" value="Voltar" class="frm_bt" onClick="window.history.go(-1)">
                </td>
            </tr>
        </table>
            <br /></td>
        </tr>
      </table>
      <p><br />
          <br />
        </p>
    </form></td>
  </tr>
</table>
</body>
</html>