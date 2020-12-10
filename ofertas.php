<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Luizzy Store</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Carrois+Gothic+SC&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="main.css">
</head>

<body>

<?php
	session_start();

	include 'conexao.php';
	include 'nav.php';
	include 'mensagemverde.html';
	$consulta = $conexao->query('SELECT * FROM produtos');

	
?>
  


<section class="my-cart p-0">
    <div class="heading-has-bg d-flex">
      <div class="container text-left align-self-center">
        <h1 class="text-uppercase">Promoções</h1>
      </div>
    </div>
  
  



  

  <!--  Produtos em destaque -->
  <section class="arrivals">
    <div class="container">
      <div class="section-heading text-center mb-5">
        <h1 class="text-clipped text-uppercase">Produtos em Destaque</h1>
        <p class="text-secondary">Compre os produtos em destaque! </p>
      </div>
	  
	  
	  <?php
	  
	  while ($exibir=$consulta->fetch(PDO::FETCH_ASSOC)) 
	  
	  ?>
	 
	 
	  
<div class="row text-center">
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="new-arrival-img mb-3">
            <img src="images/shoes/foto2.jpg" alt="black Nome do tênis" />
          </div>
          <a href="#">
            <span class="text-uppercase font-weight-bold">Nome do tênis</span><br />
			<p></p>
            <a href="oi.php"> <button class="btn btn-bg my-2">Compre agora </button>
          </a>
        </div>
		
		
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="new-arrival-img mb-3">
            <img src="images/shoes/foto3.jpg" alt="black Nome do tênis" />
          </div>
		  
		  
          <a href="#">
            <span class="text-uppercase font-weight-bold">Nome do tênis</span><br />
			<p></p>
            <a href="oi.php"> <button class="btn btn-bg my-2">Compre agora </button>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="new-arrival-img mb-3">
            <img src="images/shoes/foto4.jpg" alt="black Nome do tênis" />
          </div>
          <a href="#">
            <span class="text-uppercase font-weight-bold">Nome do tênis</span><br />
			<p></p>
            <a href="oi.php"> <button class="btn btn-bg my-2">Compre agora </button>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="new-arrival-img mb-3">
            <img src="images/shoes/foto5.jpg" alt="black Nome do tênis" />
          </div>
          <a href="#">
            <span class="text-uppercase font-weight-bold">Nome do tênis</span><br />
			<p></p>
            <a href="oi.php"> <button class="btn btn-bg my-2">Compre agora </button>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="new-arrival-img mb-3">
            <img src="images/shoes/foto6.jpg" alt="grey and black Nome do tênis" />
          </div>
          <a href="#">
            <span class="text-uppercase font-weight-bold">Nome do tênis</span><br />
			<p></p>
            <a href="oi.php"> <button class="btn btn-bg my-2">Compre agora </button>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="new-arrival-img mb-3">
            <img src="images/shoes/foto7.jpg" alt="white and blue Nome do tênis" />
          </div>
          <a href="#">
            <span class="text-uppercase font-weight-bold">Nome do tênis</span><br />
			<p></p>
            <a href="oi.php"> <button class="btn btn-bg my-2">Compre agora </button>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="new-arrival-img mb-3">
            <img src="images/shoes/foto8.png" alt="grey Nome do tênis" />
          </div>
          <a href="#">
            <span class="text-uppercase font-weight-bold">Nome do tênis</span><br />
			<p></p>
            <a href="oi.php"> <button class="btn btn-bg my-2">Compre agora </button>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="new-arrival-img mb-3">
            <img src="images/shoes/foto9.png" alt="grey and black Nome do tênis" />
          </div>
          <a href="#">
            <span class="text-uppercase font-weight-bold">Nome do tênis</span><br />
			<p></p>
            <a href="oi.php"> <button class="btn btn-bg my-2">Compre agora </button>
          </a>
        </div>
      </div>
    </div>
  </section>

            
  </section>
  <!-- Fim dos destaques -->

  <!-- serviços -->
  <section class="our-services">
    <div class="container">
      <div class="row text-center">
        <div class="col-12 col-sm-6 col-md-3 mb-5">
          <div class="our-services-icon d-flex mb-3 mx-auto">
            <i class="fas fa-shipping-fast text-clipped m-auto"></i>
          </div>
          <div class="our-services-description">
            <h5 class="text-uppercase font-weight-bold">Frete gratis para todo o Brasil!</h5>
            <p>Frete gratis em compras a cima de (DEFINIR) reais.!</p>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3 mb-5">
          <div class="our-services-icon d-flex mb-3 mx-auto">
            <i class="fas fa-sync text-clipped m-auto"></i>
          </div>
          <div class="our-services-description">
            <h5 class="text-uppercase font-weight-bold">Troca de mercadoria</h5>
            <p>Trocamos seu item caso ele apresente algum defeito!</p>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3 mb-5">
          <div class="our-services-icon d-flex mb-3 mx-auto">
            <i class="fas fa-headset text-clipped m-auto"></i>
          </div>
          <div class="our-services-description">
            <h5 class="text-uppercase font-weight-bold">Atendimento todos os dias!</h5>
            <p>Estamos prontos para atender vocês durante todos os dias!</p>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3 mb-5">
          <div class="our-services-icon d-flex mb-3 mx-auto">
            <i class="fas fa-credit-card text-clipped m-auto"></i>
          </div>
          <div class="our-services-description">
            <h5 class="text-uppercase font-weight-bold">Pagamentos on-line de forma segura!</h5>
            <p>Nós utilizamos tecnologia de ponta para efetuarmos vendas de forma segura.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

<!-- FOOTER -->

<footer>
     <div class="container-fluid bg-primary py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
            <div class="row py-0">
          <div class="col-sm-1 hidden-md-down">
              <a class="bg-circle bg-info" href="#">
                <i class="fa fa-2x fa-fw fa-address-card" aria-hidden="true "></i>
              </a>
            </div>
            <div class="col-sm-11 text-white">
                <div><h4>  Contato</h4>
                    <p>   <span class="header-font"></span><span class="header-font"></span>(37) 9 9835-7270</p>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-5">
          <div class="d-inline-block">
            <div class="bg-circle-outline d-inline-block" style="background-color:#3b5998">
              <a href="https://www.facebook.com/"><i class="fa fa-2x fa-fw fa-facebook text-white"></i>
		</a>
            </div>
            <div class="bg-circle-outline d-inline-block" style="background-color:#4099FF">
              <a href="https://twitter.com/">
                <i class="fa fa-2x fa-fw fa-twitter text-white"></i></a>
            </div>

            <div class="bg-circle-outline d-inline-block" style="background-color:#0077B5">
              <a href="https://www.instagram.com/">
                <i class="fa fa-2x fa-fw fa-linkedin text-white"></i></a>
            </div>
            <div class="bg-circle-outline d-inline-block" style="background-color:#d34836">
              <a href="https://www.google.com/">
                <i class="fa fa-2x fa-fw fa-google text-white"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</footer>

<!-- FIM DO FOOTER -->

  <!-- JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>
</html>
