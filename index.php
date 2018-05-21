<?
	include_once("mkte_x/_biblioteca/server/autoconfig.php");
	include_once("mkte_x/_biblioteca/server/valor_default.php");
	
	valor_default("t", "home.php");
?>
<!doctype html>
<html lang="pt-br">

<head>
  <title><?=$__CFG["tx_descricao"]?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <meta name='description' content="<?=$__CFG["tx_obs"]?>" />
  <meta name='keywords'    content="<?=$__CFG["tx_keywords"]?>" />
  <link rel="alternate"    type="application/rss+xml" title="<?=$__CFG["tx_descricao"]?>" href="<?=__CFG('URL_RSS')?>" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/normalize.css">
  
  <base target="ifrm_principal" />
</head>

<body>


  <nav class="navbar  navbar-light bg-light">
    <div class="container icons">
      <div class="col-md-12 text-right">
        <a href="mkte_x/paginas/pagina.php?cd_pagina=6172">
        <img src="images/baixe.png" alt="baixe o app" id="baixe" border="0">
        <img src="images/store.png" alt="aple store e google store" id="store" border="0">
        <img src="images/iconfacebook.png" alt="facebook" id="facebook" border="0">
        </a>
      </div>
    </div>
  </nav>


  <!--TOPO DO SITE-->


  <div class="row navbar-link">
    <div class="col-md-12">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="col-6">
        <a href="home.php"><img src="images/logo.png" alt="logotipo" id="logotipo" border="0"></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-md-6 links">
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="nav">
               
              <a class="nav-item nav-link" href="home.php">Home</a>
              <a class="nav-item nav-link" href="doe_livro.php">Doe um Livro</a>
              <a class="nav-item nav-link" href="pagina.php?cd_pagina=6173">Quem somos</a>
              <a class="nav-item nav-link" href="pagina.php?cd_pagina=6174">Seja um apoiador</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>


  <!--JUMBOTRON COM INSER�AO DE IMAGEM DO TOPO-->


  <div class="jumbotron">
    <div class="col-md-12">
      <img src="images/find.png" alt="busca" width="21%" id="find">
    </div>
    <form class="form-inline">
      <div class="form-group mb-2">
        <label for="staticSearch" class="sr-only"></label>
        <input type="text" readonly class="form-control-plaintext" id="staticSearch" value="">
      </div>
      <div class="form-group mx-sm-3 mb-2">
        <label for="inputSearch" class="sr-only"></label>
        <input type="text" class="form-control" id="inputSearch" placeholder="" disabled>
      </div>
      <button type="button" class="btn btn-primary mb-2 submit_btn">OK</button>
    </form>
  </div>
  </div>


  <!--NAVBAR COM BOTOES PERSONALIZADOS-->


  <div class="container" id="button_container">
    <img src="images/navbtn.png" alt="" id="navbtn">

    <ul class="nav justify-content-center" id="buttons">
      <li class="nav-item">
        <button class="nav-link" href="#" id="btn_1"></button>
      </li>
      <li class="nav-item">
        <button class="nav-link" href="#" id="btn_2"></button>
      </li>
      <li class="nav-item">
        <button class="nav-link" href="#" id="btn_3"></button>
      </li>
      <li class="nav-item">
        <button class="nav-link" href="#" id="btn_4"></button>
      </li>
      <li class="nav-item">
        <button class="nav-link" href="#" id="btn_5"></button>
      </li>
      <li class="nav-item">
        <button class="nav-link" href="#" id="btn_6"></button>
      </li>
      <li class="nav-item">
        <button class="nav-link" href="#" id="btn_7"></button>
      </li>
      <li class="nav-item">
        <button class="nav-link" href="#" id="btn_8"></button>
      </li>
      <li class="nav-item">
        <button class="nav-link" href="#" id="btn_9"></button>
      </li>
      <li class="nav-item">
        <button class="nav-link" href="#" id="btn_10"></button>
      </li>
    </ul>
  </div>


  <!--MIOLO-->
  
  <a name="ifrm_principal_anchor" id="ifrm_principal_anchor"></a> 
  <iframe id="ifrm_principal" name="ifrm_principal" frameborder=0 scrolling="no" src="<?=$t?>" height="100%" width="100%" onload="resize_iframe()" allowtransparency="true"></iframe>



  <!--BANNER DE MARKETING-->


  <div class="row justify-content-center" id="banner_livros">
    <div class="col-sm-auto">
    <a href="doe_livro.php">
      <img src="images/banner_livros.png" class="img-fluid" alt="banner marketing de doador de livros" border="0">
      </a>
    </div>
  </div> 


  <!--FOOTER-->


  <div class="row justify-content-center" id="footer">
    <div class="container">
      <div class="col-sm-4 col-md-6 col-lg-10" id="face_store">
      <a href="pagina.php?cd_pagina=6172">
        <img src="images/facebookandstore.png" alt="facebook e lojas da apple e google">
        </a>
      </div>
      <div class="col-sm-4 col-md-6 col-lg-10" id="subscribe">
        <form class="form-inline" id="form">
          <img src="images/informativo.png" alt="increva-se e receba nosso informativo de novidades" id="informativo">
          <div class="form-group mb-2">
            <label for="subscribe" class="sr-only"></label>
            <input type="text" readonly class="form-control-plaintext" id="subscribe" value="">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <label for="inputSubscribe" class="sr-only"></label>
            <input type="text" class="form-control" id="inputSubscribe" placeholder="Digite seu email e receba novidades" disabled>
          </div>
          <button type="button" class="btn btn-warning mb-2" id="submit_button_footer"></button>
        </form>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    
    
<!-- RESIZE_IFRAME -->
	<a href="#ifrm_principal_anchor" target="_self" name="goto_ifrm_principal_anchor" id="goto_ifrm_principal_anchor"></a>
	<script type="text/javascript" src="mkte_x/_biblioteca/df_smooth_scroll/smooth.pack.js"></script>
	<script type="text/javascript">custom_home_page="<?=$__CFG["CONFIG"]["tx_url_home"]?>";Scroller.speed=5;</script>
	<script type="text/javascript" src="mkte_x/_scripts/resize_iframe.js"></script>    
<!-- FIM RESIZE_IFRAME -->

<!-- AWSTATS COM MAIS INFORMA��ES DO BROWSER -->
	<script type="text/javascript" src="mkte_x/_scripts/awstats_misc_tracker.js"></script>
	<noscript><img src="mkte_x/_scripts/awstats_misc_tracker.js?nojs=y" height="0" width="0" border="0" style="display: none" /></noscript>
<!-- FIM AWSTATS -->
    
</body>

</html>