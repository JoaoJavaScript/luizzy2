<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Luizzy store</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Carrois+Gothic+SC&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <header>
    <div class="custom-nav-container d-flex align-items-center justify-content-between px-2 shadow-sm py-3">
      <a class="text-clipped navbar-brand" href="#">
        <i class="far fa-gem d-flex">
          <span class="m-auto">ﾠLuizzy</span>
        </i>
      </a>
    <div class="main-nav-outer d-flex">
        <i class="fas fa-times text-clipped menu-close-icon d-lg-none"></i>

        <nav class="main-nav navbar navbar-light navbar-expand-lg text-center m-auto">
          <ul class="navbar-nav d-flex">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li>
              <a class="nav-link" href="#">Promoções</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Feminino</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Masculino</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Infantil</a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="nav-icons-container d-flex justify-content-between">
        <div class="nav-icons">
          <a href="">
            <i class="fas fa-search text-clipped"></i>
          </a>
        </div>

        <div class="nav-icons">
          <a href="">
            <i class="fas fa-shopping-bag bag-item-count text-clipped"></i>
          </a>
        </div>

        <div class="nav-icons">
          <div class="dropdown">
            <a class="dropdown-toggle" href="" data-toggle="dropdown">
              <i class="fas fa-user text-clipped"></i>
            </a>
            <div class="dropdown-menu">
              <form action="" class="p-2 text-secondary">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Enter email" required />
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Enter password" required />
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dropdown-checkbox" />
                  <label class="form-check-label" for="dropdown-checkbox">Remember me</label>
                </div>
                <button type="submit" class="btn btn-bg my-2">Login</button>
              </form>
              <div class="dropdown-divider mt-0"></div>
              <a class="dropdown-item" href="#">Don't have an account? Sign up</a>
              <a class="dropdown-item" href="#">Forgot your password?</a>

            </div>
          </div>
        </div>

        <div class="nav-icons d-lg-none">
          <i class="fas fa-bars open-menu-icon text-clipped"></i>
        </div>
      </div>
    </div>

  </header>

  <section class="my-cart p-0">
    <div class="heading-has-bg d-flex">
      <div class="container text-left align-self-center">
        <h1 class="text-uppercase">Carrinho</h1>
      </div>
    </div>

     <div class="container py-5">
    <div class="cart-item-container d-md-flex justify-content-between py-3 mb-5">
      <span class="remove-cart-item bg-danger d-flex"><i class="fas fa-times m-auto text-white"></i></span>

      <div class="px-3 my-3 text-center text-md-left">
        <a href="#">
          <div class="cart-item-img mx-auto mx-md-0 mb-3">
            <img class="img-flud" src="images/shoes/cart-shoe1.jpg" alt="black air max shoe" />
          </div>
          <div class="cart-item-product-info">
              <h5 class="text-uppercase">Nike Air Max Uptempo 720</h5>
              <span><strong>Tamanho:</strong>7</span>
              <span><strong>Cor:</strong>Black</span>
          </div>
        </a>
      </div>
      <div class="px-3 my-3 text-center">
        <div class="cart-item-label text-uppercase text-secondary font-weight-bold">
          Quantidade
          </div>
          <div class="d-inline-block">
            <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
            </select>
            </div>
      </div>

      <div class="px-3 my-3 text-center">
        <h5 class="cart-item-label text-uppercase text-secondary font-weight-bold">Preço</h5>
        <span>R$00,00</span>
      </div>

      <div class="px-3 my-3 text-center">
        <h5 class="cart-item-label text-uppercase text-secondary font-weight-bold">CUPOM</h5>
        <span>---</span>
      </div>
    </div>
    <!-- second cart item -->
    <div class="cart-item-container d-md-flex justify-content-between py-3 mb-5">
      <span class="remove-cart-item bg-danger d-flex"><i class="fas fa-times m-auto text-white"></i></span>

      <div class="px-3 my-3 text-center text-md-left">
        <a href="#">
          <div class="cart-item-img mx-auto mx-md-0 mb-3">
            <img class="img-flud" src="images/shoes/shoe3.jpg" alt="black and white nike" />
          </div>
          <div class="cart-item-product-info">
              <h5 class="text-uppercase">Nike Air VaporMax Flyknit 3 Blue Fury</h5>
              <span><strong>Tamanho:</strong>11</span>
              <span><strong>Cor:</strong>Black/White</span>
          </div>
        </a>
      </div>
      <div class="px-3 my-3 text-center">
        <div class="cart-item-label text-uppercase text-secondary font-weight-bold">
          Quantidade
          </div>
          <div class="d-inline-block">
            <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
            </select>
            </div>
      </div>

      <div class="px-3 my-3 text-center">
        <h5 class="cart-item-label text-uppercase text-secondary font-weight-bold">Preço</h5>
        <span>R$00,00</span>
      </div>

      <div class="px-3 my-3 text-center">
        <h5 class="cart-item-label text-uppercase text-secondary font-weight-bold">CUPOM</h5>
        <span>---</span>
      </div>



    </div>
<!-- end of second cart item -->
    </div>
  </section>

  <!-- end cart section -->



  <!-- JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>

</html>
