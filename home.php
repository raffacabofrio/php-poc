<?
	include_once("mkte_x/_biblioteca/server/autoconfig.php");
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
</head>

<body>
<div>

  <!--GALERIA DE DESTAQUES-->


  <div class="row justify-content-center" style="margin-top: 10rem; margin-left: rem;" id="destaques">
    <div class="text-center">
      <p>
        <img src="images/destaquetitle.png" alt="Livros em destaque" style="margin-bottom: -4rem;">
      </p>
      <p>
        <img src="images/Escolha o livro e leve pra casa.png" alt="Livros em destaque" style="margin-bottom: -3rem;">
      </p>
      <div class="container-fluid">
        <div class="card" style="width: 170px; height: 229px; margin-top:5rem;">
          <img class="card-img-top" src="images/rectangle.png" alt="Card image cap">
          <p class="card-text text-center">Nome do livro</p>
        </div>
        <div class="card" style="width: 170px; height: 229px; margin-top:5rem;">
          <img class="card-img-top" src="images/rectangle.png" alt="Card image cap">
          <p class="card-text text-center">Nome do livro</p>
        </div>
        <div class="card" style="width: 170px; height: 229px; margin-top:5rem;">
          <img class="card-img-top" src="images/rectangle.png" alt="Card image cap">
          <p class="card-text text-center">Nome do livro</p>
        </div>
        <div class="card" style="width: 170px; height: 229px; margin-top:5rem;">
          <img class="card-img-top" src="images/rectangle.png" alt="Card image cap">
          <p class="card-text text-center">Nome do livro</p>
        </div>
        <div class="card" style="width: 170px; height: 229px; margin-top:5rem;">
          <img class="card-img-top" src="images/rectangle.png" alt="Card image cap">
          <p class="card-text text-center">Nome do livro</p>
        </div>
        <div class="card" style="width: 170px; height: 229px; margin-top:5rem;">
          <img class="card-img-top" src="images/rectangle.png" alt="Card image cap">
          <p class="card-text text-center">Nome do livro</p>
        </div>
      </div>
    </div>
    <div class="text-center" style="margin-top: -4.5rem;">
      <div class="card" style="width: 170px; height: 229px; margin-top:5rem;">
        <img class="card-img-top" src="images/rectangle.png" alt="Card image cap">
        <p class="card-text text-center">Nome do livro</p>
      </div>
      <div class="card" style="width: 170px; height: 229px; margin-top:5rem;">
        <img class="card-img-top" src="images/rectangle.png" alt="Card image cap">
        <p class="card-text text-center">Nome do livro</p>
      </div>
      <div class="card" style="width: 170px; height: 229px; margin-top:5rem;">
        <img class="card-img-top" src="images/rectangle.png" alt="Card image cap">
        <p class="card-text text-center">Nome do livro</p>
      </div>
      <div class="card" style="width: 170px; height: 229px; margin-top:5rem;">
        <img class="card-img-top" src="images/rectangle.png" alt="Card image cap">
        <p class="card-text text-center">Nome do livro</p>
      </div>
      <div class="card" style="width: 170px; height: 229px; margin-top:5rem;">
        <img class="card-img-top" src="images/rectangle.png" alt="Card image cap">
        <p class="card-text text-center">Nome do livro</p>
      </div>
      <div class="card" style="width: 170px; height: 229px; margin-top:5rem;">
        <img class="card-img-top" src="images/rectangle.png" alt="Card image cap">
        <p class="card-text text-center">Nome do livro</p>
      </div>
    </div>
  </div>


  <!--CAROUSEL-->


  <div class="row justify-content-center carousel">
    <div id="carouselControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/bannerprop.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/bannerprop.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/bannerprop.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
        <button style="border-radius: 100px 100px 100px 100px; height: 50px; width: 50px; border:none; background-color: black;margin-left: -20rem; cursor: pointer;">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
        <button style="border-radius: 100px 100px 100px 100px; height: 50px; width: 50px; border:none; background-color: black;margin-right:
        -20rem; cursor: pointer;">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


  <!--SESSAO COMO FUNCIONA-->


  <div class="row justify-content-center" id="como_funciona">
    <img src="images/fundoazul.png" alt="como funciona" id="fundo_full">
    <p id="como_fazer">Funciona como uma rede solid�ria onde pessoas doam livros e outros ganham</p>
  </div>


  <!--SESSAO DE VANTAGENS-->


  <div class="row justify-content-center" id="vantagens">
    <img src="images/vantagens.png" alt="vantagens">
  </div>
  <p id="vantagens_title"></p>
  <p id="vantagens_full">Fazer o bem sem olhar a quem</p>
  <p id="person"></p>
  <p id="baixe_o_app"></p>
  <p id="escolha_o_livro"></p>
  <p id="marque_local"></p>
  <p id="pegue_o_livro"></p>
  
  <div style="height:200px"></div>


</div>
</body>

</html>